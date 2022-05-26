<?php

namespace App\Controller;

use App\Repository\EpisodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\SeasonRepository;


class ProgramController extends AbstractController
{
    #[Route('/program/', name: 'program_index')]
    public function index(ProgramRepository $programRepository): Response
    {   
        $programs = $programRepository->findAll();
        return $this->render('program/index.html.twig', [
            'programs' => $programs,
        ]);
    }

    #[Route('/program/{id}', requirements: ['id'=>'\d+'], methods: ['GET'], name: 'program_show')]
    public function show(int $id, ProgramRepository $programRepository, SeasonRepository $seasonRepository): Response
    {
        $program = $programRepository->findOneBy(['id' => $id]);
        if (!$program) {
            throw $this->createNotFoundException('The product does not exist');
        }
        $seasons = $seasonRepository->findBy(['program' => $program->getId()]);
        return $this->render('program/show.html.twig', [
            'program' => $program,
            'seasons' => $seasons,
        ]);
    }

    #[Route('/program/{programId}/season/{seasonId}', requirements: ['programId'=>'\d+', 'seasonId'=>'\d+'], methods: ['GET'], name: 'program_season_show')]
    public function showSeason(int $programId, int $seasonId, SeasonRepository $seasonRepository, EpisodeRepository $episodeRepository): Response
    {
        $season = $seasonRepository->findOneBy(['program' => $programId, 'id' => $seasonId]);
        if (!$season) {
            throw $this->createNotFoundException('The product does not exist');
        }
        $episodes = $episodeRepository->findBy(['season' => $season->getId()]);
        return $this->render('program/season_show.html.twig', [
            'season' => $season,
            'episodes' => $episodes,
        ]);
    }
}
