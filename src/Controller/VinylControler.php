<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class VinylControler
{
    #[Route('/')]
    public function homepage()
    {
        die('Some Text)');
    }
}