<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'SAMSUNG Galaxy S21 ',
                'price' => '49,999',
                'category' => 'Mobile',
                'gallery' => 'https://rukminim2.flixcart.com/image/416/416/xif0q/mobile/n/s/k/-original-imagt46gsfdvgeav.jpeg?q=70',
                'description' => 'SAMSUNG Galaxy S21 FE 5G (Lavender, 256 GB)  (8 GB RAM)',
            ],
            [
                'name' => 'ASUS Vivobook 15 ',
                'price' => '38,999',
                'category' => 'Laptop',
                'gallery' => 'https://rukminim2.flixcart.com/image/416/416/xif0q/computer/q/e/z/-original-imagpxgqesgrthks.jpeg?q=70',
                'description' => 'The outstanding Asus VivoBook 15 laptop, created to simplify your workday and improve performance, offers fantastic e',
            ],
            [
                'name' => 'DELL Inspiron',
                'price' => '35,00',
                'category' => 'Laptop',
                'gallery' => 'https://rukminim2.flixcart.com/image/416/416/xif0q/computer/u/m/k/-original-imagzyfzhzcw8wvp.jpeg?q=70',
                'description' => 'DELL Inspiron Core i3 11th Gen 1115G4 - (8 GB/512 GB SSD/Windows 11 Home) Inspiron 3511 Thin and Light Laptop  (38 cm, Carbon Black, 1.8 kg, With MS Office)',
            ],
            [
                'name' => 'SAMSUNG Crystal 4K',
                'price' => '32,500',
                'category' => 'TV',
                'gallery' => 'https://rukminim2.flixcart.com/image/416/416/xif0q/television/n/d/e/ua43cue60aklxl-samsung-original-imagp7vgwf7emfqa.jpeg?q=70',
                'description' => 'SAMSUNG Crystal 4K iSmart Series 108 cm (43 inch) Ultra HD (4K) LED Smart Tizen TV 2023 Edition with Black (2023 Model)  (UA43CUE60AKLXL)',
            ],
            [
                'name' => 'SAMSUNG 363 L Refrigerator',
                'price' => '38,999',
                'category' => 'Refrigerator',
                'gallery' => 'https://rukminim2.flixcart.com/image/416/416/xif0q/refrigerator-new/d/w/l/-original-imagm7rmvuhs4gzh.jpeg?q=70',
                'description' => 'SAMSUNG 363 L Frost Free Double Door 1 Star Convertible Refrigerator with Digital Inverter  (Refined Inox, RT39C5511S9/HL)',
            ],
            [
                'name' => 'LG 7 kg Washing Machine',
                'price' => '42,999',
                'category' => 'Washing Machine',
                'gallery' => 'https://rukminim2.flixcart.com/image/416/416/xif0q/washing-machine-new/y/9/s/-original-imagsg9zuhvecfjr.jpeg?q=70',
                'description' => 'LG 7 kg Fully Automatic Front Load Washing Machine with In-built Heater Black, Grey  (FHM1207SDM)',
            ]
        ]);
    }
}
