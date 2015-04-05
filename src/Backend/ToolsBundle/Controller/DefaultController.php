<?php

namespace Backend\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\Query\ResultSetMap;
class DefaultController extends Controller
{
    public function indexAction()
    {
             


        $em=$this->getDoctrine()->getManager(); 
       $hyper=$em->getRepository('BackendToolsBundle:Hypermarchecentrale')->findAll();
       //return new \Symfony\Component\HttpFoundation\Response($hyper);
        return $this->render('BackendToolsBundle:Default:index.html.twig',array("LesHyper"=>$hyper) );
    }
            
  
    
      public function ApercuAction($id){ 
         
        //return new \Symfony\Component\HttpFoundation\Response($id); 
        
         
         $em=$this->getDoctrine()->getManager(); 
         $sql = "SELECT typeproduit.nom as type  ,count(*) as nbr "
            ."FROM produitpromo,typeproduit "
            . "where  produitpromo.idhypermarche=".$id." and produitpromo.idtypeproduit=typeproduit.id"
            ." GROUP BY produitpromo.id;";

//return new \Symfony\Component\HttpFoundation\Response($sql); 
$rsm = new \Doctrine\ORM\Query\ResultSetMapping();
$rsm->addScalarResult('type', 'type');
$rsm->addScalarResult('nbr', 'nbr');
$query = $em->createNativeQuery($sql, $rsm);
            $requete = $this->get('request');
         if($requete->getMethod() == 'POST')
         {  
            $ville = $_POST['ville'];
          }
          else
          {$ville=null;}
           //return new \Symfony\Component\HttpFoundation\Response($ville); 
         $hyper=$em->getRepository('BackendToolsBundle:Hypermarchecentrale')->find($id);
           $villes=$em->getRepository('BackendToolsBundle:region')->findAll();
         $filiale=$em->getRepository('BackendToolsBundle:Hypermarchefiliale')->findByregion($ville);
         //return new \Symfony\Component\HttpFoundation\Response($cours.nom); 
         return $this->render('BackendToolsBundle:filiale:filiale.html.twig',array("Hyper"=>$hyper,"filiales"=>$filiale,"villes"=>$villes,"villeselection"=>$ville,"typeproduit"=>$query->getResult()) );
         
         
    }  
    
   public function DetailAction($id)
    {
             


        $em=$this->getDoctrine()->getManager(); 
         $filiale=$em->getRepository('BackendToolsBundle:Hypermarchefiliale')->findByid($id);
       //return new \Symfony\Component\HttpFoundation\Response($hyper);
        return $this->render('BackendToolsBundle:filiale:detailfiliale.html.twig',array("filiale"=>$filiale) );
    }  
 
}
