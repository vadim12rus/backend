<?php
    $dir = './include';
    $files1 = scandir($dir);
    for ($i = 0; $i <= count($files1); $i++)
    {
        if (strpos($files1[$i], 'inc.php'))
        {
           require_once "$files1[$i]"; 
      
        }
    }
