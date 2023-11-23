<?php

namespace viniciusdnb\portifolio\Model\Core;

use viniciusdnb\portifolio\Model\Core\CallCoreDB;

abstract class Prepare
{
	protected $result;
	protected $callCoreDB;
	protected $columns;
	protected $table;
	protected $preparedColum;

	function __construct($table, $columns)
	{
		$this->callCoreDB = new CallCoreDB;

		$this->table = $table;
		$this->columns = $columns;
	}

	protected function prepareColumnsInsert($columns)
	{
		//insere os dois pontos para a funcao prepare do PDO
		$columns[0] = ":" . $columns[0];

		//implode o array de colunas
		return implode(",:", $columns);
	}

	protected function prepareValues($columns, $value)
	{
		//var_dump($columns);
		//var_dump($value);

		$array = [];

		//cria o array de values preparado inserir 

		for ($i = 0; $i < count($columns); $i++) {
			//echo $i ." :" . $columns[$i] ." = ".$value[$i] . "<br>";
			$array[":" . $columns[$i]] = $value[$i];
		}

		return $array;
	}

	protected function prepareColumnsUpdate($columns)
	{
		for ($i = 0; $i < count($columns); $i++) {
			$columns[$i] .= "=:" . $columns[$i];
		}

		return implode(",", $columns);
	}
	protected function prepareDelet($table, $column, $value)
	{
		return "`$table`.`$column` = '$value'";
	}
	protected function getColumns()
	{
		return $this->columns;
	}

	protected function getTable()
	{
		return $this->table;
	}

	public function getResult()
	{
		return $this->result;
	}
}

?>