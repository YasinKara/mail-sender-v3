<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Role::count() > 0) {
            return;
        }
        Role::insert([
            [
                'name' => 'Super Admin',
                'description' => 'Tüm erişim yetkilerine sahip yönetici rolü.',
                'is_erasable' => false,
                'is_editable' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'description' => 'Bir çok erişim yetkisine sahip yönetici rolü.',
                'is_erasable' => false,
                'is_editable' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Takım Lideri',
                'description' => 'Birden fazla Çağrı Merkezi Temsilcisini yönetebilen kullanıcı rolü.',
                'is_erasable' => false,
                'is_editable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Back Office',
                'description' => 'Back Office işlemlerini yapmaya yetkili rol.',
                'is_erasable' => true,
                'is_editable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Avukat',
                'description' => 'Siparişlerdeki yorumları görüntüleyebilme ve işleme alma yetkisine sahip kullanıcı rolü.',
                'is_erasable' => true,
                'is_editable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Muhasebe',
                'description' => 'Siparişlere fatura yükleme yetkisine sahip kullanıcı rolü.',
                'is_erasable' => true,
                'is_editable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
