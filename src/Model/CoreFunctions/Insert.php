<?php

namespace viniciusdnb\portifolio\Model\CoreFunctions;

use viniciusdnb\portifolio\Model\Core\Prepare;

class Insert extends Prepare
{
    public $lastInsertId;

    function insert(array $values, bool $arr_shift)
    {

        
        if(!$arr_shift)
        {
            array_shift($this->columns);
        }

        $this->preparedColum = $this->prepareColumnsInsert($this->getColumns());

        if(is_array($values[0]))
        {
            for ($i=0; $i < count($values); $i++) { 
               $result = $this->save($values[$i]);
            }
        }else{
           $result = $this->save($values);
        }
        
        return $result;
    }

    private function save($values)
    {
        $preparedValues = $this->prepareValues($this->getColumns(), $values);
        $this->result = $this->callCoreDB->callInsert($this->table, $this->preparedColum, $preparedValues);
        $this->lastInsertId = $this->callCoreDB->last_InsertId;
        return $this->result;
    }
}