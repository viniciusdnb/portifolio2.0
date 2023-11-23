<?php

namespace viniciusdnb\portifolio\Controller;

use viniciusdnb\portifolio\Router\RouterController;

class HomeController extends RouterController
{
   public function index()
   {
        $this->render("home/index");
   } 
}