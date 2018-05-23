<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Stuff;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Stuff controller.
 *
 * @Route("stuff")
 */
class StuffController extends Controller
{
    /**
     * Lists all stuff entities.
     *
     * @Route("/",    name="stuff_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stuffs = $em->getRepository('AppBundle:Stuff')->findAll();

        return $this->render(
            'stuff/index.html.twig', array(
            'stuffs' => $stuffs,
            )
        );
    }

    /**
     * Creates a new stuff entity.
     *
     * @Route("/new",  name="stuff_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $stuff = new Stuff();
        $form = $this->createForm('AppBundle\Form\StuffType', $stuff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stuff);
            $em->flush();

            return $this->redirectToRoute('stuff_show', array('id' => $stuff->getId()));
        }

        return $this->render(
            'stuff/new.html.twig', array(
            'stuff' => $stuff,
            'form' => $form->createView(),
            )
        );
    }

    /**
     * Finds and displays a stuff entity.
     *
     * @Route("/{id}", name="stuff_show")
     * @Method("GET")
     */
    public function showAction(Stuff $stuff)
    {
        $deleteForm = $this->createDeleteForm($stuff);

        return $this->render(
            'stuff/show.html.twig', array(
            'stuff' => $stuff,
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Displays a form to edit an existing stuff entity.
     *
     * @Route("/{id}/edit", name="stuff_edit")
     * @Method({"GET",      "POST"})
     */
    public function editAction(Request $request, Stuff $stuff)
    {
        $deleteForm = $this->createDeleteForm($stuff);
        $editForm = $this->createForm('AppBundle\Form\StuffType', $stuff);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stuff_edit', array('id' => $stuff->getId()));
        }

        return $this->render(
            'stuff/edit.html.twig', array(
            'stuff' => $stuff,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Deletes a stuff entity.
     *
     * @Route("/{id}",   name="stuff_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Stuff $stuff)
    {
        $form = $this->createDeleteForm($stuff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stuff);
            $em->flush();
        }

        return $this->redirectToRoute('stuff_index');
    }

    /**
     * Creates a form to delete a stuff entity.
     *
     * @param Stuff $stuff The stuff entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Stuff $stuff)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stuff_delete', array('id' => $stuff->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
