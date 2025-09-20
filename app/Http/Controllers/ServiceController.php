<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            ['title' => 'Mother Station (CNG Station)', 'image' => asset('assets/layanan/l1.png')],
            ['title' => 'CNG Supply & Distribution', 'image' => asset('assets/layanan/l2.png')],
            ['title' => 'Chub CNG Manufacture', 'image' => asset('assets/layanan/l3.png')],
            ['title' => 'Consultant Energy', 'image' => asset('assets/layanan/l4.png')],
            ['title' => 'Pipeline Installation', 'image' => asset('assets/layanan/l5.png')],
            ['title' => 'Pressure Reducing System', 'image' => asset('assets/layanan/l6.png')],
            ['title' => 'Metering System', 'image' => asset('assets/layanan/l7.png')],
            ['title' => 'Metering Regulating Station', 'image' => asset('assets/layanan/l8.png')],
        ];

        return view('landing_page.service.index', compact('services'));
    }
}
