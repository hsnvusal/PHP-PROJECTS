<?php

class mHelper
{
    static function postVariable($value)
    {
        if (isset($_POST[$value])) {
            return strip_tags($_POST[$value]);
        } else
        {
            return  "";
        }
    }

    static  function postIntegetVariable($value)
    {
        if (isset($_POST[$value]))
        {
            return intval($_POST[$value]);
        }
        else {
            return 0;
        }
    }
}