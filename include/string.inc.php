<?php
    function last($str)
    {   
       $lastChar = substr($str, strlen($str) - 1);
       return $lastChar;
    }   

    function withoutLast($str)
    {
        $strWithoutLast = substr($str, 0, strlen($str) - 1);
        return $strWithoutLast;
    }

    function revers($str)
    {
        $reversStr = '';
        for($i = strlen($str); $i >= 0; $i--)
        {
            $reversStr .= $str[$i];
        }   
        return $reversStr;
        
    }

    function firstStrElements($str)
    {
        $FirstChar = substr($str, 0, 1);
        return $FirstChar;
    }
    function isValidString($str)
    {
        $validSymbol = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; 
        $isBadCharInStr = false;
        for ($i = 0; ($i < strlen($str)) && !$isBadCharInStr ; $i++)
        {       
            $isBadCharInStr = !stristr($validSymbol, $str{$i});     
        }
        return !is_numeric(firstStrElements($str)) && !$isBadCharInStr;
    }

    function checkStr($str)
    {
        
       return !empty($str);
    }

    function isEmptyStr($str)
    {
        if (empty($str))
        {   
            echo 'Пусто!!!';
            return false;
        }
        else
        {
            return true;
        }
    }
    function isSpace($char)
    {
        $blank = ' '; 
        if ($char == $blank)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function RemoveExtrBlanks($str)
    {
        $str = trim($str);
        $clearStr = '';

        for ($i = 0; $i < strlen($str); ++$i)
        {
            if (!isSpace($str[$i]))
            {
                $clearStr .= $str[$i];
                $space = false; 
            }
            else if (!$space)
            {
                 $clearStr .= $str[$i]; 
                 $space = true;
            }
          
        }
        return $clearStr;  
    }

    function numberOfStr($str)
    {
        $n = 0;
        for ($i = 0; $i < strlen($str); ++$i)
        {
            if (is_numeric($str[$i]))
            {
                $n++;
            }
        }
        return $n;
    }
    function countRegister($register, $str)
    {
        $count = 0;
        for ($i = 0; $i < strlen($str); ++$i)
        {
            if (!preg_match($register, $str[$i]))
            {
                $count++;
            }
        }
        return $count;
    }
    function passwordConsistsOnlyOfLettersOrDigits($str)
    {
        $isNumeric = false;
        $isString = false;
        for ($i = 0; $i < strlen($str); ++$i)
        {
            if (is_numeric($str[$i]))
            {
                $isNumeric = true;
            }
            else if (is_string($str[$i]))
            {
                $isString = true;
            }
        }
        return $isString && $isNumeric;
        
    }
    function repetitiveSymbol($str)
    {
        $countRepetitiveChar = 0;
        foreach (count_chars($str, 1) as $val) 
        {
            if ($val >= 2)
            {
                $countRepetitiveChar += $val;
            }
        }
        return $countRepetitiveChar;
    }
    function passwordStrength($str)
    {
        $strength = 0;
        $strength = $strength + 4 * strlen($str);
        echo '1)'.strlen($str).'<br>';
        $strength = $strength + 4 * numberOfStr($str);
        echo '2)'.numberOfStr($str).'<br>'; 
        $contUpCase = countRegister('/[^A-Z]+/', $str);
        if ($contUpCase != 0)
        {
            $strength = $strength + 2 * (strlen($str) - $contUpCase);
        }
        echo "3)$contUpCase <br>";       
        $contLowerCase = countRegister('/[^a-z]+/', $str);
        if ($contLowerCase != 0)
        {
            $strength = $strength + 2 * (strlen($str) - $contLowerCase);
        }
        echo "4)$contLowerCase <br>";         
        if (!passwordConsistsOnlyOfLettersOrDigits($str))
        {
            $strength = $strength - strlen($str);
            echo "5, 6)".strlen($str)."<br>";   
        }
        $strength = $strength - repetitiveSymbol($str);
        echo "7)Вычитаем ".repetitiveSymbol($str)."<br>"; 
        return $strength;
    }
