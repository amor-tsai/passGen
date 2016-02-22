<?php

function generatePasswd($inputPasswdLength)
{
    /**
     * v0.1
     */

//    $asciiList = array_merge(
//        range(40,43),range(48,59),range(61,91),range(97,123)
//    );
//
//    $keyList = array_rand($asciiList,$inputPasswdLength);
//
//    $str = "";
//    foreach($keyList as $key)
//    {
//        $str .= chr($asciiList[$key]);
//    }
//    return $str;
    $str = "";
    for ($i=0;$i<$inputPasswdLength;$i++)
    {
        switch(mt_rand(1,4))
        {
            case 1:
                $str .= chr(mt_rand(40,43));
                break;
            case 2:
                $str .= chr(mt_rand(48,59));
                break;
            case 3:
                $str .= chr(mt_rand(61,91));
                break;
            case 4:
                $str .= chr(mt_rand(97,123));
        }
    }
    return $str;
}

echo generatePasswd(16);