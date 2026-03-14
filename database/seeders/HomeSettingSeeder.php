<?php

namespace Database\Seeders;

use App\Models\HomeSetting;
use Illuminate\Database\Seeder;

class HomeSettingSeeder extends Seeder
{
    public function run(): void
    {
        HomeSetting::firstOrCreate(
            ['id' => 1],
            [
                'hero_title'             => '153 Kreatif',
                'hero_subtitle'          => 'Integrated Event Solutions & Creative Production',
                'hero_description'       => 'Solusi lengkap untuk event, exhibition, dan produksi kreatif yang memadukan strategi dengan eksekusi.',
                'hero_button_text'       => 'View Portfolio',
                'hero_button_link'       => '/portfolio',
                'hero_background_image'  => null,
                'about_title'            => 'Tentang Kami',
                'about_description'      => '153 Kreatif adalah perusahaan manajemen acara dan produksi kreatif yang menyediakan solusi pemasaran terpadu melalui event, exhibition, dan produksi visual. Kami membantu brand menghubungkan audiens dengan pengalaman yang memorable dan terukur.',
                'about_image'            => null,
            ]
        );
    }
}
