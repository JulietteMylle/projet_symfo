<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController{

    public function index()
    {

        $response = new Response('<h1>Hello World ! </h1>');
        return $response;
    }
}