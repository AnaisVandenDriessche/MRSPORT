<?php

namespace MrsportBundle\Controller;

use MrsportBundle\Entity\Club;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Club controller.
 *
 */
class ClubController extends Controller
{
    /**
     * Lists all club entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clubs = $em->getRepository(Club::class)->getClubWithStatus('valide');

        return $this->render('club/index.html.twig', array(
            'clubs' => $clubs,
        ));
    }

    public function adminClubAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clubs = $em->getRepository('MrsportBundle:Club')->findAll();

        return $this->render('@Mrsport/admin/validation_club.html.twig', array(
            'clubs' => $clubs,
        ));
    }

    

    /**
     * Creates a new club entity.
     *
     */
    public function newAction(Request $request)
    {
        $club = new Club();
        $form = $this->createForm('MrsportBundle\Form\ClubType', $club);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            // dump($form);
            // die();
            $em = $this->getDoctrine()->getManager();
            $club->setStatus('new');
            // 
            $em->persist($club);
            $em->flush();

            return $this->redirectToRoute('club_show', array('id' => $club->getId()));
        }

        return $this->render('club/new.html.twig', array(
            'club' => $club,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a club entity.
     *
     */
    public function showAction(Club $club)
    {
        $deleteForm = $this->createDeleteForm($club);

        return $this->render('club/show.html.twig', array(
            'club' => $club,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing club entity.
     *
     */
    public function editAction(Request $request, Club $club)
    {
        $deleteForm = $this->createDeleteForm($club);
        $editForm = $this->createForm('MrsportBundle\Form\ClubType', $club);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('club_edit', array('id' => $club->getId()));
        }

        return $this->render('club/edit.html.twig', array(
            'club' => $club,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a club entity.
     *
     */
    public function deleteAction(Request $request, Club $club)
    {
        $form = $this->createDeleteForm($club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($club);
            $em->flush();
        }

        return $this->redirectToRoute('club_index');
    }

    /**
     * Creates a form to delete a club entity.
     *
     * @param Club $club The club entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Club $club)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('club_delete', array('id' => $club->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function show($id)
    {
        $club = $this->getDoctrine()
            ->getRepository(Club::class)
            ->find($id);
    
        if (!$club) {
            throw $this->createNotFoundException(
                'No clubs found for id '.$id
            );
        }

        $club->setStatus('valide');
        $em->persist($club);
        $em->flush();

        return $this->redirectToRoute('dashboard');
    }


    public function valideAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $club = $this->getDoctrine()->getRepository(Club::class)->find($id);
        if (!$club) {
            throw $this->createNotFoundException(
                'No clubs found for id '.$id
            );
        }
        $em = $this->getDoctrine()->getManager();
        $club->setStatus('valide');
        $em->persist($club);
        $em->flush();

        return $this->redirectToRoute('mrsport_validation_club');

      
    }


    public function invalideAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $club = $this->getDoctrine()->getRepository(Club::class)->find($id);
        if (!$club) {
            throw $this->createNotFoundException(
                'No clubs found for id '.$id
            );
        }

        $club->setStatus('invalide');
        $em->persist($club);
        $em->flush();

        return $this->redirectToRoute('mrsport_validation_club');
    }
}
