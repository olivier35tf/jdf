<?php

namespace Jdf\HoroscopeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Jdf\HoroscopeBundle\Entity\ZodiacInstance;

class DefaultController extends Controller
{
    
    
    public function indexAction()
    {
        $allZodiacInfos = $this->getDoctrine()
        ->getRepository('JdfHoroscopeBundle:ZodiacInfo')
        ->findAll();
        
        return $this->render('JdfHoroscopeBundle:Default:index.html.twig', array('zodiacData' => $allZodiacInfos));
    }
    
    /**
     * Display zodiac info
     * @param type $id
     * @param type $label
     * @return type
     */
    public function  zodiacShowAction($id,$label)
    {
        $zodiac = $this->getDoctrine()
        ->getRepository('JdfHoroscopeBundle:ZodiacInfo')
        ->find(1);
        

        
        
        $this->get("jdf_horoscope.pouette")->pouette();
        $confTest = $this->container->getParameter("test");
        
        return $this->render('JdfHoroscopeBundle:Default:show.html.twig', array('name' => $zodiac->getName(). ' '.$confTest));
        //return new \Symfony\Component\HttpFoundation\Response('Hello : '.$zodiac->getName());
    }
    
    /**
     *  add data test
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function zodiacAddAction()
    {
        $signe = array('Lion','Balance','Sagitaire','Verseau','Vierge','Poisson');
        
        for($i=0;$i<100;$i++)
        {
            $currentSigne = $signe[array_rand($signe)];     
            $zodiacInfo = $this->getDoctrine()
            ->getRepository('JdfHoroscopeBundle:ZodiacInfo')
            ->findOneBy(array('name' => $currentSigne));

            $zodiac = new ZodiacInstance();
            $zodiac->setZodiacInfo($zodiacInfo);
            $zodiac->setAmour('Amour pas top');
            $zodiac->setTravail('Essai travail');
            $zodiac->setFamille('Famille toujours pareil...');
            $zodiac->setDate(new \DateTime());;
            $zodiac->setType(ZodiacInstance::TYPE_JOUR);

            $em = $this->getDoctrine()->getManager();
            $em->persist($zodiac);
            $em->flush();
        }

    return new \Symfony\Component\HttpFoundation\Response('Zodiac créé');
    }
}
