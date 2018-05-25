<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Staff;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Staff controller.
 *
 * @Route("staff")
 */
class StaffController extends Controller
{
    /**
     * Lists all staff entities.
     *
     * @Route("/",    name="staff_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $staff = $em->getRepository('AppBundle:Staff')->findAll();

        return $this->render(
            'admin/staff/index.html.twig', array(
            'staff' => $staff,
            )
        );
    }

    /**
     * Creates a new staff entity.
     *
     * @Route("/new",  name="staff_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $staff = new Staff();
        $form = $this->createForm('AppBundle\Form\StaffType', $staff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($staff);
            $em->flush();

            return $this->redirectToRoute('staff_show', array('id' => $staff->getId()));
        }

        return $this->render(
            'admin/staff/new.html.twig', array(
            'staff' => $staff,
            'form' => $form->createView(),
            )
        );
    }

    /**
     * Finds and displays a staff entity.
     *
     * @Route("/{id}", name="staff_show")
     * @Method("GET")
     */
    public function showAction(Staff $staff)
    {
        $deleteForm = $this->createDeleteForm($staff);

        return $this->render(
            'admin/staff/show.html.twig', array(
            'staff' => $staff,
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Displays a form to edit an existing staff entity.
     *
     * @Route("/{id}/edit", name="staff_edit")
     * @Method({"GET",      "POST"})
     */
    public function editAction(Request $request, Staff $staff)
    {
        $deleteForm = $this->createDeleteForm($staff);
        $editForm = $this->createForm('AppBundle\Form\StaffType', $staff);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('staff_edit', array('id' => $staff->getId()));
        }

        return $this->render(
            'admin/staff/edit.html.twig', array(
            'staff' => $staff,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Deletes a staff entity.
     *
     * @Route("/{id}",   name="staff_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Staff $staff)
    {
        $form = $this->createDeleteForm($staff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($staff);
            $em->flush();
        }

        return $this->redirectToRoute('staff_index');
    }

    /**
     * Creates a form to delete a staff entity.
     *
     * @param Staff $staff The staff entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Staff $staff)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('staff_delete', array('id' => $staff->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
