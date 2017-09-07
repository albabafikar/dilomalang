<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class AdminController extends Controller 
{
  public function createAction(Request $request)
  {
      $em = $this->getDoctrine()->getEntityManager();

      if($request->getMethod() == 'POST') {
          $user = new User();
          $user->setUsername($request->get('username'));
          $user->setPassword($request->get('password'));
          $user->setJobDesk($request->get('job_desk'));

          $em->persist($user);
          $em->flush();

          return $this->redirect($this->generateUrl('app_login'));
      }

      return $this->render('AppBundle:default:register.html.twig');
  }

  public function loginAction(Request $request) 
  {
       if ($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $password = md5($request->get('password'));
            $em = $this->getDoctrine()->getManager();

            $data = $em->getRepository(User::class)->findByUsername($username);

            if ($data instanceof User) {
                if ($data != null) {
                    if ($password == $data->getPassword()) {
                        $session = $request->getSession();

                        $session->set('uid', ['value' => $data->getId()]);
                        $session->set('username', ['value' => $username]);

                    } else {
                        return $this->redirect($this->generateUrl('app_login'));
                    }
                } else {
                    return $this->redirect($this->generateUrl('app_login'));
                }
            }

            return $this->redirect($this->generateUrl('app_index'));
        }

        return $this->render('AppBundle:default:login.html.twig');
  } 

  public function indexAction(Request $request)
  {

    if($request->getSession()->get('username') == null)
    {
        return $this->redirect($this->generateUrl('app_login'));
    }
      
    return $this->render('AppBundle:home:home.html.twig');

  }

  public function logoutAction(Request $request)
  {
      $session = $request->getSession();

      $session->clear();

      return $this->redirect($this->generateUrl('app_login'));
  }

    public function getAllUserAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(User::class)->findAll();

        return $this->render('AppBundle:user:list-user.html.twig',['data'=>$data]);
    }
}
