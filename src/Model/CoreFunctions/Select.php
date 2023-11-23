<?php

namespace viniciusdnb\portifolio\Model\CoreFunctions;

use viniciusdnb\portifolio\Model\Core\Prepare;

class Select extends Prepare 
{
  
    function select($where = null)
    {
        $columns = $this->getColumns();
        $table = $this->getTable();
        $query = "SELECT ";

        for($i = 0; $i < count($columns); $i++)
        {
            $query .= $columns[$i] . ", ";
        }

        $query = rtrim($query, ", ");
        $query .= " FROM " . $table;

        if(!empty($where))
        {
            $query .= " WHERE " . $where;
        }

        $this->result = $this->callCoreDB->callSelect($query);
    }

    

   
}