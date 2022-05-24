<?php

namespace App\Controller; //must match the directory

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]

    public function homepage(): Response
    {
        return new Response('Title: PB and Jams');
    }

    #[Route('/browse/{slug}')]

    public function browse(string $slug = null): Response
    {
        if($slug){
            $title = 'Genre: '.u(str_replace('-', ' ', $slug))->title(true); //using Symfony function to convert all words to the title case
        } else {
            $title ='All Genres';
        }
  
        return new Response($title);
    }


}