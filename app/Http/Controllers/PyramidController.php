<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PyramidController extends Controller
{
    public function index()
    {
        return view('pyramid');
    }

public function generate(Request $request)
{
    $sym = $request->input('symbol');
    $n = $request->input('rows');

    $half = "";
    $full = "";

    // Half Pyramid
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $half .= $sym . " ";
        }
        $half .= "\n";
    }

    // Full Pyramid
    for ($i = $n; $i >= 1; $i--) {
        for ($space = 0; $space < $n - $i; $space++) {
            $full .= " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            $full .= $sym . " ";
        }
        $full .= "\n";
    }

    return view('pyramid', compact('half', 'full'));
}
}
