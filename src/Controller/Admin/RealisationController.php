<?php

namespace App\Controller\Admin;

use App\Entity\Realisation;
use App\Form\RealisationType;
use App\Repository\RealisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/realisations")
 */
class RealisationController extends AbstractController
{
    /**
     * @Route("/", name="admin_realisation_index", methods={"GET"})
     */
    public function index(RealisationRepository $realisationRepository): Response
    {
        return $this->render('admin/realisation/index.html.twig', [
            'realisations' => $realisationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_realisation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $realisation = new Realisation();
        $form = $this->createForm(RealisationType::class, $realisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($realisation);
            $entityManager->flush();

            return $this->redirectToRoute('admin_realisation_index',[
                "lang" => $request->get("lang")
            ]);
        }

        return $this->render('admin/realisation/new.html.twig', [
            'experience' => $realisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_realisation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Realisation $realisation): Response
    {
        $form = $this->createForm(RealisationType::class, $realisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_realisation_index',[
                "lang" => $request->get("lang")
            ]);
        }

        return $this->render('admin/realisation/edit.html.twig', [
            'experience' => $realisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_realisation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Realisation $realisation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$realisation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($realisation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_realisation_index',[
            "lang" => $request->get("lang")
        ]);
    }
}
