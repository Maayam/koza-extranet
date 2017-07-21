<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

use AppBundle\Entity\User;
use AppBundle\Entity\Mission;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexUsersAction(Request $request, SessionInterface $session)
    {
        //check if user is admin
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            //else get all clients
            $userRepo = $this->getDoctrine()->getRepository(User::class);
            $users = $userRepo->findAll();
        
            $context = array(
                'users' => $users
            );
            return $this->render('explorer/explorer.html.twig', $context);
        }
        else if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
            //GET LOGGED IN USER ENTITY
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $firstName = $user->getFirstName();
            $familyName = $user->getFamilyName();
            //redirect to this users homepage
            $this->addFlash('success', "Bienvenue $firstName $familyName");
            return $this->redirectToRoute('show_user', array('userId' => $user->getId()));
        }
        else{
            $this->addFlash('notice', "Veuillez vous connecter pour accéder au panneau d'administration");
            return $this->redirectToRoute('login');
        }
    }
    
    /**
     * @Route("/user/show/{userId}", name="show_user")
     */
    public function showUserAction(Request $request, $userId){
        //get all missions from client
        $user = $this->getDoctrine()->getRepository(User::class)->findOneById($userId);
        $missions = $this->getDoctrine()->getRepository(Mission::class)->findByUser($user);
        
        $context = array(
            'user' => $user,
            'missions' => $missions
        );
        return $this->render('explorer/user.html.twig', $context);
    }
    
    /**
     * @Route("/mission/show/{missionId}", name="show_mission")
     */
    public function showMissionAction(Request $request, $missionId){
        //get all medias for this mission
        $doc = $this->getDoctrine();
        $mission = $doc->getRepository(Mission::class)->findOneById($missionId);
        $user = $mission->getUser();
        $media = $mission->getMedia();
        return $this->render('explorer/mission.html.twig', array(
            'user' => $user,
            'mission' => $mission,
            'mediaList' => $media
        ));
    }
}
