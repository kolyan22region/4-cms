<?php
$_GET["page"] ? file_exists("./page/".$_GET["page"]) ? $page_inc = file_get_contents("./page/".$_GET["page"]) :	$page_inc = file_get_contents("./page/404.php") : $page_inc = file_get_contents("./page/main.php");
$contents = $page_inc;
require "/page/template.php";
