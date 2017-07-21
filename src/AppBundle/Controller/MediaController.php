<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Media;
use AppBundle\Entity\Mission;

use AppBundle\Form\MediaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class MediaController extends Controller
{
    /**
     * @Route("/media/show/{mediaId}", name="show_media")
     */
    public function showAction($mediaId){
        $media = $this->getDoctrine()->getRepository(Media::class)->findOneById($mediaId);
        /**
         * $basePath can be either exposed (typically inside web/)
         * or "internal"
         */

        $basePath = $this->container->getParameter('kernel.root_dir').'/../web/'.$this->container->getParameter('media_directory');

        $filePath = $basePath.$media->getPath();

        // check if file exists
        $fs = new FileSystem();
        if (!$fs->exists($filePath)) {
            throw $this->createNotFoundException();
        }

        // prepare BinaryFileResponse
        $response = new BinaryFileResponse($filePath);
        $response->trustXSendfileTypeHeader();
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_INLINE,
            $media->getName().".pdf",
            iconv('UTF-8', 'ASCII//TRANSLIT', $media->getName().".pdf")
        );
        return $response;
    }
    
    /**
     * @Route("/media/new/{missionId}", name="new_media")
     */
    public function newAction(Request $request, $missionId){
        $media = new Media();
        
        //$media->setMission('SET_MISSION_HERE_LATER');
        // See https://symfony.com/doc/current/book/forms.html#submitting-forms-with-multiple-buttons
        $form = $this->createForm(MediaType::class, $media)
        ->add('Téléverser le fichier', SubmitType::class);
        
        $form->handleRequest($request);
        
        // the isSubmitted() method is completely optional because the other
        // isValid() method already checks whether the form is submitted.
        // However, we explicitly add it to improve code readability.
        // See https://symfony.com/doc/current/best_practices/forms.html#handling-form-submits
        if ($form->isSubmitted() && $form->isValid()) {
        //handle the file
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $media->getPath();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // Move the file to the directory where media are stored
            $file->move(
                $this->getParameter('media_directory'),
                $fileName
            );
            // Update the 'path' property to store the PDF file name
            // instead of its contents
            $media->setPath($fileName);
            //how to create a FIle instance for edit Form
            /*
            $media->setPath( new File($this->getParameter('media_directory').'/'.$media->getPath()));
            */
                
            //generate automatic fields
            //get Mission
            $mission = $this->getDoctrine()->getRepository(Mission::class)->findOneById($missionId);
            $media->setMission($mission);
            
            $media->setCreated(new \DateTime(date('Y-m-d H:i:s')));
            
            $missionId = $mission->getId();
                
            //save the media to database
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

            // Flash messages are used to notify the user about the result of the
            // actions. They are deleted automatically from the session as soon
            // as they are accessed.
            // See https://symfony.com/doc/current/book/controller.html#flash-messages
            $this->addFlash('success', 'Nouveau document téléversé avec succès');

            if ($form->get('Téléverser le fichier')->isClicked()) {
                return $this->redirectToRoute('show_mission', array('missionId' => $missionId));
            }

            return $this->redirectToRoute('home');
        }

        return $this->render('admin/new_media.html.twig', [
            'media' => $media,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/media/delete/{mediaId}", name="delete_media", requirements={"mediaId": "\d+"})
     */
    public function deleteAction(Request $request, $mediaId){
        $media = $this->getDoctrine()->getRepository(Media::class)->findOneById($mediaId);
        $missionId = $media->getMission()->getId();
        $name = $media->getName();
        
        $em = $this->getDoctrine()->getManager();
        
        $em->remove($media);
        $em->flush();
        
        $this->addFlash('success', "le media de $name a bien été supprimé");
        return $this->redirectToRoute('show_mission', array('missionId' => $missionId));
    }
}
