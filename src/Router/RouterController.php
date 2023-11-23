<?php

namespace viniciusdnb\portifolio\Router;

abstract class RouterController
{
	public $data = [];

	
	function render($view)
	{
		$data = $this->getData();

		require_once "src/Views/layout/head/head.php";		
		require_once "src/Views/layout/header/header.php";		
		require_once "src/Views/layout/main/main.php";
		require_once "src/Views/" . $view . ".php";
		require_once "src/Views/layout/footer/footer.php";

	}

	function redirect($view)
	{
		header('Location' . $view);
	}

	function setData($name, $data)
	{
		 $this->data[$name] = $data;
	}

	function getData()
	{
		return $this->data;
	}
}

?>