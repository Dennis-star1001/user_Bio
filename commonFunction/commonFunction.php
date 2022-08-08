<?php
class commonFunc
{


    public static function redirect($url, $type, $msg)
    {
        header("Location:$url?$type=$msg");
        exit;
    }


    public static function checkForEmptyInput($params = [])
    {
        for ($i = 0; $i < sizeof($params); $i++) {
            if (!isset($params) or empty($params)) {
                return true;
            }
        }
        return false;
    }
}
