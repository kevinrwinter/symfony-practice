<?php
// src/Controller/QuestionController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class QuestionController extends AbstractController {

    // Annotation route
    #[Route('/', name: 'homepage')]

    public function homepage(): Response {

        return new Response(
            '<html><body><h1 style="color:maroon; text-align:center">"What a bewitching controller we have conjured!"</h1></body></html>'
        );
    }

    #[Route('/questions/{slug}', name: 'questions')]
    public function show(string $slug = null): Response {

      $ucSlug = $slug ? u(str_replace('-', ' ', $slug))->title(true): null;
  
    //   return new Response ((sprintf('Future page to show a question %s', $ucSlug)));

      return $this->render('question/show.html.twig', [
          'kevin' => $ucSlug
      ]);
    }
}
