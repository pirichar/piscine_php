<?php
	include 'TemplateEngine.php';
	include 'Tea.php';
	include 'Coffee.php';
	include_once "HotBeverage.php";

	$template = new TemplateEngine;
	$HotB = new HotBeverage("Coke","10","aucune");
	$tea = new Tea("Jasmin","10","moyenne","veloute","pas cher");
	$coffee = new Coffee("Guatemala","20","forte","corser","tres cher");
	$template->createFile($tea);
	$template->createFile($coffee);
?>