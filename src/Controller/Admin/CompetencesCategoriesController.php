<?php

namespace App\Controller\Admin;

use App\Entity\CompetencesCategories;
use App\Form\CompetencesCategoriesType;
use App\Repository\CompetencesCategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/competences/categories")
 */
class CompetencesCategoriesController extends AbstractController
{
    /**
     * @Route("/", name="admin_competences_categories_index", methods={"GET"})
     */
    public function index(CompetencesCategoriesRepository $competencesCategoriesRepository): Response
    {
        return $this->render('admin/competences_categories/index.html.twig', [
            'competences_categories' => $competencesCategoriesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_competences_categories_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $competencesCategory = new CompetencesCategories();
        $form = $this->createForm(CompetencesCategoriesType::class, $competencesCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($competencesCategory);
            $entityManager->flush();

            return $this->redirectToRoute('admin_competences_categories_index');
        }

        return $this->render('admin/competences_categories/new.html.twig', [
            'competences_category' => $competencesCategory,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_competences_categories_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CompetencesCategories $competencesCategory): Response
    {
        $form = $this->createForm(CompetencesCategoriesType::class, $competencesCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_competences_categories_index');
        }

        return $this->render('admin/competences_categories/edit.html.twig', [
            'competences_category' => $competencesCategory,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_competences_categories_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CompetencesCategories $competencesCategory): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competencesCategory->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($competencesCategory);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_competences_categories_index');
    }
}
