<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb(Request $request)
    {

        $level = 5100;
        $version = $request->input('version');
        return view('pb',[
            'version' => $version,
            'level' => $level
            ]);
    }
}
