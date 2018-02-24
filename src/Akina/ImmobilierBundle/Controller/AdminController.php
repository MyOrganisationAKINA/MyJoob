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
        $image = new Image();

    $formI   = $this->get('form.factory')->create(ImageType::class, $image);


    if ($request->isMethod('POST') && $formI->handleRequest($request)->isValid()) {

      // Ajoutez cette ligne :

      // c'est elle qui déplace l'image là où on veut les stocker

     // $advert->getImage()->upload();


      // Le reste de la méthode reste inchangé

      $em = $this->getDoctrine()->getManager();

      $em->persist($image);

      $em->flush();

      

      // ...

    }
    $bien = new Biens();

    $formB   = $this->get('form.factory')->create(BiensType::class, $bien);


    if ($request->isMethod('POST') && $formB->handleRequest($request)->isValid()) {

      // Ajoutez cette ligne :

      // c'est elle qui déplace l'image là où on veut les stocker

     // $advert->getImage()->upload();


      // Le reste de la méthode reste inchangé

      $em = $this->getDoctrine()->getManager();

      $em->persist($bien);

      $em->flush();

      

      // ...

    }
        return $this->render('AkinaImmobilierBundle:Admin:add.html.twig', array("formI"=>$formI->createView(),"formB"=>$formB->createView()
            // ...
        ));
    }

}
