<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/08/17
 * Time: 20:29
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Member;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MemberController extends Controller
{

    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $member = new Member();
            $member->setMemberName($request->get('member_name'));
            $member->setMemberActivity($request->get('member_activity'));
            $member->setMemberTotal($request->get('member_total'));
            $member->setMemberGenre($request->get('member_genre'));
            $member->setMemberStatus($request->get('member_status'));
            $member->setMemberEmail($request->get('member_email'));
            $member->setMemberDate(date('Y-m-d',strtotime($request->get('member_date'))));

            $em->persist($member);
            $em->flush();

            return $this->redirect($this->generateUrl('app_member_list'));
        }

        return $this->render('AppBundle:member:create-member.html.twig');
    }

    public function getAllMemberAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Member::class)->findAll();

        return $this->render('AppBundle:member:list-member.html.twig',['data'=>$data]);
    }

    public function deleteMemberAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Member::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_member_list'));
    }

    public function updateMemberAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $member = $em->getRepository(Member::class)->find($id);

        if($request->getMethod() == 'POST') {
            $member->setMemberName($request->get('member_name'));
            $member->setMemberActivity($request->get('member_activity'));
            $member->setMemberTotal($request->get('member_total'));
            $member->setMemberGenre($request->get('member_genre'));
            $member->setMemberStatus($request->get('member_status'));
            $member->setMemberEmail($request->get('member_email'));
            $member->setMemberDate(date('Y-m-d',strtotime($request->get('member_date'))));

            $em->persist($member);
            $em->flush();

            return $this->redirect($this->generateUrl('app_member_list'));
        }
        return $this->render('AppBundle:member:update-member.html.twig',['data'=>$member]);

    }


}