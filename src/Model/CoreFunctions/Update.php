<?php

namespace viniciusdnb\portifolio\Model\CoreFunctions;

use viniciusdnb\portifolio\Model\Core\Prepare;

class Update extends Prepare
{
    function update(array $values, array $columns, string $where, bool $arr_shift)
    {
        
        $this->columns = $columns;
        $this->preparedColum = $this->prepareColumnsUpdate($this->getColumns());
        return $this->save($values, $where);
    }

    private function save($values, $where)
    {
        $preparedeValues = $this->prepareValues($this->getColumns(), $values);
       
        $result = $this->callCoreDB->coreUpdate($this->table, $this->preparedColum, $preparedeValues, $where);
 
        return $result;
    }
}