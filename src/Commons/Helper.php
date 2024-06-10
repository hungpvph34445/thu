<?php

namespace Viet\HungPh\Commons;

// './src/Commons/Controller.php';
class Helper
{
    public static function debug($data)
    {
        echo '<pre>';
        print_r($data);

        die;
    }
}
