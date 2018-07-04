<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Equipment;
use AppBundle\Entity\Reservation;
use AppBundle\Service\SignatureService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ReservationEquipment;

/**
 * Reservation controller.
 *
 * @Route("reservation")
 */
class ReservationController extends Controller
{
    /**
     * Lists all reservation entities.
     *
     * @Route("/", name="reservation_index")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('AppBundle:Reservation')->findAll();

        return $this->render('reservation/index.html.twig', array(
            'reservations' => $reservations,

        ));
    }

    /**
     * Listing of the old reservations
     *
     * @Route("/archive", name="reservation_archive")
     */
    public function archiveAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('AppBundle:Reservation')->findBy(
            ['reservationOver' => 1],
            ['reservationEnd' => 'DESC']
        );

        return $this->render('reservation/archive.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * Display the archive's details
     *
     * @Route("/{id}/Archive/Details", name="archive_details")
     * @Method("GET")
     */
    public function archiveDetailsAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/archive_details.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new reservation entity.
     *
     * @Route("/new", name="reservation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $equipments = $em->getRepository(Equipment::class)->findBy([], ['order' => 'ASC']);

        $reservation = new Reservation();

        foreach ($equipments as $equipment) {
            $resaEquip = new ReservationEquipment();

            $resaEquip->setEquipment($equipment);
            $resaEquip->setQuantity(0);
            $resaEquip->setReservation($reservation);

            $reservation->addReservationEquipment($resaEquip);
        }

        $form = $this->createForm('AppBundle\Form\ReservationType', $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->setReservationOver(false);
            foreach ($reservation->getReservationEquipments() as $dateEquipment) {
                $dateEquipment->setReservationStart($reservation->getReservationStart());
                $dateEquipment->setReservationEnd($reservation->getReservationEnd());
            }

            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/new.html.twig', array(
            'form' => $form->createView(),
            'equipments' => $equipments
        ));
    }

    /**
     * Finds and displays a reservation entity.
     *
     * @Route("/{id}", name="reservation_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(Reservation $reservation, Request $request, SignatureService $signatureService)
    {

        $form = $this->createForm('AppBundle\Form\SignatureType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setSignature($signatureService->add(
                $request->request->get('signature')['signature']
            ));
            $em->flush();
            return $this->redirectToRoute('reservation_index');
        }
        return $this->render('reservation/show.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * display the details of a reservation
     *
     * @route("/{id}/details", name="reservation_details")
     * @Method("GET")
     */
    public function detailsReservation(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/details.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * display the return of a reservation
     *
     * @route("/{id}/restitution", name="reservation_restitution")
     * @Method({"GET", "POST"})
     */
    public function restitutionReservation(Reservation $reservation, Request $request, SignatureService $service)
    {
        $form = $this->createForm('AppBundle\Form\ReturnSignatureType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setReturnSignature($service->add(
                $request->request->get('return_signature')['returnSignature']
            ));
            $reservation->setReservationOver(true);
            $em->flush();

            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('reservation/restitution.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservation entity.
     *
     * @Route("/{id}/edit", name="reservation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('AppBundle\Form\ReservationType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservation entity.
     *
     * @Route("/{id}", name="reservation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reservation $reservation, SignatureService $signatureService)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $signatureService->delete($reservation->getSignature());
            $signatureService->delete($reservation->getReturnSignature());
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a reservation entity.
     *
     * @param Reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
