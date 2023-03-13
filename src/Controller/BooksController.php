<?php

namespace App\Controller;

use App\Entity\Books;
use App\Form\BookType;
use App\Repository\BooksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BooksController extends AbstractController
{
    #[Route('/add/book', name: 'add_book')]
    public function add1(Request $request, EntityManagerInterface $manager): Response
    {
        $book = new Books;
       
        $form = $this->createForm(BookType::class,$book);
        $form->handleRequest($request);
        
            // The form was filled, manage it...
            if($form->isSubmitted() && $form->isValid()) {
                $manager->persist($book); // Persist the first part of your ad object
               $manager->flush();

               $this->addFlash('success','Le livre a bien été ajouté !');

               return $this->redirectToRoute('add_book');
            }


        return $this->render('books/add.html.twig', [
            'controller_name' => 'BooksController',
            'form' => $form
        ]);
    }


    #[Route('/update/book/{id}', name: 'update_book')]
    public function updateBook($id,BooksRepository $repo, EntityManagerInterface $manager, Request $request)
    {
        $book = $repo->find($id);

        $form = $this->createForm(BookType::class,$book);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $book = $form->getData();
            $manager->persist($book);
            $manager->flush();

            $this->addFlash('success','Le livre a bien été modifié !');

            return $this->redirectToRoute('book/edit.html.twig');
        }

        return $this->render('books/edit.html.twig',[
            'form'=>$form,
            'book'=>$book
        ]);

    }

    #[Route('/search', name: 'search_page')]
    public function search(BooksRepository $repo, Request $request)
    {



        return $this->render('books/search.html.twig');

    }
}
