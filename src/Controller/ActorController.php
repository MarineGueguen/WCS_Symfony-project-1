<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Repository\ActorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/actor', name: 'actor_')]
class ActorController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ActorRepository $actorRepository): Response
    {   
        $actors = $actorRepository->findAll();
        return $this->render('actor/index.html.twig', [
            'actors' => $actors,
        ]);
    }

    #[Route('/{actor}', requirements: ['id'=>'\d+'], methods: ['GET'], name: 'show')]
    public function show(Actor $actor): Response
    {
        if (!$actor) {
            throw $this->createNotFoundException('The product does not exist');
        }
        return $this->render('actor/show.html.twig', [
            'actor' => $actor,
        ]);
    }
}