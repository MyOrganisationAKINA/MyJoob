<?php

namespace Akina\ImmobilierBundle\Controller;

use Akina\ImmobilierBundle\Entity\search;
use Akina\ImmobilierBundle\Form\searchType;
use Akina\ImmobilierBundle\Entity\Reservation;
use Akina\ImmobilierBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\Criteria;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
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
         $reservations  = $this->get('knp_paginator')->paginate(
        $listeReservations,
        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
          4/*nbre d'éléments par page*/
    );
        return $this->render('AkinaImmobilierBundle:Front:list.html.twig', array( 'reservations' => $reservations,'Type' => $Type,'Localite' => $Localite
            // ...
        ));
        
    }
    /**
     * @Route("/search")
     */
    public function searchAction(Request $request)
    {

      $prix = $request->query->get('prix');
       $Localite = $request->query->get('Localite');
        $Type = $request->query->get('Type');
        $em = $this->getDoctrine()->getManager();
              $bien= $em->getRepository('AkinaImmobilierBundle:Biens');
              $biens = $bien ->findBiens($Localite,$prix,$Type);
      $reservations  = $this->get('knp_paginator')->paginate(
        $biens,
        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
          4/*nbre d'éléments par page*/
    );
       return $this->render('AkinaImmobilierBundle:Front:search.html.twig', array( 'reservations' => $reservations
            // ...
        ));

    }

 public function testAction()
    {
    /**
     * @Route("/test")
     */

        $em = $this->getDoctrine()->getManager();
              $bien= $em->getRepository('AkinaImmobilierBundle:Biens');
              $biens = $bien ->findBiens(0,0,0);

        echo count($biens);
    }

    /**
     * @Route("/Reserve")
     */
    public function ReserveAction(Request $request,$id)
    {

         $reserve = new Reservation();
         
       
$em = $this->getDoctrine()->getManager();
$idClient=1;
       $bien = $em ->getRepository('AkinaImmobilierBundle:Biens')->find($id);
    $client =$em ->getRepository('AkinaImmobilierBundle:Clients')->find($idClient);
      $em = $this->getDoctrine()->getManager();
      $date = date("Y-m-d");
        $reserve ->setdateDeReservation($date);
        $reserve ->setBien($bien);
         $reserve ->setClient($client);
         $reserve ->setEtat("0");
          

 $em = $this->getDoctrine()->getManager();

       $listeReservations = $em->getRepository('AkinaImmobilierBundle:Reservation')->findAll();
         
        return $this->render('AkinaImmobilierBundle:Front:listRes.html.twig', array( 'reservations' => $listeReservations
            // ...
        ));
 
       
    }

     public function listResAction(Request $request)
    {

       $em = $this->getDoctrine()->getManager();

       $listeReservations = $em->getRepository('AkinaImmobilierBundle:Reservation')->findAll();
         $reservations  = $this->get('knp_paginator')->paginate(
        $listeReservations,
        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
          4/*nbre d'éléments par page*/
    );
        return $this->render('AkinaImmobilierBundle:Front:listRes.html.twig', array( 'reservations' => $reservations
            // ...
        ));
        
    }

}
