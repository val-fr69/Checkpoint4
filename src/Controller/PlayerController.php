<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Players;
use App\Form\PlayerType;
use Doctrine\ORM\EntityManagerInterface;

class PlayerController extends AbstractController
{
    #[Route('/player/new', name: 'new_player', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $player = new Players();
        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $player = $form->getData();

            $manager->persist($player);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre joueur a bien été ajouté à une équipe'
            );
        }

        return $this->render('player/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
