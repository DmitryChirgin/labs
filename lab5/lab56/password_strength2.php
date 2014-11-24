<?php
    require_once("include/strength2.inc.php");
    require_once("template/form.html");
    $password = '';
	if(isset($_GET['password']))
    {
        $password = trim($_GET['password']);
    }
    //$password = isset($_GET['password'])? trim($_GET['password']:); рассмотрет вариант записи if (краткий)
	$strength = calcPasswordStrenght($password);
	echo $strength;