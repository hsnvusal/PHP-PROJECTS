<?php
class Helper
{
    static function  Yonlendir($url,$sure = 0)
    {
        if ($sure!=0 )
        {
            header("Refresh: $sure; url = $url");
        }
        else
        {
            header("Location: $url");
        }
    }
}