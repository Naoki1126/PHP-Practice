<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __invoke(){
        return <<<EOF

    <html>
    <head>
    <title>Single Action Test</title>
    <style>
    body { font-size: 16pt; color: #999; }
    h1{ font-size: 30px; text-align: right; color: #eee;
        margin: -15px 0 0 0;}
    </style>
    </head>
    <body>
        <h1>Single Action</h1>
        <p>This action is Single Action Controller action</p>
    </body>
    </html>
    EOF;
    }
}
