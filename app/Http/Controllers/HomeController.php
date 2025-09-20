<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multilanghero;

class HomeController extends Controller
{
    public function index()
    {
        $clients = [
            ['name' => 'Bukaka', 'logo' => 'assets/client/bukaka.webp'],
            ['name' => 'SIS', 'logo' => 'assets/client/sis.webp'],
            ['name' => 'Pertani', 'logo' => 'assets/client/gaero.webp'],
            ['name' => 'Rekind', 'logo' => 'assets/client/rekind.webp'],
            ['name' => 'BISI', 'logo' => 'assets/client/bisi.webp'],
            ['name' => 'Bernofarm', 'logo' => 'assets/client/berno.webp'],
            ['name' => 'SKF', 'logo' => 'assets/client/skf.webp'],
            ['name' => 'Truba', 'logo' => 'assets/client/truba.webp'],
            ['name' => 'RDMP', 'logo' => 'assets/client/rdmp.webp'],
            ['name' => 'PJB', 'logo' => 'assets/client/pjb.webp'],
        ];

        // Multi language
        $hero = Multilanghero::first();
        // dd($hero);

        return view('landing_page.home', compact('clients', 'hero'));
    }
}
