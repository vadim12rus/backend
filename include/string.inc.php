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
        if (!is_numeric(firstStrElements($str)))
        {            
            $goodStr = true;           
        }
        else
        {
            $goodStr =  false;   
        }
        return $goodStr;
    }

    function isSetStr($str)
    {
        if (isset($str))
        { 
            isEmptyStr($str);
        }
        else
        {   
            echo 'Не передано STR!!!';
        }
    }

    function isEmptyStr($str)
    {
        if (empty($str))
        {   
            echo 'Пусто!!!';
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
