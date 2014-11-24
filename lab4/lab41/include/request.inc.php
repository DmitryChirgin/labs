<?php
    function printSinTable()
	{
	    $table = "<table>";
		$table = $table . getSinTableHead();
		$table = $table . getSinTableBody();
		$table = $table . "</table>";
		echo $table;
	}