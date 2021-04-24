<?php

namespace App\Controller\Admin;

use App\Entity\Presentation;
use App\Form\PresentationType;
use App\Repository\PresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/presentation")
 */
class PresentationController extends AbstractController
{
    /**
     * @Route("/", name="presentation_index", methods={"GET"})
     */
    public function index(PresentationRepository $presentationRepository): Response
    {
        return $this->render('admin/presentation/index.html.twig', [
            'presentations' => $presentationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="presentation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $presentation = new Presentation();
        $form = $this->createForm(PresentationType::class, $presentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($presentation);
            $entityManager->flush();

            return $this->redirectToRoute('presentation_index',[
                "lang" => $request->get("lang")
            ]);
        }

        return $this->render('admin/presentation/new.html.twig', [
            'presentation' => $presentation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="presentation_show", methods={"GET"})
     */
    public function show(Presentation $presentation): Response
    {
        return $this->render('admin/presentation/show.html.twig', [
            'presentation' => $presentation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="presentation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Presentation $presentation): Response
    {
        $form = $this->createForm(PresentationType::class, $presentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('presentation_index',[
                "lang" => $request->get("lang")
            ]);
        }

        return $this->render('admin/presentation/edit.html.twig', [
            'presentation' => $presentation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="presentation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Presentation $presentation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$presentation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($presentation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('presentation_index',[
            "lang" => $request->get("lang")
        ]);
    }
}
