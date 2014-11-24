<?php
    function getSinTableHead()
	{
	    $html = '';
		$html .= '<tr>';
        $html .= '<th>Degree\Minute</th>';
        for ($minute = 0; $minute <= 60; $minute += 6)
	    {
			$html .= '<th>' . $minute . '</th>';
		}
        $html .= '</tr>';
		return $html;
	}
    
    function getSinTableBody()
	{
	    $html = '';
		for ($degree = 0; $degree <= 360; $degree += 10)
	    {
		    $html .= '<tr>';
			$html .= '<td>' . $degree . '</td>';
			for ($minute = 0; $minute <= 60; $minute += 6)
			{
			    $sin = round(sin(deg2rad($degree + $minute/60)), 5);
				$html .= "<td>{$sin}</td>";
			}
			$html .= '</tr>';
		}
		return $html;
	}