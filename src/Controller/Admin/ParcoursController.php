<?php

namespace App\Controller\Admin;

use App\Entity\Parcours;
use App\Form\ParcoursType;
use App\Repository\ParcoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/parcours")
 */
class ParcoursController extends AbstractController
{
    /**
     * @Route("/", name="admin_parcours_index", methods={"GET"})
     */
    public function index(ParcoursRepository $parcoursRepository): Response
    {
        return $this->render('admin/parcours/index.html.twig', [
            'parcours' => $parcoursRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_parcours_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $parcour = new Parcours();
        $form = $this->createForm(ParcoursType::class, $parcour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($parcour);
            $entityManager->flush();

            return $this->redirectToRoute('parcours_index',[
                "lang" => $request->get("lang")
            ]);
        }

        return $this->render('admin/parcours/new.html.twig', [
            'parcour' => $parcour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_parcours_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Parcours $parcour): Response
    {
        $form = $this->createForm(ParcoursType::class, $parcour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('parcours_index',[
                "lang" => $request->get("lang")
            ]);
        }

        return $this->render('admin/parcours/edit.html.twig', [
            'parcour' => $parcour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_parcours_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Parcours $parcour): Response
    {
        if ($this->isCsrfTokenValid('delete'.$parcour->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($parcour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('parcours_index',[
            "lang" => $request->get("lang")
        ]);
    }
}
