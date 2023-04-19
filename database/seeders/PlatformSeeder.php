<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Platform::count() > 0) {
            return;
        }

        Platform::insert([
            [
                'name' => 'Sternloscher.de',
                'description' => 'Sternlsocher.de sitesine ait platform bilgileri',
                'directory_name' => 'sternloscher-de',
                'logo' => 'sternloscher-de-logo.png',
            ],
            [
                'name' => 'Mobile',
                'description' => 'Mobile',
            ],
        ]);
    }
}
