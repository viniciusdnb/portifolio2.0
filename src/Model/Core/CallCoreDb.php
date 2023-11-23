<?php

namespace viniciusdnb\portifolio\Model\Core;

use viniciusdnb\portifolio\Model\Core\CoreDB;
use PDO;

 class CallCoreDB extends CoreDB
{
    public $last_InsertId;

    public function callSelect(string $sql)
    {
        $result = $this->coreSelect($sql);
       
       return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function callInsert(string $table, string $columns, array $values)
    {
        $result = $this->coreInsert($table, $columns, $values);
        $this->last_InsertId = $this->lastInsertId;
        return $result;
    }

    public function callUpdate(string $table, array $columns, array $values, string $where)
    {
        var_dump([$table,$columns,$values,$where]);
        $result = $this->coreUpdate($table,$columns,$values,$where);
        return $result;
    }

    public function calldelete(string $table, string $where)
		{
			$result = $this->coreDelete($table, $where);
           
			return $result;
		}
}

?>