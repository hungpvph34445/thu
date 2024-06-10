<?php

namespace Viet\HungPh\Controllers\Client;

use eftec\bladeone\BladeOne;
use Viet\HungPh\Commons\Controller;

class HomeController extends  Controller
{
    public function index()
    {
        $templatePath = __DIR__.'/../../Views/Client';
        $compiledPath = __DIR__.'/../../Views/Compiles';
        $blade = new BladeOne($templatePath,$compiledPath);
        echo $blade->run('home');
    }
}
