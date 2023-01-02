<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticlesController extends AbstractController
{
    #[Route('/articles/{slug}', name: 'article_show')]
    public function show(?Articles $articles): Response
    {
        return $this->render('articles/show.html.twig', [
            'articles' => $articles,
        ]);
    }
}
