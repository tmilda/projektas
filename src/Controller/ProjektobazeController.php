<?php

namespace App\Controller;

use App\Entity\Projektobaze;
use App\Form\ProjektobazeType;
use App\Repository\ProjektobazeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/projektobaze")
 */
class ProjektobazeController extends AbstractController
{
    /**
     * @Route("/", name="projektobaze_index", methods={"GET"})
     */
    public function index(ProjektobazeRepository $projektobazeRepository): Response
    {
        return $this->render('projektobaze/index.html.twig', [
            'projektobazes' => $projektobazeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="projektobaze_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $projektobaze = new Projektobaze();
        $form = $this->createForm(ProjektobazeType::class, $projektobaze);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($projektobaze);
            $entityManager->flush();

            return $this->redirectToRoute('projektobaze_index');
        }

        return $this->render('projektobaze/new.html.twig', [
            'projektobaze' => $projektobaze,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="projektobaze_show", methods={"GET"})
     */
    public function show(Projektobaze $projektobaze): Response
    {
        return $this->render('projektobaze/show.html.twig', [
            'projektobaze' => $projektobaze,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="projektobaze_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Projektobaze $projektobaze): Response
    {
        $form = $this->createForm(ProjektobazeType::class, $projektobaze);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('projektobaze_index', [
                'id' => $projektobaze->getId(),
            ]);
        }

        return $this->render('projektobaze/edit.html.twig', [
            'projektobaze' => $projektobaze,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="projektobaze_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Projektobaze $projektobaze): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projektobaze->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($projektobaze);
            $entityManager->flush();
        }

        return $this->redirectToRoute('projektobaze_index');
    }
}
