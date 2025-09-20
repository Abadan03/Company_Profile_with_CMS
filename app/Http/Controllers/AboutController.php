<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index()
    {
        $legal = [
            ['name' => 'lp1', 'logo' => 'assets/legalitas/lp1.png'],
            ['name' => 'lp2', 'logo' => 'assets/legalitas/lp2.png'],
            ['name' => 'lp3', 'logo' => 'assets/legalitas/lp3.png'],
            ['name' => 'lp4', 'logo' => 'assets/legalitas/lp4.png'],
            ['name' => 'lp5', 'logo' => 'assets/legalitas/lp5.png'],
        ];
        return view('landing_page.about', compact('legal'));
    }
}
