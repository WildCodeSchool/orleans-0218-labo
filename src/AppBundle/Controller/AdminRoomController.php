<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Room;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Room controller.
 *
 * @Route("admin/room")
 */
class AdminRoomController extends Controller
{
    /**
     * Lists all room entities.
     *
     * @Route("/", name="room_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository('AppBundle:Room')->findAll();

        $deleteForms = array();
        foreach ($rooms as $room) {
            $deleteForms[$room->getId()] = $this->createDeleteForm($room)->createView();
        }

        return $this->render(
            'admin/room/index.html.twig',
            array(
                'rooms' => $rooms,
                'deleteForms' => $deleteForms,
            )
        );
    }

    /**
     * Creates a new room entity.
     *
     * @Route("/new",  name="room_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $room = new Room();
        $form = $this->createForm('AppBundle\Form\RoomType', $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($room);
            $em->flush();

            return $this->redirectToRoute('room_index', array('id' => $room->getId()));
        }

        return $this->render(
            'admin/room/new.html.twig',
            array(
            'room' => $room,
            'form' => $form->createView(),
            )
        );
    }

    /**
     * Displays a form to edit an existing room entity.
     *
     * @Route("/{id}/edit", name="room_edit")
     * @Method({"GET",      "POST"})
     */
    public function editAction(Request $request, Room $room)
    {
        $deleteForm = $this->createDeleteForm($room);
        $editForm = $this->createForm('AppBundle\Form\RoomType', $room);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('room_index');
        }

        return $this->render(
            'admin/room/edit.html.twig',
            array(
            'room' => $room,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Deletes a room entity.
     *
     * @Route("/{id}",   name="room_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Room $room)
    {
        $form = $this->createDeleteForm($room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($room);

            try {
                $em->flush();
            } catch (ForeignKeyConstraintViolationException $exception) {
                $this->addFlash(
                    'danger',
                    'Il est impossible de supprimer une salle liée à une réservation en cours'
                );
                return $this->redirectToRoute('room_index');
            }
        }
        return $this->redirectToRoute('room_index');
    }

    /**
     * Creates a form to delete a room entity.
     *
     * @param Room $room The room entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Room $room)
    {
        return $this->createFormBuilder(null, ['csrf_field_name' => 'delete-room-' . $room->getId()])
            ->setAction($this->generateUrl(
                'room_delete',
                array(
                    'id' => $room->getId()
                )
            ))
            ->setMethod('DELETE')
            ->getForm();
    }
}
