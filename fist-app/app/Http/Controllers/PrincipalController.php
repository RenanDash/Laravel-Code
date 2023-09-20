<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function Principal()
    {
        $fornecedores = null;
        return view('site.Principal', compact('fornecedores'));
    }
}
