<?php

namespace principalBundle\Controller;

use principalBundle\Entity\PhpposEmployees;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Phpposemployee controller.
 *
 * @Route("phpposemployees")
 */
class PhpposEmployeesController extends Controller
{
    /**
     * Lists all phpposEmployee entities.
     *
     * @Route("/", name="phpposemployees_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $phpposEmployees = $em->getRepository('principalBundle:PhpposEmployees')->findAll();

        return $this->render('phpposemployees/index.html.twig', array(
            'phpposEmployees' => $phpposEmployees,
        ));
    }

    /**
     * Creates a new phpposEmployee entity.
     *
     * @Route("/new", name="phpposemployees_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $phpposEmployee = new Phpposemployee();
        $form = $this->createForm('principalBundle\Form\PhpposEmployeesType', $phpposEmployee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($phpposEmployee);
            $em->flush($phpposEmployee);

            return $this->redirectToRoute('phpposemployees_show', array('id' => $phpposEmployee->getId()));
        }

        return $this->render('phpposemployees/new.html.twig', array(
            'phpposEmployee' => $phpposEmployee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a phpposEmployee entity.
     *
     * @Route("/{id}", name="phpposemployees_show")
     * @Method("GET")
     */
    public function showAction(PhpposEmployees $phpposEmployee)
    {
        $deleteForm = $this->createDeleteForm($phpposEmployee);

        return $this->render('phpposemployees/show.html.twig', array(
            'phpposEmployee' => $phpposEmployee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing phpposEmployee entity.
     *
     * @Route("/{id}/edit", name="phpposemployees_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PhpposEmployees $phpposEmployee)
    {
        $deleteForm = $this->createDeleteForm($phpposEmployee);
        $editForm = $this->createForm('principalBundle\Form\PhpposEmployeesType', $phpposEmployee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('phpposemployees_edit', array('id' => $phpposEmployee->getId()));
        }

        return $this->render('phpposemployees/edit.html.twig', array(
            'phpposEmployee' => $phpposEmployee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a phpposEmployee entity.
     *
     * @Route("/{id}", name="phpposemployees_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PhpposEmployees $phpposEmployee)
    {
        $form = $this->createDeleteForm($phpposEmployee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($phpposEmployee);
            $em->flush($phpposEmployee);
        }

        return $this->redirectToRoute('phpposemployees_index');
    }

    /**
     * Creates a form to delete a phpposEmployee entity.
     *
     * @param PhpposEmployees $phpposEmployee The phpposEmployee entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PhpposEmployees $phpposEmployee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('phpposemployees_delete', array('id' => $phpposEmployee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
