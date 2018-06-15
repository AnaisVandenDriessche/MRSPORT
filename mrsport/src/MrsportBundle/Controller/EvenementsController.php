<?php

namespace MrsportBundle\Controller;

use MrsportBundle\Entity\Evenements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Evenement controller.
 *
 */
class EvenementsController extends Controller
{
    /**
     * Lists all evenement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evenements = $em->getRepository(Evenements::class)->getEventWithStatus('valide');

        return $this->render('evenements/index.html.twig', array(
            'evenements' => $evenements,
        ));
    }

    public function adminEvenementsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evenements = $em->getRepository('MrsportBundle:Evenements')->findAll();

        return $this->render('@Mrsport/admin/validation_evenement.html.twig', array(
            'evenements' => $evenements,
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     *
     */
    public function newAction(Request $request)
    {
      
        $evenement = new Evenements();
        $form = $this->createForm('MrsportBundle\Form\EvenementsType', $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $evenement->setStatus('new');
            $em->persist($evenement);
            $em->flush();
            

            return $this->redirectToRoute('evenements_show', array('id' => $evenement->getId()));
        }

        return $this->render('evenements/new.html.twig', array(
            'evenement' => $evenement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a evenement entity.
     *
     */
    public function showAction(Evenements $evenement)
    {
        $deleteForm = $this->createDeleteForm($evenement);

        return $this->render('evenements/show.html.twig', array(
            'evenement' => $evenement,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * @Security("has_role('ROLE_ADMIN')")
     *
     */
    public function editAction(Request $request, Evenements $evenement)
    {
        //die('jkhjk');
        $deleteForm = $this->createDeleteForm($evenement);
        $editForm = $this->createForm('MrsportBundle\Form\EvenementsType', $evenement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('evenements_edit', array('id' => $evenement->getId()));
        }

        return $this->render('evenements/edit.html.twig', array(
            'evenement' => $evenement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a evenement entity.
     *
     */
    public function deleteAction(Request $request, Evenements $evenement)
    {
        $form = $this->createDeleteForm($evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evenement);
            $em->flush();
        }

        return $this->redirectToRoute('evenements_index');
    }

    /**
     * Creates a form to delete a evenement entity.
     *
     * @param Evenements $evenement The evenement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Evenements $evenement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evenements_delete', array('id' => $evenement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    
    public function show($id)
    {
        $evenements = $this->getDoctrine()
            ->getRepository(Evenements::class)
            ->find($id);
    
        if (!$evenements) {
            throw $this->createNotFoundException(
                'No evenements found for id '.$id
            );
        }

        $evenements->setStatus('valide');
        $em->persist($evenements);
        $em->flush();

        return $this->redirectToRoute('dashboard');
    }


    public function valideAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $evenements = $this->getDoctrine()->getRepository(Evenements::class)->find($id);
        if (!$evenements) {
            throw $this->createNotFoundException(
                'No evenements found for id '.$id
            );
        }
        $em = $this->getDoctrine()->getManager();
        $evenements->setStatus('valide');
        $em->persist($evenements);
        $em->flush();

        return $this->redirectToRoute('mrsport_validation_evenement');

      
    }


    public function invalideAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $evenements = $this->getDoctrine()->getRepository(Evenements::class)->find($id);
        if (!$evenements) {
            throw $this->createNotFoundException(
                'No evenements found for id '.$id
            );
        }

        $evenements->setStatus('invalide');
        $em->persist($evenements);
        $em->flush();

        return $this->redirectToRoute('mrsport_validation_evenement');
    }

}
