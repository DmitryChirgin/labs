<?php
    if(isset($_GET['identifer']))
    {
	    $identifer = trim($_GET['identifer']);
	}
	else
	{
	    die('не передан identifer');
	}
	
	if (empty($identifer))
	{
	    die('Передана пустая последовательность');
	}
	if(ctype_alpha($identifer[0]))
	{
	    for($i = 1; $i < strlen($identifer); $i++)
		{
    		if(ctype_alnum($igentifer[i]))
			{
			    die('Нет');
  	}
            else
            {
                die('ДА');
            }
 	}
	}
    else
    {
        die('Последовательнотсь не является идентификатором');
    }