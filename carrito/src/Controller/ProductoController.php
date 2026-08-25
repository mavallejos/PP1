<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    public function listarProductos(): Response
    {
        // Enlazamos el controlador pasándole la ruta de la plantilla Twig
        return $this->render('producto/lista.html.twig');
    }
}


