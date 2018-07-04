<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Equipment;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\MonologBundle\DependencyInjection\Compiler\AddProcessorsPass;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\OrderService;

/**
 * Equipment controller.
 *
 * @Route("admin/equipment")
 */
class EquipmentController extends Controller
{
    /**
     * Lists all Equipment entities.
     *
     * @Route("/",    name="equipment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $equipments = $em->getRepository('AppBundle:Equipment')->findBy([], ['order' => 'ASC']);

        $deleteForms = array();
        foreach ($equipments as $equipment) {
            $deleteForms[$equipment->getId()] = $this->createDeleteForm($equipment)->createView();
        }

        return $this->render(
            'admin/equipment/index.html.twig',
            array(
                'equipments' => $equipments,
                'deleteForms' => $deleteForms,
            )
        );
    }

    /**
     * Creates a new equipment entity.
     *
     * @Route("/new",  name="equipment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $equipment = new Equipment();
        $form = $this->createForm('AppBundle\Form\EquipmentType', $equipment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $equipments = $em->getRepository(Equipment::class)->findAll();
            $nbEquipment = count($equipments);
            $equipment->setOrder($nbEquipment + 1);
            $em->persist($equipment);
            $em->flush();
            return $this->redirectToRoute('equipment_index', array('id' => $equipment->getId()));
        }
        return $this->render(
            'admin/equipment/new.html.twig',
            array(
                'equipment' => $equipment,
                'form' => $form->createView(),
            )
        );
    }

    /**
     * Finds and displays a equipment entity.
     *
     * @Route("/{id}", name="equipment_show")
     * @Method("GET")
     */
    public function showAction(Equipment $equipment)
    {
        $deleteForm = $this->createDeleteForm($equipment);
        return $this->render(
            'admin/equipment/show.html.twig',
            array(
                'equipment' => $equipment,
                'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Displays a form to edit an existing equipment entity.
     *
     * @Route("/{id}/edit", name="equipment_edit")
     * @Method({"GET",      "POST"})
     */
    public function editAction(Request $request, Equipment $equipment)
    {
        $editForm = $this->createForm('AppBundle\Form\EquipmentType', $equipment);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('equipment_index', array('id' => $equipment->getId()));
        }
        return $this->render(
            'admin/equipment/edit.html.twig',
            array(
                'equipment' => $equipment,
                'edit_form' => $editForm->createView(),
            )
        );
    }

    /**
     * @Route("/{id}/edit/down", name="equipment_down_order_edit")
     * @Method({"GET", "POST"})
     */
    public function downOrderAction(Equipment $equipment, OrderService $orderService)
    {
        $orderService->down($equipment);
        return $this->redirectToRoute('equipment_index');
    }

    /**
     * @Route("/{id}/edit/up", name="equipment_up_order_edit")
     * @Method({"GET", "POST"})
     */
    public function upOrderAction(Equipment $equipment, OrderService $orderService)
    {
        $orderService->up($equipment);
        return $this->redirectToRoute('equipment_index');
    }

    /**
     * Deletes a equipment entity.
     *
     * @Route("/{id}",   name="equipment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Equipment $equipment, OrderService $orderService)
    {
        $form = $this->createDeleteForm($equipment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($equipment);

            try {
                $em->flush();
            } catch (ForeignKeyConstraintViolationException $exception) {
                $this->addFlash('Error', 'Il est impossible de supprimer un équipement lié à une réservation en cours');
                return $this->redirectToRoute('equipment_index');
            }

            $orderService->order(Equipment::class);
        }
        return $this->redirectToRoute('equipment_index');
    }

    /**
     * Creates a form to delete a equipment entity.
     *
     * @param Equipment $stuff The Equipment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Equipment $equipment)
    {
        return $this->createFormBuilder(null, ['csrf_field_name' => 'delete-equip-' . $equipment->getId()])
            ->setAction(
                $this->generateUrl(
                    'equipment_delete',
                    array(
                    'id' => $equipment->getId()
                    )
                )
            )
            ->setMethod('DELETE')
            ->getForm();
    }
}
