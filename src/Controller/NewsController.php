<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/news', name: 'news')]
class NewsController extends AbstractController
{
    #[Route('', name: '')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render(
            'news/index.html.twig',
            ['articles' => $articles,]
        );
    }

    #[Route('/read/{id<^[0-9]+$>}', name: '_read')]
    public function showArticle(int $id, ArticleRepository $articleRepository): Response
    {
        $read = $articleRepository->find($id);

        return $this->render(
            'news/read.html.twig',
            ['read' => $read,]
        );
    }
}
