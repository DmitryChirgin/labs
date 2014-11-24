<?php
    
    
    function calcPasswordStrenght($password)
    {
        $strength = 0;
	    $strength += calcStrenghtForLength($password);
        $strength += calcStrenghtForRegistr($password);
        $strength += calcStrengthForAlnum($password);
        $strength -= calcStrengthForRepeat($password);
	    return $strength;
    }
   
    function calcStrenghtForLength($password)
    {
        $strength = 0;
        $count = iconv_strlen($password, 'UTF-8'); // 1) кол-во символов в пароле 
        $strength += 4 * $count; 
        $strength += iconv_strlen(preg_replace('/[^\d]/', '', $password)) * 4; // 2) кол-во цифр в пароле
	    return $strength;
    }
    
    function calcStrenghtForRegistr($password)
    {
        $strength = 0;
        if(ctype_alpha(preg_replace('/[0-9, ^\d]/', '', $password)))
        {
            if(ctype_upper(preg_replace('/[a-z, а-яё, 0-9, ^\d]/', '', $password)))
            {
                $upp = iconv_strlen(preg_replace('/[a-z, а-яё, 0-9, ^\d]/', '', $password)); // 3) кол-во заглавных букв
                $strength = $strength + (iconv_strlen($password, 'UTF-8') - $upp) * 2;
            }
            if(ctype_lower(preg_replace('/[A-Z, А-ЯЁ, 0-9, ^\d]/', '', $password)))
            {
                $low = iconv_strlen(preg_replace('/[A-Z, А-ЯЁ, 0-9, ^\d]/', '', $password)); // 4) кол-во прописных букв
                $strength += (iconv_strlen($password, 'UTF-8') - $low)* 2;
            }
        }
        return $strength;
    }   
    
    function calcStrengthForAlnum($password) 
    {
        $strength = 0;
        if (ctype_alpha($password))
        {
            $strength -= iconv_strlen($password, 'UTF-8'); //если все буквы 
        }
        if (ctype_digit($password))
        {
            $strength -= iconv_strlen($password, 'UTF-8'); // если все цифры
        }
        return $strength;
    }
    
    function calcStrengthForRepeat($password)
    {
        $strength = 0;
        $repeatPass = $password;    
        for($i = 0; $i < strlen($password) - 1; $i++)
        {
            $repeatChar = substr_count($repeatPass, $password[$i]); //считаем кол-во вхождений каждого символа
            if($repeatChar >1)
            {
                $strength += $repeatChar;
                $repeatPass = str_replace($password[$i], '', $repeatPass); //удаляем из копии пароля проверенный символ 
            }   
        }    
        return $strength;
    }