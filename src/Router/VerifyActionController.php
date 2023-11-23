<?php
namespace viniciusdnb\portifolio\Router;

use Exception;

class VerifyActionController
{
    function __construct($objController,  $action,  $params)
    {       
          
        if(isset($action) && method_exists($objController, $action)){

            return $objController->{$action}($params);

        }elseif(method_exists($objController, "index")){
          
            return $objController->index();
        }

        throw new Exception("Pagina não encontrada Erro.: Desculpe a Acao nao implementada", 406);
    }
}

?>