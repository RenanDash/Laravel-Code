<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomaController extends Controller
{
    public function soma(int $a1, int $a2)
    {
        // echo "a soma de $a1 + $a2 eh"  . ($a1 + $a2);
        // return view('site/soma', ['x' => $a1, 'y' => $a2]);
        return view('site/soma', compact('a1', 'a2'));
    }
}
