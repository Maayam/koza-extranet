<?php

namespace AppBundle\Controller;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Media;
use AppBundle\Entity\Mission;
use AppBundle\Entity\User;

use AppBundle\Form\UserType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserController extends Controller
{
    /**
     * @Route("/user/new", name="new_user")
     */
    public function newAction(Request $request, UserPasswordEncoderInterface $encoder){
        $user = new User();
        
        // See https://symfony.com/doc/current/book/forms.html#submitting-forms-with-multiple-buttons
        $form = $this->createForm(UserType::class, $user)
        ->add('Sauvegarder', SubmitType::class);
        
        $form->handleRequest($request);
        
        // the isSubmitted() method is completely optional because the other
        // isValid() method already checks whether the form is submitted.
        // However, we explicitly add it to improve code readability.
        // See https://symfony.com/doc/current/best_practices/forms.html#handling-form-submits
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
        //first check if username is unique
            $username = $user->getUsername();
            $userExists = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneByUsername($username);
            if($userExists == NULL){
            //now validate the form
                //$user->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
                $validator = $this->get('validator');
                $errors = $validator->validate($user);
                if (count($errors) > 0) {
                    return $this->render('admin/new_client.html.twig', array(
                        'errors' => $errors,
                        'user' => $user,
                        'form' => $form->createView()
                    ));
                }

            //generate automatic fields
                $plainPassword = $user->getPassword();
                $encoded = $encoder->encodePassword($user, $plainPassword);
                $user->setPassword($encoded);
                $user->setCreated(new \DateTime(date('Y-m-d H:i:s')));
                $user->setRoles(['ROLE_USER']);
                
            //save the user to database
                $firstName = $user->getFirstName();
                $familyName = $user->getFamilyName();
                $em->persist($user);
                $em->flush();

                // Flash messages are used to notify the user about the result of the
                // actions. They are deleted automatically from the session as soon
                // as they are accessed.
                // See https://symfony.com/doc/current/book/controller.html#flash-messages
                $this->addFlash('success', "le compte client de $firstName $familyName a été créé avec succès");

                if ($form->get('Sauvegarder')->isClicked()) {
                    return $this->redirectToRoute('home');
                }
            }
            else{
                return $this->render('admin/new_client.html.twig', array(
                    'errors' => array("le nom d'utilisateur saisi existe déjà, merci d'en choisir un autre"),
                    'user' => $user,
                    'form' => $form->createView()
                ));
            }
            return $this->redirectToRoute('home');
        }
        
        $context = array(
            'user' => $user,
            'form' => $form->createView()
        );
        return $this->render('admin/new_client.html.twig', $context);
    }
    
    /**
     * @Route("/user/edit/{userId}", name="edit_user", requirements={"userId": "\d+"})
     */
    public function editAction(Request $request, UserPasswordEncoderInterface $encoder, $userId = "not set"){
        $user = $this->getDoctrine()->getRepository(User::class)->findOneById($userId);
        $user->setPassword("défini par l'utilisateur");
        
        $form = $this->createForm(UserType::class, $user)
        ->add('Sauvegarder', SubmitType::class);

        //then handle request
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
        //first check if username exists
            $userExists = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneById($userId);
            if($userExists != NULL){
            //now validate the form
                $validator = $this->get('validator');
                $errors = $validator->validate($user);
                if (count($errors) > 0) {
                    return $this->render('admin/new_client.html.twig', array(
                        'errors' => $errors,
                        'user' => $user,
                        'form' => $form->createView()
                    ));
                }
                
            //save the user to database
                $firstName = $user->getFirstName();
                $familyName = $user->getFamilyName();
                $isUserAdmin = in_array('ROLE_ADMIN', $user->getRoles());
                if($user->getPassword() == "défini par l'utilisateur"){
                    $connection = $em->getConnection();
                    $statement = $connection->prepare("
                        UPDATE user
                        SET gender = :gender,
                        telephone = :telephone,
                        company = :company,
                        siret = :siret,
                        username = :username,
                        email = :email,
                        familyName = :familyName,
                        firstName = :firstName,
                        address = :address
                        WHERE id = :id
                    ");
                    $statement->bindValue('id', $userId);
                    $statement->bindValue('gender', $user->getGender());
                    $statement->bindValue('telephone', $user->getTelephone());
                    $statement->bindValue('company', $user->getCompany());
                    $statement->bindValue('siret', $user->getSiret());
                    $statement->bindValue('username', $user->getUsername());
                    $statement->bindValue('email', $user->getEmail());
                    $statement->bindValue('familyName', $user->getFamilyName());
                    $statement->bindValue('firstName', $user->getFirstName());
                    $statement->bindValue('address', $user->getAddress());
                    $statement->execute();
                }
                else{
                    $plainPassword = $user->getPassword();
                    $encoded = $encoder->encodePassword($user, $plainPassword);
                    $user->setPassword($encoded);
                    $em->persist($user);
                    $em->flush();
                }
                if($isUserAdmin){
                    $this->addFlash('success', "Vos paramètres ont été mis à jour avec succès");
                    return $this->redirectToRoute('home', array('userId' => $userId));
                }
                else{
                    // Flash messages are used to notify the user about the result of the
                    // actions. They are deleted automatically from the session as soon
                    // as they are accessed.
                    // See https://symfony.com/doc/current/book/controller.html#flash-messages
                    $this->addFlash('success', "le compte client de $firstName $familyName a été modifié avec succès");
        
                    if ($form->get('Sauvegarder')->isClicked()) {
                        return $this->redirectToRoute('show_user', array('userId' => $userId));
                    }
                }
            }
            else{
                $this->redirectToRoute('new_user', array(
                    'errors' => "L'utilisateur demandé n'existe pas",
                    'form' => $form->createView()
                ));
            }
        }
        
        $context = array(
            'user' => $user,
            'form' => $form->createView()
        );
        return $this->render('admin/new_client.html.twig', $context);
    }
    
    /**
     * @Route("/user/delete/{userId}", name="delete_user", requirements={"userId": "\d+"})
     */
    public function deleteAction(Request $request, $userId){
        $user = $this->getDoctrine()->getRepository(User::class)->findOneById($userId);
        $firstName = $user->getFirstName();
        $familyName = $user->getFamilyName();
        
        $em = $this->getDoctrine()->getManager();
        
        $em->remove($user);
        $em->flush();
        
        $this->addFlash('success', "le compte client de $firstName $familyName a été supprimé avec succès");
        return $this->redirectToRoute('home');
    }
}
