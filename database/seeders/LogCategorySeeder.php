<?php

namespace Database\Seeders;

use App\Models\LogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Teklif E-Postası',
            'Sipariş Oluşturuldu',
            'Avukat İşlemine Alındı',
            'Yorum Silindi',
            'Yorum Reddedildi',
            'Fatura Yüklendi',
            'Müşteri Arandı',
            'Fatura E-Postası Gönderildi',
            'Ödeme Yapıldı',
            'Sipariş Tamamlandı',
            'Uyarı E-Postası Gönderildi',
            'Müşteri Güncellendi',
            'Çağrı Kaydı',
            'Not Ekleme',
        ];

        foreach ($categories as $category) {
            LogCategory::create([
                'name' => $category,
            ]);
        }
    }
}
