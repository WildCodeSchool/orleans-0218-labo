<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ReservationEquipment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reservationequipment controller.
 *
 * @Route("reservationequipment")
 */
class ReservationEquipmentController extends Controller
{
    /**
     * Lists all reservationEquipment entities.
     *
     * @Route("/", name="reservationequipment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservationEquipments = $em->getRepository('AppBundle:ReservationEquipment')->findAll();

        return $this->render('reservationequipment/index.html.twig', array(
            'reservationEquipments' => $reservationEquipments,
        ));
    }

    /**
     * Creates a new reservationEquipment entity.
     *
     * @Route("/new", name="reservationequipment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reservationEquipment = new Reservationequipment();
        $form = $this->createForm('AppBundle\Form\ReservationEquipmentType', $reservationEquipment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservationEquipment);
            $em->flush();

            return $this->redirectToRoute('reservationequipment_show', array('id' => $reservationEquipment->getId()));
        }

        return $this->render('reservationequipment/new.html.twig', array(
            'reservationEquipment' => $reservationEquipment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reservationEquipment entity.
     *
     * @Route("/{id}", name="reservationequipment_show")
     * @Method("GET")
     */
    public function showAction(ReservationEquipment $reservationEquipment)
    {
        $deleteForm = $this->createDeleteForm($reservationEquipment);

        return $this->render('reservationequipment/show.html.twig', array(
            'reservationEquipment' => $reservationEquipment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservationEquipment entity.
     *
     * @Route("/{id}/edit", name="reservationequipment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ReservationEquipment $reservationEquipment)
    {
        $deleteForm = $this->createDeleteForm($reservationEquipment);
        $editForm = $this->createForm('AppBundle\Form\ReservationEquipmentType', $reservationEquipment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservationequipment_edit', array('id' => $reservationEquipment->getId()));
        }

        return $this->render('reservationequipment/edit.html.twig', array(
            'reservationEquipment' => $reservationEquipment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservationEquipment entity.
     *
     * @Route("/{id}", name="reservationequipment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ReservationEquipment $reservationEquipment)
    {
        $form = $this->createDeleteForm($reservationEquipment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservationEquipment);
            $em->flush();
        }

        return $this->redirectToRoute('reservationequipment_index');
    }

    /**
     * Creates a form to delete a reservationEquipment entity.
     *
     * @param ReservationEquipment $reservationEquipment The reservationEquipment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReservationEquipment $reservationEquipment)
    {
        return $this
            ->createFormBuilder()
            ->setAction(
                $this->generateUrl(
                    'reservationequipment_delete',
                    array(
                        'id' => $reservationEquipment->getId()
                    )
                )
            )
            ->setMethod('DELETE')->getForm();
    }
}
