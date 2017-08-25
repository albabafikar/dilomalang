<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/08/17
 * Time: 21:12
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Events;
use AppBundle\Entity\Report;
use AppBundle\Entity\ImageResize;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class ReportController extends Controller
{
    
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        if($request->getMethod() == 'POST') {
            $report = new Report();
            $report->setReportTitle($request->get('report_title'));
            $report->setReportDate(date('Y-m-d',strtotime($request->get('report_date'))));
            $report->setReportTopic($request->get('report_topic'));
            $report->setReportMentor($request->get('report_mentor'));
            $report->setReportTime($request->get('report_time'));
            $report->setReportMember($request->get('report_member'));
            $report->setReportDetail($request->get('report_detail'));
            $report->setReportCategory($request->get('report_category'));


            if(!is_dir($this->getParameter('report_directory')['resource'])){
                @mkdir($this->getParameter('report_directory')['resource'],0777,true);
            }

            $file = $request->files->get('report_photo');

            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $exAllowed = array('jpg', 'png', 'jpeg');

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (in_array($ext, $exAllowed)) {
                if ($file instanceof UploadedFile) {
                    if (!($file->getClientSize() > (1024 * 1024 * 1))) {
                        ImageResize::createFromFile(
                            $request->files->get('report_photo')->getPathName()
                        )->saveTo($this->getParameter('report_directory')['resource'] . '/' . $filename, 20, true);
                        $report->setReportPhoto($filename);
                    } else {
                        return 'gambar tidak boleh lebih dari 1 MB';
                    }
                }
            } else {
                return 'cek kembali extension gambar anda';
            }

//            return var_dump($report);
            $em->persist($report);
            $em->flush();

            return $this->redirect($this->generateUrl('app_report_list'));
        }

        return $this->render('AppBundle:event:report-event.html.twig');
    }

    public function deleteEventAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Events::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_report_list'));

    }

    public function getAllReportAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Report::class)->findAll();

        return $this->render('AppBundle:event:list-report.html.twig',['data'=>$data]);
    }

    public function updateReportAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $report = $em->getRepository(Report::class)->find($id);

        if($request->getMethod() == 'POST') {
            $report->setReportTitle($request->get('report_title'));
            $report->setReportDate(date('Y-m-d',strtotime($request->get('report_date'))));
            $report->setReportTopic($request->get('report_topic'));
            $report->setReportMentor($request->get('report_mentor'));
            $report->setReportTime($request->get('report_time'));
            $report->setReportMember($request->get('report_member'));
            $report->setReportDetail($request->get('report_detail'));
            $report->setReportCategory($request->get('report_category'));

            if(!is_dir($this->getParameter('report_directory')['resource'])){
                @mkdir($this->getParameter('report_directory')['resource'],0777,true);
            }

            $file = $request->files->get('report_photo');

            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $exAllowed = array('jpg', 'png', 'jpeg');

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (in_array($ext, $exAllowed)) {
                if ($file instanceof UploadedFile) {
                    if (!($file->getClientSize() > (1024 * 1024 * 1))) {
                        ImageResize::createFromFile(
                            $request->files->get('report_photo')->getPathName()
                        )->saveTo($this->getParameter('report_directory')['resource'] . '/' . $filename, 20, true);
                        $report->setReportPhoto($filename);
                    } else {
                        return 'gambar tidak boleh lebih dari 1 MB';
                    }
                }
            } else {
                return 'cek kembali extension gambar anda';
            }

            $em->persist($report);
            $em->flush();

            return $this->redirect($this->generateUrl('app_report_list'));

        }

        return $this->render('AppBundle:event:update-report.html.twig',['data'=>$report]);

    }

     public function ViewReportAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $report = $em->getRepository(Report::class)->find($id);

        // $family = $em->getRepository(UserFamily::class)->findByUserId($id);

        return $this->render('AppBundle:event:view-report.html.twig', [
            'report' => $report
          
        ]);
    }

}