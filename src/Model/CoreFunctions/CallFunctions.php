<?php

namespace viniciusdnb\portifolio\Model\CoreFunctions;

use viniciusdnb\portifolio\Model\CoreFunctions\Select;
use viniciusdnb\portifolio\Model\CoreFunctions\Insert;
use viniciusdnb\portifolio\Model\CoreFunctions\Update;
use viniciusdnb\portifolio\Model\CoreFunctions\Delete;

abstract class CallFunctions
{

    function select(string $where = null)
    {
        //usa as variaveis da propria classe ao instaciar - sem erro
        $funcSelect = new Select($this->table, $this->columns);

        $funcSelect->select($where);

        return $funcSelect->getResult();
    }


    function insert($values, bool $arr_shift = false)
    {
        $funcIsert = new Insert($this->table, $this->columns);
        $this->lastInsertId = $funcIsert->lastInsertId;
        return $funcIsert->insert($values, $arr_shift);
    }

    function update(array $values, array $columns, string $where, bool $arr_shift = false)
    {
        $funcUpdate = new Update($this->table, $columns);
        return $funcUpdate->update($values, $columns, $where, $arr_shift);
    }

    function deleteId(int $var)
    {
        if (!empty($var)) {
            $funcDeletId = new Delete($this->table, $this->columns);
            return $funcDeletId->deleteId($var);
        }

        return false;
    }

    function deletWhere(string $column, string $value)
    {
        if (!empty($column) && !empty($value)) {
            $funcDeletWhere = new Delete($this->table, $this->columns);
            return $funcDeletWhere->deleteWhere($column, $value);
        }
        return false;
    }
}
