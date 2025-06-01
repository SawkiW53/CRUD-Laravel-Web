<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'alamat' => 'Bengkulu',
            'phone' => '081292724798',
            'email' => 'rentalamanah@gmail.com',
            'footer_description' => 'sewa mobil terpercaya',
            'tentang_perusahaan' => 'membantu anda menyewa mobil impian',
            'sejarah_perusahaan' => 'Berdiri sejak tahun penjajahan',
        ]);
    }
}
