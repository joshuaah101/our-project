<?php 
	spl_autoload_register(function($class){
		require "asset/classes/".$class.".php";
	});

	$eed = new Methods();
?>