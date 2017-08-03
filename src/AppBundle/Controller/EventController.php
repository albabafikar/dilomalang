<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/08/17
 * Time: 21:12
 */

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
            $event->setEventPrice($request->get('event_price'));
            $event->setEventDetail($request->get('event_detail'));
            $event->setEventPrice($request->get('event_price'));
            $event->setEventCategory($request->get('event_category'));

            if(!is_dir($this->getParameter('event_directory')['resource'])){
                @mkdir($this->getParameter('event_directory')['resource'],0777,true);
            }

            $file = $request->files->get('event_photo');

            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $exAllowed = array('jpg', 'png', 'jpeg');

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (in_array($ext, $exAllowed)) {
                if ($file instanceof UploadedFile) {
                    if (!($file->getClientSize() > (1024 * 1024 * 1))) {
                        ImageResize::createFromFile(
                            $request->files->get('event_photo')->getPathName()
                        )->saveTo($this->getParameter('event_directory')['resource'] . '/' . $filename, 20, true);
                        $event->setEventPhoto($filename);
                    } else {
                        return 'gambar tidak boleh lebih dari 1 MB';
                    }
                }
            } else {
                return 'cek kembali extension gambar anda';
            }

//            return var_dump($event);
            $em->persist($event);
            $em->flush();

            return 'data berhasil masuk';
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
            $event->setEventPrice($request->get('event_price'));
            $event->setEventDetail($request->get('event_detail'));
            $event->setEventPrice($request->get('event_price'));

            if(!is_dir($this->getParameter('event_directory')['resource'])){
                @mkdir($this->getParameter('event_directory')['resource'],0777,true);
            }

            $file = $request->files->get('event_photo');

            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $exAllowed = array('jpg', 'png', 'jpeg');

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (in_array($ext, $exAllowed)) {
                if ($file instanceof UploadedFile) {
                    if (!($file->getClientSize() > (1024 * 1024 * 1))) {
                        ImageResize::createFromFile(
                            $request->files->get('event_photo')->getPathName()
                        )->saveTo($this->getParameter('event_directory')['resource'] . '/' . $filename, 20, true);
                        $event->setEventPhoto($filename);
                    } else {
                        return 'gambar tidak boleh lebih dari 1 MB';
                    }
                }
            } else {
                return 'cek kembali extension gambar anda';
            }

            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('app_event_list'));

        }

        return $this->render('AppBundle:event:update-event.html.twig',['data'=>$event]);

    }

}