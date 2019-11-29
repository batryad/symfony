<?php

// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class WildController extends AbstractController
{
    /**
     * @Route("/wild/show/{slug}",
     *        name="wild_show",
     *        defaults={"slug"="Aucune série sélectionnée, veuillez choisir une série"},
     *        requirements={"slug": "[a-z0-9-]+"})
     * @param $slug
     * @return Response
     */
    public function show($slug) :Response
    {

      $slug = str_replace('-', ' ', $slug);
      $slug = ucwords($slug);
        return $this->render('wild/show.html.twig', [
            'website' => 'Wild Séries',
            'slug' => $slug,
            'name' => 'Titre de film'
        ]);
    }
}