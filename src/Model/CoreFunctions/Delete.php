<?php

namespace viniciusdnb\portifolio\Model\CoreFunctions;

use viniciusdnb\portifolio\Model\Core\Prepare;

class Delete extends Prepare
{
    /**
     * @param $id operação somente com o id
     */
    function deleteId(int $id)
    {
        return $this->callCoreDB->coreDelete($this->table, $this->columns[0] . " = " . $id);
    }

    function deleteWhere(string $column, string $value)
    {
        $where = $this->prepareDelet($this->table, $column, $value);
        return $this->callCoreDB->coreDelete($this->table, $where);
    }
}
?>