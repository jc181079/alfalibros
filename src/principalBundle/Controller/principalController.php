<?php

namespace principalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use principalBundle\Entity\PhpposPeople;
use principalBundle\Entity\PhpposEmployees;
use principalBundle\Entity\PhpposItems;
use principalBundle\Entity\PhpposCategories;
use principalBundle\Entity\PhpposAppFiles;

class principalController extends Controller
{
    /**
     * @Route("/{pagina}", name="inicio", requirements={"pagina": "\d+"})
     */
    public function indexAction(Request $request,$pagina)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        /*
        * inicio de la paginacion
        */
        $trItem= $this->contadorReg(); //se consigue el total de los registros
        $regPorPagina= 10;
        $totalRegPorPagina=ceil($trItem/$regPorPagina);

        if(!is_numeric($pagina)){
            $pagina=1;
        } else {
            $pagina=floor($pagina);
        }

        if($trItem<=$regPorPagina){
            $pagina=1;
        }

        if(($pagina*$regPorPagina)>$trItem){
            $pagina=$totalRegPorPagina;
        }

        $offSet=0;
        if($pagina>1){
            $offSet=$regPorPagina*($pagina-1);
        }

        //fin de la paginacion

        //die('total'.$trItem);
        $queryLibros= $em->createQuery(
           'select i.name,i.unitPrice
            from principalBundle:PhpposItems i
            where i.category = 1                          
            order by i.itemId asc'
            )
        //->orderBy('i.itemId','ASC')
        ->setFirstResult($offSet)
        ->setMaxResults($regPorPagina);
        $libros=$queryLibros->getResult();
        header('Content-Type: image/png');
        $categorias = $em->getRepository('principalBundle:PhpposCategories')->findAll();  
        return $this->render('principalBundle:Default:index.html.twig',array(
        	'sessionActiva'=>$session->get('sessionActiva'),
        	'categorias'=>$categorias,
            'producto1'=>$libros,
            'trItem'=>$trItem, 
            'totalRegPorPagina'=>$totalRegPorPagina,          
        ));
    }
    /*
    * esto no es una accion, es un propiedad creada para que consiga cuantos
    * registros existen en una tabla, en este caso sera la de items
    */
    public function contadorReg()
    {
        $cr =  $this->getDoctrine()
               ->getManager()
               ->createQueryBuilder('principalBundle:PhpposItems')
               ->select('Count(i)')
               ->from('principalBundle:PhpposItems','i')
               ->where('i.category = 1')
               ->getQuery()
               ->getSingleScalarResult();

        return $cr;       
    }

    /**
     * @Route("/modal", name="modal")
     */
     public function modalAction(){
        
           return $this->render('principalBundle:Default:modalRegistrate.html.twig');       
    }

    /**
     * @Route("/checkSession", name="checkSession")
     * 
     */
     public function checkSessionAction(Request $request){
        
           
			if ($request->getMethod() == 'POST') {            
			        $em = $this->getDoctrine()->getManager();
			        $consulta = $em->getRepository('principalBundle:PhpposEmployees')->findBy(array('username' => $request->get('Usuario'),'password'=> md5($request->get('Clave'))));
			        if ($consulta){
			        	$session = $request->getSession();
                		$session->set('idusuario',$consulta[0]->getId()); // se guarda la id del usuario que se logio
                		$session->set('nombreusuario',$consulta[0]->getUsername()); // se guarda el nombre del usuario
                		$session->set('idperson',$consulta[0]->getPerson()); // se guarda el tipo del usuario
                		$session->set('sessionActiva',1); // se guarda el tipo del usuario
                				
			        }else
			        {
			        	$this->get('session')->getFlashBag()->add(
                            'Mensaje',
                            "Error usuario o clave incorrectos..."
                            );
			        }
           return $this->redirect($this->generateUrl('inicio'));
        }
        
    }

    /**
     * Bloque de logout - termina la session del usuario
     * y carga la ventana de login
     * 
     * @Route("/logout", name="logout")
     * 
     */
    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->clear();      
        return $this->redirect($this->generateUrl('inicio'));
    }

    /**
     * Guarda la informacion registrada de la ventana modal de registrate
     * 
     * 
     * @Route("/registrate", name="registrate")
     * 
     */
    public function SaveRegistrateAction(Request $request) {
        $peoples= new PhpposPeople();
        $employees= new PhpposEmployees();        
        $em = $this->getDoctrine()->getManager();
        if ($request->get('Clave1')==$request->get('Clave2')){

            //////people/////////////////////////////////
            $peoples->setFirstName($request->get('FirstName'));
            $peoples->setLastName($request->get('LastName'));
            $peoples->setEmail($request->get('Email'));
            $peoples->setPhoneNumber($request->get('PhoneNumber'));
            $peoples->setAddress1($request->get('Address1'));
            $peoples->setAddress2($request->get('Address2'));
            $peoples->setCity($request->get('City'));
            $peoples->setState($request->get('State'));
            $peoples->setZip($request->get('Zip'));
            $peoples->setCountry($request->get('Country'));
            $peoples->setComments('Cliente se registro por Alfalibros');            
            $em->persist($peoples);
            $em->flush();
            ///////employeers///////////////////////////////
            $findPeople = $this->getDoctrine()
                    ->getRepository('principalBundle:PhpposPeople')
                    ->findOneBy(array('email' => $request->get('Email')));
            $employees->setUsername($request->get('Email'));
            $employees->setPassword(md5($request->get('Clave1')));
            $employees->setLanguage('spanish');
            $employees->setPerson($findPeople);
            $em->persist($employees);
            $em->flush();     
            

        }
        return $this->redirect($this->generateUrl('inicio'));
    }


}
