<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            ['id' => 1,'title' => 'Mother Station (CNG Station)', 'image' => asset('assets/layanan/l1.png')],
            ['id' => 2,'title' => 'CNG Supply & Distribution', 'image' => asset('assets/layanan/l2.png')],
            ['id' => 3,'title' => 'Chub CNG Manufacture', 'image' => asset('assets/layanan/l3.png')],
            ['id' => 4,'title' => 'Consultant Energy', 'image' => asset('assets/layanan/l4.png')],
            ['id' => 5,'title' => 'Pipeline Installation', 'image' => asset('assets/layanan/l5.png')],
            ['id' => 6,'title' => 'Pressure Reducing System', 'image' => asset('assets/layanan/l6.png')],
            ['id' => 7,'title' => 'Metering System', 'image' => asset('assets/layanan/l7.png')],
            ['id' => 8,'title' => 'Metering Regulating Station', 'image' => asset('assets/layanan/l8.png')],
        ];

        return view('landing_page.service.index', compact('services'));
    }

    public function show($id)
    {
        $allServices = [
            ['id' => 1, 'title' => 'Mother Station (CNG Station)', 'description' => 'Deskripsi lengkap tentang Mother Station...'],
            ['id' => 2, 'title' => 'CNG Supply & Distribution', 'description' => 'Deskripsi lengkap tentang Supply & Distribution...'],
            ['id' => 3, 'title' => 'Chub CNG Manufacture', 'description' => 'Deskripsi lengkap tentang Chub CNG Manufacture...'],
        ];

        $service = collect($allServices)->firstWhere('id', $id);

        if (!$service) {
            return redirect()->route('service')->with('error', 'Service not found.');
        }

        return view('landing_page.service.detail');
    }
}
