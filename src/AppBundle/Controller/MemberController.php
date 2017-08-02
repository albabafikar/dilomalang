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
            $member->setMemberDate(date('Y-m-d',strtotime($request->get('member_date'))));

            $em->persist($member);
            $em->flush();

            return 'data berhasil masuk';
        }

        return $this->render('AppBundle:member:create-member.html.twig');
    }


}