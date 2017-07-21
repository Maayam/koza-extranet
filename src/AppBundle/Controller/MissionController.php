<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use AppBundle\Entity\Mission;
use AppBundle\Entity\User;

use AppBundle\Form\MissionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MissionController extends Controller
{
    /**
     * @Route("/mission/new/{userId}", name="new_mission")
     */
    public function newAction(Request $request, $userId){
        $mission = new Mission();
        
        $form = $this->createForm(MissionType::class, $mission)
        ->add('Sauvegarder', SubmitType::class);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            if($mission->getPath() != NULL){
            //handle the file
                // $file stores the uploaded PDF file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $mission->getPath();
                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                // Move the file to the directory where media are stored
                $file->move(
                    $this->getParameter('mission_thumbnail_directory'),
                    $fileName
                );
                // Update the 'path' property to store the PDF file name
                // instead of its contents
                $mission->setPath($fileName);
                //how to create a FIle instance for edit Form
                /*
                $media->setPath( new File($this->getParameter('media_directory').'/'.$media->getPath()));
                */    
            }
            
        //now validate the form
            $validator = $this->get('validator');
            $errors = $validator->validate($mission);
            if (count($errors) > 1) { // this is a workaround an unknown error
                return $this->render('admin/new_mission.html.twig', array(
                    'errors' => $errors,
                    'mission' => $mission,
                    'form' => $form->createView()
                ));
            }
            
        //generate automatic fields
            //check if user exists;
            $userExists = $this->getDoctrine()->getRepository(User::class)->findOneById($userId);
            if( $userExists != NULL){
                //save mission to db
                $userId = $userExists->getId();
                $mission->setUser($userExists);
                $mission->setCreated(new \DateTime(date('Y-m-d H:i:s')));
                $em = $this->getDoctrine()->getManager();
                $em->persist($mission);
                $em->flush();
                
                //redirect with a nice message
                $this->addFlash(
                    'success',
                    "La nouvelle mission a été enregistrée avec succès"
                );
                return $this->redirectToRoute('show_user', array('userId' => $userId));
            }
            else{
                die('Fatal error: User does not exist');
            }
        }

        return $this->render('admin/new_mission.html.twig', array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/mission/edit/{missionId}", name="edit_mission")
     */
    public function editAction(Request $request, $missionId){
        $mission = $this->getDoctrine()->getRepository(Mission::class)->findOneById($missionId);
        
        //instatiate FILE for symfony Form
        $thumbName = $mission->getPath();
        if($mission->getPath() != NULL){
            $thumbnail = new File(
                $this->getParameter('mission_thumbnail_directory')
                .$thumbName
            );
            $mission->setPath($thumbnail);
        }
        
        $form = $this->createForm(MissionType::class, $mission)
        ->add('Sauvegarder', SubmitType::class);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            //if an image was uploaded handle the file
            if($mission->getPath() != NULL){
                // $file stores the uploaded PDF file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $mission->getPath($this->getParameter('mission_thumbnail_directory'));
                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                // Move the file to the directory where media are stored
                $file->move(
                    $this->getParameter('mission_thumbnail_directory'),
                    $fileName
                );
                // Update the 'path' property to store the PDF file name
                // instead of its contents
                $mission->setPath($fileName);
            }
            //else, keep the one already presentin db
            else{
                $mission->setPath($thumbName);
            }
        //now validate the form
            $validator = $this->get('validator');
            $errors = $validator->validate($mission);
            if (count($errors) > 1) {
                return $this->render('admin/new_mission.html.twig', array(
                    'errors' => $errors,
                    'mission' => $mission,
                    'form' => $form->createView()
                ));
            }
            
        //generate automatic fields
            //check if mission exists;
            $missionExists = $this->getDoctrine()->getRepository(Mission::class)->findOneById($missionId);
            if( $missionExists != NULL){
                //save mission to db
                $mission->setUser($missionExists->getUser());
                $em = $this->getDoctrine()->getManager();
                $em->persist($mission);
                $em->flush();
                
                //redirect with a nice message
                $this->addFlash(
                    'success',
                    "La mission a été modifiée avec succès"
                );
                return $this->redirectToRoute('show_mission', array('missionId' => $missionId));
            }
            else{
                die('Fatal error: mission does not exist');
            }
        }

        return $this->render('admin/new_mission.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /**
     * @Route("/mission/delete/{missionId}", name="delete_mission", requirements={"missionId": "\d+"})
     */
    public function deleteAction(Request $request, $missionId){
        $mission = $this->getDoctrine()->getRepository(Mission::class)->findOneById($missionId);
        $userId = $mission->getUser()->getId();
        $name = $mission->getName();
        
        $em = $this->getDoctrine()->getManager();
        
        $em->remove($mission);
        $em->flush();
        
        $this->addFlash('success', "la mission $name a bien été supprimée");
        return $this->redirectToRoute('show_user', array('userId' => $userId));
    }
}
