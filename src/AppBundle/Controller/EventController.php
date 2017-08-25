<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Events;
use AppBundle\Entity\ImageResize;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class EventController extends Controller
{
    
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        if($request->getMethod() == 'POST') {
            $event = new Events();
            $event->setEventName($request->get('event_name'));
            $event->setEventDate(date('Y-m-d',strtotime($request->get('event_date'))));
            $event->setEventTopic($request->get('event_topic'));
            $event->setEventMentor($request->get('event_mentor'));
            $event->setEventMentorjob($request->get('mentor_job'));
            $event->setEventTime($request->get('event_time'));
            $event->setEventParticipant($request->get('event_participant'));
            $event->setEventCategory($request->get('event_category'));

//            return var_dump($event);
            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('app_event_list'));
        }

        return $this->render('AppBundle:event:create-event.html.twig');
    }

    public function deleteEventAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Events::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_event_list'));

    }

    public function getAllEventAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Events::class)->findAll();

        return $this->render('AppBundle:event:list-event.html.twig',['data'=>$data]);
    }

    public function updateEventAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $event = $em->getRepository(Events::class)->find($id);

        if($request->getMethod() == 'POST') {
            $event->setEventName($request->get('event_name'));
            $event->setEventDate(date('Y-m-d',strtotime($request->get('event_date'))));
            $event->setEventTopic($request->get('event_topic'));
            $event->setEventMentor($request->get('event_mentor'));
            $event->setEventMentorjob($request->get('mentor_job'));
            $event->setEventTime($request->get('event_time'));
            $event->setEventParticipant($request->get('event_participant'));
            $event->setEventDetail($request->get('event_detail'));
            $event->setEventCategory($request->get('event_category'));


            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('app_event_list'));

        }

        return $this->render('AppBundle:event:update-event.html.twig',['data'=>$event]);
        
    }

     public function ViewEventAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $event = $em->getRepository(Events::class)->find($id);

        // $family = $em->getRepository(UserFamily::class)->findByUserId($id);

        return $this->render('AppBundle:event:view-event.html.twig', [
            'event' => $event
          
        ]);
    }

}