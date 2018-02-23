<?php

namespace Akina\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Akina\ImmobilierBundle\Entity\Image;
use Akina\ImmobilierBundle\Form\ImageType;
use Akina\ImmobilierBundle\Entity\Biens;
use Akina\ImmobilierBundle\Form\BiensType;
use Doctrine\Common\Collections\Criteria;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction(Request $request)
    {
      $em1 = $this->getDoctrine()->getManager();

       $Type = $em1->getRepository('AkinaImmobilierBundle:TypeBien')->findAll();
$em2 = $this->getDoctrine()->getManager();

       $Localite = $em2->getRepository('AkinaImmobilierBundle:Localite')->findAll();


        $em = $this->getDoctrine()->getManager();

       $listeReservations = $em->getRepository('AkinaImmobilierBundle:Biens')->findAll();
        
        
        
        return $this->render('AkinaImmobilierBundle:Admin:list.html.twig',array( 'reservations' => $listeReservations,'Type' => $Type,'Localite' => $Localite
            // ...
        ));
    }

    /**
     * @Route("/disponibilite")
     */
    public function disponibiliteAction()
    {
        return $this->render('AkinaImmobilierBundle:Admin:disponibilite.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {
        $advert = new Image();

    $form   = $this->get('form.factory')->create(ImageType::class, $advert);


    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

      // Ajoutez cette ligne :

      // c'est elle qui déplace l'image là où on veut les stocker

      $advert->getImage()->upload();


      // Le reste de la méthode reste inchangé

      $em = $this->getDoctrine()->getManager();

      $em->persist($advert);

      $em->flush();

      

      // ...

    }
        return $this->render('AkinaImmobilierBundle:Admin:add.html.twig', array("form"=>$form->createView()
            // ...
        ));
    }

}
