<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Operational;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class operationalController extends Controller
{

    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $operational = new operational();
            $operational->setoperationalName($request->get('operational_name'));
            $operational->setoperationalMonth($request->get('operational_month'));
            $operational->setoperationalYear($request->get('operational_year'));
            $operational->setoperationalQty($request->get('operational_qty'));
            $operational->setoperationalUnitprice($request->get('operational_unitprice'));
            $operational->setoperationalTotal($request->get('operational_total'));
            $operational->setoperationalCategory($request->get('operational_category'));
            

            $em->persist($operational);
            $em->flush();

            return $this->redirect($this->generateUrl('app_operational_list'));
        }

        return $this->render('AppBundle:operational:input-operational.html.twig');
    }

    public function getAllOperationalAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Operational::class)->findAll();

        return $this->render('AppBundle:Operational:list-operational.html.twig',['data'=>$data]);
    }

    public function deleteOperationalAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Operational::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_operational_list'));
    }

    public function updateOperationalAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $operational = $em->getRepository(Operational::class)->find($id);

        if($request->getMethod() == 'POST') {
            $operational->setoperationalName($request->get('operational_name'));
            $operational->setoperationalMonth($request->get('operational_month'));
            $operational->setoperationalYear($request->get('operational_year'));
            $operational->setoperationalQty($request->get('operational_qty'));
            $operational->setoperationalUnitprice($request->get('operational_unitprice'));
            $operational->setoperationalTotal($request->get('operational_total'));
            $operational->setoperationalCategory($request->get('operational_category'));
            


            $em->persist($operational);
            $em->flush();

            return $this->redirect($this->generateUrl('app_operational_list'));
        }
        return $this->render('AppBundle:Operational:update-Operational.html.twig',['data'=>$operational]);

    }


}