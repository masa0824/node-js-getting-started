<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    /*
    public function index() {
        return 'Hello-AAA';
    }
    */

    public function index()
    {
        return <<<EOF
zzz=HelloController
EOF;
    }

}
