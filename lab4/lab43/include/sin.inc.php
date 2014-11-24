<?php
    function getSinTableHead($minutestep)
	{
	    $html = '';
		$html .= '<tr>';
        $html .= '<th>Degree\Minute</th>';
        for ($minute = 0; $minute <= 60; $minute += $minutestep)
	    {
			$html .= '<th>' . $minute . '</th>';
		}
        $html .= '</tr>';
		return $html;
	}
    
    function getSinTableBody($degreestep, $minutestep)
	{
	    $html = '';
		for ($degree = 0; $degree <= 360; $degree += $degreestep)
	    {
		    $html .= '<tr>';
			$html .= '<td>' . $degree . '</td>';
			for ($minute = 0; $minute <= 60; $minute += $minutestep)
			{
			    $sin = round(sin(deg2rad($degree + $minute/60)), 5);
				$html .= "<td>{$sin}</td>";
			}
			$html .= '</tr>';
		}
		return $html;
	}
 ?>