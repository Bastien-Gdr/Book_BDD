<?php

namespace App\Controller;

use App\Entity\Books;
use App\Form\BookType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $book = new Books;

        $form = $this->createForm(BookType::class,$book);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form
        ]);
    }
}
