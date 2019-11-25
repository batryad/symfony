<?php
// src/Controller/NavbarController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class NavbarController extends AbstractController
{
/**
* @Route("/navbar", name="navbar_index")
*/
public function index() :Response
{

return $this->render('wild/navbar.html.twig', [
'welcome' => 'Bienvenue !',
]);
}
}