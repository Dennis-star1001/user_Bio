<?php
class commonFunc
{


    public static function redirect($url, $type, $msg)
    {
        header("Location:$url?$type=$msg");
        exit;
    }


    // public static function checkForEmptyInput($params = [])
    // {
    //     for ($i = 0; $i < sizeof($params); $i++) {
    //         if (!isset($params[$i]) or empty($params[$i])) {
    //             return true;
    //         }
    //     }
    //     return false;
    // }

    public static function checkEmptyInput($params = [])
    {
        for ($i = 0; $i < sizeof($params); $i++) {
            if (!isset($params[$i]) || empty($params[$i])) {
                return true;
            }
       
           
        }
        return false;   
    }
}
