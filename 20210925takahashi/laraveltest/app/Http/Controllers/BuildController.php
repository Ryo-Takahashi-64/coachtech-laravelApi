<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index($num = 0)
    {
        $item = [
            'num' => $num,
        ];
        return view('build',$item);
    }
}
