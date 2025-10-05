<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Multilanghero;

class multilanguage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Multilanghero::create([
            'title' => [
                'en' => 'Sustainable Energy Solutions',
                'id' => 'Solusi Energi Bersih dan Efisien bersama kami',
            ],
            'content' => [
                'en' => 'Through Compressed Natural Gas (CNG) technology, we deliver clean energy that is safe, efficient, and environmentally friendly to support Indonesia’s energy needs.',
                'id' => 'Melalui teknologi Compressed Natural Gas (CNG), kami menghadirkan energi bersih yang aman, efisien, dan ramah lingkungan untuk mendukung kebutuhan energi Indonesia.'
            ]
        ]);
    }
}
