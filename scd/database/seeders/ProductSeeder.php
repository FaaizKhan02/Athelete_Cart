<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            [
                'name' => 'CA Cricket Bat',
                'brand' => 'English Willow',
                'description' => 'Premium English willow bat with perfect balance and powerful stroke play capability.',
                'price' => 72999,
                'image' => 'https://rsmcricketsupplies.com/cdn/shop/files/4be32bda-c9bb-411d-bc97-6a857abfc887_3113eda1-b22c-4c20-8256-d75bcf925018.jpg?v=1756048296',
            ],

            [
                'name' => 'Kookaburra Ball',
                'brand' => 'Tournament Grade',
                'description' => 'Professional grade cricket ball with excellent seam and swing characteristics. Used in international matches with superior durability.',
                'price' => 1899,
                'image' => 'https://i.dawn.com/primary/2016/10/57feedde315c8.jpg',
            ],

            [
                'name' => 'CA Gloves',
                'brand' => 'Professional Series',
                'description' => 'High-quality batting gloves with superior grip and palm protection. Ventilated design for comfort during long innings.',
                'price' => 19499,
                'image' => 'https://sportsknightaustralia.com.au/cdn/shop/files/IMG_20250602_221731.jpg?v=1748987606&width=1214',
            ],

            [
                'name' => 'SS Helmet',
                'brand' => 'Safety Certified',
                'description' => 'Lightweight helmet with high-impact resistance and comfortable fit. Meets international safety standards with enhanced ventilation.',
                'price' => 51799,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNSw_-EUKXCn72DqrVaDczUNIWDjLWbS8znDlKQZAyzgW7VigJL_tDhStUaIg7kDRBQYo&usqp=CAU',
            ],

            [
                'name' => 'Leg Pads',
                'brand' => 'SG Professional',
                'description' => 'Professional leg guards with maximum protection and lightweight design. Ideal for long innings with comfortable straps.',
                'price' => 20199,
                'image' => 'https://5.imimg.com/data5/SELLER/Default/2022/2/BV/UU/WA/14580777/test-match-cricket-leg-guard2-500x500.jpg',
            ],

            [
                'name' => 'Cricket Shoes',
                'brand' => 'Adidas Performance',
                'description' => 'Spiked cricket shoes with excellent grip and ankle support for all conditions. Lightweight and durable with breathable material.',
                'price' => 20999,
                'image' => 'https://www.alisports.pk/cdn/shop/files/1428D8F7-FCB5-401E-BD69-37511E76C73B.png?v=1751846739&width=1445',
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
