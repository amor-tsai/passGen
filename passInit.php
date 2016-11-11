<?php
/**
 * v0.1
 */
function generatePasswd($inputPasswdLength)
{
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

$inputPasswdLength = 16;
if (isset($argv[1])) $inputPasswdLength = intval($argv[1]);
elseif (isset($_GET['len'])) $inputPasswdLength = intval($_GET['len']);

$inputPasswdLength = $inputPasswdLength > 1 ? $inputPasswdLength : 16;
echo generatePasswd($inputPasswdLength);