<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Multilanghero;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Multilanghero::create([
        //     'title' => [
        //         'en' => 'Sustainable Energy Solutions',
        //         'id' => 'Solusi Energi Berkelanjutan',
        //     ],
        //     'content' => [
        //         'en' => 'Through Compressed Natural Gas Container (CNGC) technology, we deliver clean energy that is safe, efficient, and environmentally friendly to support Indonesia’s energy needs.',
        //         'id' => 'Melalui teknologi Compressed Natural Gas Container (CNGC), kami menghadirkan energi bersih yang aman, efisien, dan ramah lingkungan untuk mendukung kebutuhan energi Indonesia.'
        //     ]
        // ]);
    }
}
