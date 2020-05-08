<?php 
	spl_autoload_register(function($class){
		require "./asset/classes/".$class.".php";
	});
?>