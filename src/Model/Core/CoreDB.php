<?php

namespace viniciusdnb\portifolio\Model\Core;

use viniciusdnb\portifolio\Model\ConnectionDB;
use PDO;
use PDOException;
use Exception;

abstract class CoreDB
{
    private $connection;
    public $lastInsertId;

    function __construct()
    {
        $this->connection = ConnectionDB::getConnection();
    }

    public function coreSelect($sql)
    {
        //echo $sql."<br>";
        if (!empty($sql)) {

            try {
                $result = $this->connection->query($sql);

                return $result;
            } catch (PDOException $ex) {

                throw new Exception("nao foi possivel fazer a consulta no banco de dados \n ERRO: mensagem "
                    . $ex->getMessage() .  "\n CODE: " . $ex->getCode() . "\n", 500);
            }
        }
    }

    public function coreInsert($table, $columns, $values)
    {
        if (!empty($table) && !empty($columns) && !empty($values)) {
            $params = $columns;

            $columns = str_replace(":", "", $columns);

            try {
                $this->connection->beginTransaction();
                $stmt = $this->connection->prepare("INSERT INTO $table ($columns) VALUES ($params)");
                $stmt->execute($values);
                $result = $this->connection->lastInsertId();
                $this->connection->commit();

                return $result;
            } catch (PDOException $ex) {
                $this->connection->rollBack();
                throw new Exception("erro ao iserir - " . $ex->getMessage());
                return false;
            }
        } else {
            throw new Exception("Dados faltante para executar a funcao", 500);
            return false;
        }
    }

    public function coreUpdate($table, $columns, $values, $where)
    {
        if (!empty($table) && !empty($columns) && !empty($values)) {
            if ($where) {
                $where = "WHERE " . $where;
            }
            try {

                $this->connection->beginTransaction();
                $stmt = $this->connection->prepare("UPDATE $table SET $columns $where");
                $stmt->execute($values);
                $this->connection->commit();
                return $stmt->rowCount();
            } catch (PDOException $ex) {

                $this->connection->rollBack();
                throw new Exception("Erro ao atualizar " . $ex->getMessage() . " code: " . $ex->getCode(), 500);
                return false;
            }
        }
    }

    public function coreDelete($table, $where)
    {
        if (!empty($table) && !empty($where)) {
            $where = "WHERE " . $where;

            try {
                $this->connection->beginTransaction();
                $stmt = $this->connection->prepare("DELETE FROM $table $where");

                $stmt->execute();
                $this->connection->commit();

                return $stmt->rowCount();
            } catch (PDOException $ex) {
                $this->connection->rollback();
                throw new Exception("Erro ao deletar " . $ex->getMessage() . " " . $ex->getCode(), 500);
                return false;
            }
        } else {
            throw new Exception("Nao foi possivel deletar a dados faltante", 500);
            return false;
        }
    }
}

?>
