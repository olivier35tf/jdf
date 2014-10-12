<?php

namespace Jdf\HoroscopeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Jdf\HoroscopeBundle\Entity\Zodiac;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JdfHoroscopeBundle:Default:index.html.twig', array('name' => 'Essai'));
    }
    
    public function  zodiacAction($id,$label)
    {
        $zodiac = $this->getDoctrine()
        ->getRepository('JdfHoroscopeBundle:Zodiac')
        ->find(1);
        
        
        return new \Symfony\Component\HttpFoundation\Response('Hello : '.$zodiac->getName());
    }
    
    public function zodiacAddAction()
    {
        $zodiac = new Zodiac();
        $zodiac->setName('Bélier');
        $zodiac->setAmour('Amour pas top');
        $zodiac->setTravail('Essai travail');
        $zodiac->setDate(new \DateTime());
        $zodiac->setSante('Encore vivant');

        $em = $this->getDoctrine()->getManager();
        $em->persist($zodiac);
        $em->flush();

    return new \Symfony\Component\HttpFoundation\Response('Zodiac créé');
    }
}
