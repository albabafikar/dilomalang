<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Management;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ManagementController extends Controller
{

    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $management = new Management();
            $management->setManageMonth($request->get('manage_month'));
            $management->setManageYear($request->get('manage_year'));
            $management->setManageDataMember($request->get('manage_datamember'));
            $management->setManageDataUser($request->get('manage_datauser'));
            $management->setManageDatafb($request->get('manage_datafb'));
            $management->setManageDatatwitter($request->get('manage_datatwitter'));
            $management->setManageDataig($request->get('manage_dataig'));
            $management->setManageDataStartup($request->get('manage_datastartup'));
            $management->setManageDataCommunity($request->get('manage_datacommunity'));

            $em->persist($management);
            $em->flush();

            return $this->redirect($this->generateUrl('app_management_list'));
        }

        return $this->render('AppBundle:management:create-management.html.twig');
    }

    public function getAllManagementAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Management::class)->findAll();

        return $this->render('AppBundle:management:list-management.html.twig',['data'=>$data]);
    }

    public function deleteManagementAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Management::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_management_list'));
    }

    public function updateManagementAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $management = $em->getRepository(Management::class)->find($id);

        if($request->getMethod() == 'POST') {
          
            $management->setManageMonth($request->get('manage_month'));
            $management->setManageYear($request->get('manage_year'));
            $management->setManageDataMember($request->get('manage_datamember'));
            $management->setManageDataUser($request->get('manage_datauser'));
            $management->setManageDatafb($request->get('manage_datafb'));
            $management->setManageDatatwitter($request->get('manage_datatwitter'));
            $management->setManageDataig($request->get('manage_dataig'));
            $management->setManageDataStartup($request->get('manage_datastartup'));
            $management->setManageDataCommunity($request->get('manage_datacommunity')); 
             $em->persist($management);
             $em->flush();

             return $this->redirect($this->generateUrl('app_management_list'));
        }
        return $this->render('AppBundle:management:update-management.html.twig',['data'=>$management]);

    }
    public function ViewManagementAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $management = $em->getRepository(Management::class)->find($id);

        // $family = $em->getRepository(UserFamily::class)->findByUserId($id);

        return $this->render('AppBundle:management:view-management.html.twig', ['data'=>$management]);

    }



}