<?php

namespace viniciusdnb\portifolio\Model;

use Exception;

class ConfigDB
{
    private $configFile;
    private $configDB;

    function __construct()
    {
        if (file_exists(__DIR__ . "/configDB.json") && file_get_contents(__DIR__ . "/configDB.json") != null) {
            $this->setConfigFile();
        } else {

            throw new Exception("ERRO NA CONFIGURACAO DO BANCO DE DADOS", 500);
            return;
        }
    }

    private function setConfigFile()
    {
        $file = file_get_contents(__DIR__ . "/configDB.json");
        $this->configFile = $file;
        $this->setVars();
        $this->defineDB();
    }

    private function getConfigFile()
    {
        return $this->configFile;
    }

    private function setVars()
    {
        $jsonConfig = json_decode($this->getConfigFile());
        $this->configDB = DB_PRODUCAO === "DB" ? $jsonConfig->DB : $jsonConfig->DBProd;
    }

    private function defineDB()
    {
        if ($this->verify()) {
            return;
        }

        define("DB_DRIVER", $this->configDB->DB_DRIVER);
        define("DB_HOST", $this->configDB->DB_HOST);
        define("DB_USER", $this->configDB->DB_USER);
        define("DB_PASS", $this->configDB->DB_PASS);
        define("DB_NAME", $this->configDB->DB_NAME);
        define("CONST_DB", true);
    }

    private function verify()
    {
        if (defined('CONST_DB')) {
            return true;
        }
    }
}
?>