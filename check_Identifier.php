<?php
    require_once('include/string.inc.php');
    isSetStr($_GET['str']);
    $str = $_GET['str'];
    if ((isValidString($str)))
    {
        echo $str;
    }
    else
    {
        echo "Есть недопустимые символы!!!";   
    } 
    
   