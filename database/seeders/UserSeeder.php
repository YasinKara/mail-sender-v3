<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Seyit Mustafa Adem KANDEMİR',
            'username' => 'seyitmustafaademkk',
            'email' => 'seyitmustafaademkk@gmail.com',
            'password' => 'Pa$$w0rd!1871',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Süper Admin',
            'username' => 'super_admin',
            'email' => 'super@admin.com',
            'password' => 'Pa$$w0rd!1839',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Tester Agent',
            'username' => 'tester',
            'email' => 'tester@gmail.com',
            'password' => 'tester',
            'role' => 'agent',
            'signature_name' => 'Agent Agent',
            'signature_title' => 'Kundensupport',
            'signature_email' => 'tester@sternloscher.de',
            'signature_phone' => '+491783406105',
        ]);
    }
}
