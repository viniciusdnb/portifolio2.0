<?php
namespace viniciusdnb\portifolio\Router;

use Exception;

class VerifyController
{
    public $class;

    function __construct(string $nameController)
    {
        $nameClassController = ucfirst($nameController)."Controller";
        $controllerFile = $nameClassController.".php";

        if(file_exists("src/Controller/".$controllerFile))
        {
           if(class_exists("\\viniciusdnb\\portifolio\\Controller\\". $nameClassController))
           {
                $nameClassController = "\\viniciusdnb\\portifolio\\Controller\\". $nameClassController;
                $this->class = $nameClassController;
               
           }else{
            throw new Exception("Pagina não encontrada Erro.: Desculpe a Classe nao foi implementada", 501);
           }
        }else{
            throw new Exception("Pagina nao encontrada Erro:. Desculpe o Arquivo não Existe", 404);
        }
    }

}