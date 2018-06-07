<?php

namespace MrsportBundle\Controller;

use MrsportBundle\Entity\Sports;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Sport controller.
 *
 */
class SportsController extends Controller
{
    /**
     * Lists all sport entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sports = $em->getRepository('MrsportBundle:Sports')->findAll();

        return $this->render('sports/index.html.twig', array(
            'sports' => $sports,
        ));
    }

    /**
     * Creates a new sport entity.
     *
     */
    public function newAction(Request $request)
    {
        $sport = new Sports();
        $form = $this->createForm('MrsportBundle\Form\SportsType', $sport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sport);
            $em->flush();

            return $this->redirectToRoute('sports_show', array('id' => $sport->getId()));
        }

        return $this->render('sports/new.html.twig', array(
            'sport' => $sport,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sport entity.
     *
     */
    public function showAction(Sports $sport)
    {
        $deleteForm = $this->createDeleteForm($sport);

        return $this->render('sports/show.html.twig', array(
            'sport' => $sport,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sport entity.
     *
     */
    public function editAction(Request $request, Sports $sport)
    {
        $deleteForm = $this->createDeleteForm($sport);
        $editForm = $this->createForm('MrsportBundle\Form\SportsType', $sport);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sports_edit', array('id' => $sport->getId()));
        }

        return $this->render('sports/edit.html.twig', array(
            'sport' => $sport,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sport entity.
     *
     */
    public function deleteAction(Request $request, Sports $sport)
    {
        $form = $this->createDeleteForm($sport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sport);
            $em->flush();
        }

        return $this->redirectToRoute('sports_index');
    }

    /**
     * Creates a form to delete a sport entity.
     *
     * @param Sports $sport The sport entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sports $sport)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sports_delete', array('id' => $sport->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
