<?php

namespace AppBundle\Controller;


use AppBundle\Entity\ReportOperation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\ImageResize;


class ReportOperationController extends Controller
{

    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $reportoperation = new reportoperation();
            $reportoperation->setRoName($request->get('ro_name'));
            $reportoperation->setRoMonth($request->get('ro_month'));
            $reportoperation->setRoYear($request->get('ro_year'));
            $reportoperation->setRoQty($request->get('ro_qty'));
            $reportoperation->setRoUnitprice($request->get('ro_unitprice'));
            $reportoperation->setRoFile($request->get('ro_file'));
            $reportoperation->setRoStatus($request->get('ro_status'));
            $reportoperation->setRoDate($request->get('ro_date'));
            $reportoperation->setRoNote($request->get('ro_note'));
            
              if(!is_dir($this->getParameter('ro_directory')['resource'])){
                @mkdir($this->getParameter('ro_directory')['resource'],0777,true);
            }

            $file = $request->files->get('ro_note');

            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $exAllowed = array('jpg', 'png', 'jpeg');

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (in_array($ext, $exAllowed)) {
                if ($file instanceof UploadedFile) {
                    if (!($file->getClientSize() > (1024 * 1024 * 1))) {
                        ImageResize::createFromFile(
                            $request->files->get('ro_note')->getPathName()
                        )->saveTo($this->getParameter('ro_directory')['resource'] . '/' . $filename, 20, true);
                        $reportoperation->setRoNote($filename);
                    } else {
                        return 'gambar tidak boleh lebih dari 1 MB';
                    }
                }
            } else {
                return 'cek kembali extension gambar anda';
            }

            //            return var_dump($report);

            $em->persist($reportoperation);
            $em->flush();

            return $this->redirect($this->generateUrl('app_reportoperation_list'));
        }

        return $this->render('AppBundle:operational:input-ReportOperation.html.twig');
    }

    public function getAllReportOperationAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(ReportOperation::class)->findAll();

        return $this->render('AppBundle:operational:list-ReportOperation.html.twig',['data'=>$data]);
    }

    public function deleteReportOperationAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(ReportOperation::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_reportoperation_list'));
    }

    public function updateReportOperationAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $reportReportOperation = $em->getRepository(ReportOperation::class)->find($id);

        if($request->getMethod() == 'POST') {
            $reportoperation->setRoName($request->get('ro_name'));
            $reportoperation->setRoMonth($request->get('ro_month'));
            $reportoperation->setRoYear($request->get('ro_year'));
            $reportoperation->setRoQty($request->get('ro_qty'));
            $reportoperation->setRoUnitprice($request->get('ro_unitprice'));
            $reportoperation->setRoFile($request->get('ro_file'));
            $reportoperation->setRoStatus($request->get('ro_status'));
            $reportOperation->setRoDate(date('Y-m-d',strtotime($request->get('ro_date'))));
            $reportoperation->setRoNote($request->get('ro_note'));

          if(!is_dir($this->getParameter('ro_directory')['resource'])){
                @mkdir($this->getParameter('ro_directory')['resource'],0777,true);
            }

            $file = $request->files->get('ro_note');

            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $exAllowed = array('jpg', 'png', 'jpeg');

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (in_array($ext, $exAllowed)) {
                if ($file instanceof UploadedFile) {
                    if (!($file->getClientSize() > (1024 * 1024 * 1))) {
                        ImageResize::createFromFile(
                            $request->files->get('ro_note')->getPathName()
                        )->saveTo($this->getParameter('ro_directory')['resource'] . '/' . $filename, 20, true);
                        $reportoperation->setRoNote($filename);
                    } else {
                        return 'gambar tidak boleh lebih dari 1 MB';
                    }
                }
            } else {
                return 'cek kembali extension gambar anda';
            }

            $em->persist($reportoperation);
            $em->flush();

            return $this->redirect($this->generateUrl('app_reportoperation_list'));
        }
        return $this->render('AppBundle:operational:update-ReportOperation.html.twig',['data'=>$reportOperation]);

    }

     public function ViewReportOperationAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $reportoperation = $em->getRepository(ReportOperation::class)->find($id);

        // $family = $em->getRepository(UserFamily::class)->findByUserId($id);

        return $this->render('AppBundle:operational:view-ReportOperation.html.twig', [
            'reportoperation' => $reportoperation
          
        ]);
    }



}