<?php
    require_once("include/request.inc.php");
    require_once("include/sin.inc.php");
    include("template/head.html");
    if(!empty($_GET['degree']) && !empty($_GET['degree']))
    {
        if(ctype_digit($_GET['degree']) && ctype_digit($_GET['minute']))
        {
            printSinTable();
        }
        else
        {
             echo "the entered values are not numbers";
        }
    }
    else
    {
        echo "enter values";
    }
    include("template/foot.html");