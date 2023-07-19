<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractDashboardController
{
    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    private $articleRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->articleRepository = $entityManager->getRepository(Article::class);
    }

    public function index(): Response
    {
        $articles = $this->articleRepository->findAll();

        return $this->render('admin/dashboard.html.twig', [
            'articles' => $articles,
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administrateur');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour au site', 'fa-solid fa-house', 'home');
        yield MenuItem::linkToCrud('Liste des Articles', 'fa-solid fa-book', Article::class);
    }
}
