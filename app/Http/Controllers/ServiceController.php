<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ServiceController extends Controller
{
    /**
     * Menampilkan semua layanan.
     */
    public function index()
    {
        $services = $this->getDummyServices();

        return view('landing_page.service.index', compact('services'));
    }

    /**
     * Menampilkan detail satu layanan.
     */
    public function show($id)
    {
        $allServices = $this->getDummyServices();

        $service = $allServices->firstWhere('id', $id);

        if (!$service) {
            return redirect()->route('services.index')->with('error', 'Layanan tidak ditemukan.');
        }

        return view('landing_page.service.detail', compact('service'));
    }

    /**
     * Cuma data dummy, lek wes konek database dihapus ae
     */
    private function getDummyServices(): Collection
    {
        $serviceData = [
            ['title' => 'Mother Station (CNG Station)', 'image' => 'assets/ms.png'],
            ['title' => 'CNG Supply & Distribution', 'image' => 'assets/layanan/l2.png'],
            ['title' => 'Chub CNG Manufacture', 'image' => 'assets/layanan/l3.png'],
            ['title' => 'Consultant Energy', 'image' => 'assets/layanan/l4.png'],
            ['title' => 'Pipeline Installation', 'image' => 'assets/layanan/l5.png'],
            ['title' => 'Pressure Reducing System', 'image' => 'assets/layanan/l6.png'],
            ['title' => 'Metering System', 'image' => 'assets/layanan/l7.png'],
            ['title' => 'Metering Regulating Station', 'image' => 'assets/layanan/l8.png'],
        ];

        return collect($serviceData)->map(function ($item, $key) {
            return (object) [
                'id' => $key + 1,
                'title' => $item['title'],
                'image' => $item['image'],
                'description' => 'Ini adalah deskripsi lengkap untuk ' . $item['title'] . '. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ];
        });
    }
}
