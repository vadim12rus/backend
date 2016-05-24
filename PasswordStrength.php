<?php
    require_once('include/string.inc.php');
    if (checkStr($_GET['password']))
    {
        echo "Надежность пароля ".PasswordStrength($_GET['password']);
    }
