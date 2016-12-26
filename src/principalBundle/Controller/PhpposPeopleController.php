<?php

namespace principalBundle\Controller;

use principalBundle\Entity\PhpposPeople;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Phpposperson controller.
 *
 * @Route("phppospeople")
 */
class PhpposPeopleController extends Controller
{
    /**
     * Lists all phpposPerson entities.
     *
     * @Route("/", name="phppospeople_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $phpposPeoples = $em->getRepository('principalBundle:PhpposPeople')->findAll();

        return $this->render('phppospeople/index.html.twig', array(
            'phpposPeoples' => $phpposPeoples,
        ));
    }

    /**
     * Creates a new phpposPerson entity.
     *
     * @Route("/new", name="phppospeople_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $phpposPerson = new Phpposperson();
        $form = $this->createForm('principalBundle\Form\PhpposPeopleType', $phpposPerson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($phpposPerson);
            $em->flush($phpposPerson);

            return $this->redirectToRoute('phppospeople_show', array('id' => $phpposPerson->getId()));
        }

        return $this->render('phppospeople/new.html.twig', array(
            'phpposPerson' => $phpposPerson,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a phpposPerson entity.
     *
     * @Route("/{id}", name="phppospeople_show")
     * @Method("GET")
     */
    public function showAction(PhpposPeople $phpposPerson)
    {
        $deleteForm = $this->createDeleteForm($phpposPerson);

        return $this->render('phppospeople/show.html.twig', array(
            'phpposPerson' => $phpposPerson,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing phpposPerson entity.
     *
     * @Route("/{id}/edit", name="phppospeople_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PhpposPeople $phpposPerson)
    {
        $deleteForm = $this->createDeleteForm($phpposPerson);
        $editForm = $this->createForm('principalBundle\Form\PhpposPeopleType', $phpposPerson);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('phppospeople_edit', array('id' => $phpposPerson->getId()));
        }

        return $this->render('phppospeople/edit.html.twig', array(
            'phpposPerson' => $phpposPerson,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a phpposPerson entity.
     *
     * @Route("/{id}", name="phppospeople_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PhpposPeople $phpposPerson)
    {
        $form = $this->createDeleteForm($phpposPerson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($phpposPerson);
            $em->flush($phpposPerson);
        }

        return $this->redirectToRoute('phppospeople_index');
    }

    /**
     * Creates a form to delete a phpposPerson entity.
     *
     * @param PhpposPeople $phpposPerson The phpposPerson entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PhpposPeople $phpposPerson)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('phppospeople_delete', array('id' => $phpposPerson->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
