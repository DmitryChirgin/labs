<?php
    function printSinTable()
    {
        $degreestep = isset($_GET['degree'])?$_GET['degree'] : 10;
        $minutestep = isset($_GET['minute'])?$_GET['minute'] : 10;
	    $table = "<table>";
		$table = $table . getSinTableHead($minutestep);
		$table = $table . getSinTableBody($degreestep, $minutestep);
		$table = $table . "</table>";
		echo $table;
	}
 ?>