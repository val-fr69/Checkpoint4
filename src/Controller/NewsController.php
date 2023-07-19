<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    #[Route('/news', name: 'news')]
    public function showArticle(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render(
            'news/index.html.twig',
            ['article' => $articles,]
        );
    }
}
