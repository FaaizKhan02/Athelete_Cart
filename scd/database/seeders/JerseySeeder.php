<?php

namespace Database\Seeders;

use App\Models\Jersey;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JerseySeeder extends Seeder
{
    public function run(): void
    {
        $jerseys = [
            // Pakistan Cricket Jerseys
            [
                'name' => 'Pakistan ODI Green Jersey 2023',
                'team' => 'Pakistan',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'green',
                'price' => 3499.99,
                'image_url' => 'https://www.dhresource.com/webp/m/0x0s/f2-albu-g18-M00-CF-19-rBVaIV3T5feAAJf-AAKn7T2bfzc226.jpg/pakistan-cricket-jersey-2023-official-pakistan.jpg',
                'description' => 'Official Pakistan ODI cricket jersey 2023 edition with star and crescent design. Moisture-wicking fabric.',
                'stock_quantity' => 45,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pakistan Test Jersey White',
                'team' => 'Pakistan',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'white',
                'price' => 2999.99,
                'image_url' => 'https://cricketstore.pk/wp-content/uploads/2023/07/Pakistan-2023-ICC-World-Cup-Jersey-1.jpg',
                'description' => 'Pakistan test cricket jersey pure white with green accents. Breathable fabric.',
                'stock_quantity' => 30,
                'material' => 'Cotton-Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pakistan T20 Black Jersey',
                'team' => 'Pakistan',
                'sport' => 'cricket',
                'size' => 'XL',
                'color' => 'black',
                'price' => 3799.99,
                'image_url' => 'https://i.pinimg.com/originals/a0/48/94/a0489447e5b9b50bca13c2068a427309.jpg',
                'description' => 'Limited edition Pakistan T20 black jersey with neon green highlights.',
                'stock_quantity' => 15,
                'material' => 'Performance Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // India Cricket Jerseys
            [
                'name' => 'India Blue Jersey 2023 World Cup',
                'team' => 'India',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'blue',
                'price' => 3999.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71eXWcqYYWL.jpg',
                'description' => 'Official India cricket jersey for ICC World Cup 2023. Orange and blue pattern.',
                'stock_quantity' => 50,
                'material' => 'Nike Dri-FIT',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'India Orange Alternate Jersey',
                'team' => 'India',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'orange',
                'price' => 3599.99,
                'image_url' => 'https://static.toiimg.com/thumb/msid-70989918,width-400,resizemode-4/70989918.jpg',
                'description' => 'India alternate orange jersey with navy blue accents.',
                'stock_quantity' => 25,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'India Test Jersey White',
                'team' => 'India',
                'sport' => 'cricket',
                'size' => 'XL',
                'color' => 'white',
                'price' => 2899.99,
                'image_url' => 'https://www.sportsuncle.com/image/catalog/cricket-jerseys/India/india-cricket-jersey-2022-23.jpg',
                'description' => 'Classic white test cricket jersey with BCCI logo.',
                'stock_quantity' => 40,
                'material' => 'Cotton Blend',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Australia Cricket Jerseys
            [
                'name' => 'Australia Yellow ODI Jersey',
                'team' => 'Australia',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'yellow',
                'price' => 4199.99,
                'image_url' => 'https://m.media-amazon.com/images/I/61oFS2IPHzL.jpg',
                'description' => 'Canary yellow Australian ODI jersey with green accents.',
                'stock_quantity' => 35,
                'material' => 'Asics Performance',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Australia Test Jersey Baggy Green',
                'team' => 'Australia',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'cream',
                'price' => 3299.99,
                'image_url' => 'https://cricketstore.net/cdn/shop/products/ASICS-Australia-Mens-Test-Match-Jersey-White-Green.jpg',
                'description' => 'Traditional Australian test match jersey.',
                'stock_quantity' => 20,
                'material' => 'Premium Cotton',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Australia T20 Jersey',
                'team' => 'Australia',
                'sport' => 'cricket',
                'size' => 'XL',
                'color' => 'dark green',
                'price' => 3899.99,
                'image_url' => 'https://m.media-amazon.com/images/I/61oOk1pPJ8L.jpg',
                'description' => 'Australian T20 dark green jersey with yellow highlights.',
                'stock_quantity' => 0,
                'material' => 'Polyester',
                'in_stock' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // England Cricket Jerseys
            [
                'name' => 'England Blue ODI Jersey',
                'team' => 'England',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'blue',
                'price' => 4499.99,
                'image_url' => 'https://www.cricketstoreonline.com/wp-content/uploads/2022/01/England-Cricket-2022-Mens-Home-Odi-Shirt-By-New-Balance.jpg',
                'description' => 'England ODI jersey with red and blue stripes.',
                'stock_quantity' => 28,
                'material' => 'New Balance Dry',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'England Test Jersey',
                'team' => 'England',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'white',
                'price' => 3699.99,
                'image_url' => 'https://cdn.shopify.com/s/files/1/0566/1339/8958/products/new-balance-england-test-shirt-white-2020-2021-315921.jpg',
                'description' => 'England cricket test match jersey with three lions crest.',
                'stock_quantity' => 18,
                'material' => 'Cotton-Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'England T20 Red Jersey',
                'team' => 'England',
                'sport' => 'cricket',
                'size' => 'XL',
                'color' => 'red',
                'price' => 4099.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71l8mK0W1tL.jpg',
                'description' => 'England T20 red alternate jersey.',
                'stock_quantity' => 12,
                'material' => 'Performance Fabric',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // South Africa Cricket Jerseys
            [
                'name' => 'South Africa Green Jersey',
                'team' => 'South Africa',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'green',
                'price' => 3799.99,
                'image_url' => 'https://cricketstore.net/cdn/shop/products/New-Balance-South-Africa-Mens-Replica-Odi-Shirt-Green-2021-2022_1024x1024.jpg',
                'description' => 'South African Proteas green jersey with yellow accents.',
                'stock_quantity' => 22,
                'material' => 'New Balance',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'South Africa Pink Jersey',
                'team' => 'South Africa',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'pink',
                'price' => 4299.99,
                'image_url' => 'https://i0.wp.com/cricketaddictor.com/wp-content/uploads/2023/03/South-Africa-Pink-day-jersey.jpg',
                'description' => 'Limited edition pink jersey for breast cancer awareness.',
                'stock_quantity' => 8,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // New Zealand Cricket Jerseys
            [
                'name' => 'New Zealand Black Jersey',
                'team' => 'New Zealand',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'black',
                'price' => 3999.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71a4UgmZ-kL.jpg',
                'description' => 'New Zealand Black Caps ODI jersey with silver fern.',
                'stock_quantity' => 32,
                'material' => 'Castore Performance',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'New Zealand Test Jersey',
                'team' => 'New Zealand',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'white',
                'price' => 3299.99,
                'image_url' => 'https://www.cricketstoreonline.com/wp-content/uploads/2020/11/New-Zealand-Cricket-Mens-Home-Test-Shirt-By-BlkV-2020.jpg',
                'description' => 'New Zealand test cricket jersey.',
                'stock_quantity' => 20,
                'material' => 'Cotton Blend',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // West Indies Cricket Jerseys
            [
                'name' => 'West Indies Maroon Jersey',
                'team' => 'West Indies',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'maroon',
                'price' => 3599.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71Z-sN78-4L.jpg',
                'description' => 'West Indies maroon jersey with golden lion logo.',
                'stock_quantity' => 25,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'West Indies T20 Jersey',
                'team' => 'West Indies',
                'sport' => 'cricket',
                'size' => 'XL',
                'color' => 'yellow',
                'price' => 3799.99,
                'image_url' => 'https://www.kitking.co.uk/wp-content/uploads/2020/03/Windies-T20-Jersey.jpg',
                'description' => 'West Indies bright yellow T20 jersey.',
                'stock_quantity' => 15,
                'material' => 'Performance Fabric',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Sri Lanka Cricket Jerseys
            [
                'name' => 'Sri Lanka Blue Jersey',
                'team' => 'Sri Lanka',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'blue',
                'price' => 3199.99,
                'image_url' => 'https://cricketstore.net/cdn/shop/products/Diadora-Sri-Lanka-Cricket-Mens-Replica-Odi-Shirt-Blue-2021-2022.jpg',
                'description' => 'Sri Lanka cricket jersey with golden lion logo.',
                'stock_quantity' => 30,
                'material' => 'Diadora',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sri Lanka Test Jersey',
                'team' => 'Sri Lanka',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'white',
                'price' => 2799.99,
                'image_url' => 'https://www.cricketdirect.co.uk/media/catalog/product/cache/c687e1115f3d48d01d1b1f8d8e6af5a3/1/0/100054.jpg',
                'description' => 'Sri Lanka test match white jersey.',
                'stock_quantity' => 22,
                'material' => 'Cotton-Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Bangladesh Cricket Jerseys
            [
                'name' => 'Bangladesh Green-Red Jersey',
                'team' => 'Bangladesh',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'green',
                'price' => 2999.99,
                'image_url' => 'https://m.media-amazon.com/images/I/61iVw8WNJAL.jpg',
                'description' => 'Bangladesh cricket jersey with green and red pattern.',
                'stock_quantity' => 40,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bangladesh T20 Jersey',
                'team' => 'Bangladesh',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'red',
                'price' => 3299.99,
                'image_url' => 'https://static-01.daraz.com.bd/p/88ca6135f39016796d54a9c7ef27f5d3.jpg',
                'description' => 'Bangladesh T20 red alternate jersey.',
                'stock_quantity' => 0,
                'material' => 'Performance Fabric',
                'in_stock' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Afghanistan Cricket Jerseys
            [
                'name' => 'Afghanistan Blue Jersey',
                'team' => 'Afghanistan',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'blue',
                'price' => 2899.99,
                'image_url' => 'https://m.media-amazon.com/images/I/61R9Qpuj+hL.jpg',
                'description' => 'Afghanistan cricket team blue jersey.',
                'stock_quantity' => 18,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Club/League Jerseys
            [
                'name' => 'PSL Karachi Kings Jersey',
                'team' => 'Karachi Kings',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'blue',
                'price' => 2499.99,
                'image_url' => 'https://static-01.daraz.pk/p/a9cdfd87e4e6270719b04334584bdf20.jpg',
                'description' => 'Pakistan Super League Karachi Kings jersey.',
                'stock_quantity' => 50,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PSL Lahore Qalandars Jersey',
                'team' => 'Lahore Qalandars',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'red',
                'price' => 2499.99,
                'image_url' => 'https://m.media-amazon.com/images/I/61Yzzt7yM1L.jpg',
                'description' => 'Lahore Qalandars PSL jersey with scorpion logo.',
                'stock_quantity' => 45,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'IPL Mumbai Indians Jersey',
                'team' => 'Mumbai Indians',
                'sport' => 'cricket',
                'size' => 'XL',
                'color' => 'blue',
                'price' => 4599.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71ANt+uVr+L.jpg',
                'description' => 'Mumbai Indians IPL jersey with gold accents.',
                'stock_quantity' => 35,
                'material' => 'Premium Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'IPL Chennai Super Kings Jersey',
                'team' => 'Chennai Super Kings',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'yellow',
                'price' => 4399.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71QBqnNNAfL.jpg',
                'description' => 'CSK yellow jersey with lion logo.',
                'stock_quantity' => 30,
                'material' => 'Performance Fabric',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Big Bash Sydney Sixers Jersey',
                'team' => 'Sydney Sixers',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'pink',
                'price' => 3899.99,
                'image_url' => 'https://cricketstore.net/cdn/shop/products/Sydney-Sixers-2022-23-Big-Bash-League-Replica-Jersey.jpg',
                'description' => 'Sydney Sixers BBL pink jersey.',
                'stock_quantity' => 20,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Retro/Vintage Jerseys
            [
                'name' => 'Pakistan 1992 World Cup Jersey',
                'team' => 'Pakistan',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'green',
                'price' => 4999.99,
                'image_url' => 'https://i.ebayimg.com/images/g/yPIAAOSwV~peuGh~/s-l1600.jpg',
                'description' => 'Retro Pakistan 1992 World Cup winning jersey.',
                'stock_quantity' => 10,
                'material' => 'Cotton',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'India 1983 World Cup Jersey',
                'team' => 'India',
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'light blue',
                'price' => 4799.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71IChl7A3PL.jpg',
                'description' => 'Vintage India 1983 World Cup jersey.',
                'stock_quantity' => 8,
                'material' => 'Cotton',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'West Indies 1979 Vintage Jersey',
                'team' => 'West Indies',
                'sport' => 'cricket',
                'size' => 'XL',
                'color' => 'maroon',
                'price' => 4599.99,
                'image_url' => 'https://www.classicshirts.com/wp-content/uploads/2020/05/West-Indies-1979-Shirt.jpg',
                'description' => 'Classic West Indies 1979 World Cup jersey.',
                'stock_quantity' => 5,
                'material' => 'Cotton',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Training/Gym Jerseys
            [
                'name' => 'Cricket Training Jersey Black',
                'team' => null,
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'black',
                'price' => 1599.99,
                'image_url' => 'https://m.media-amazon.com/images/I/61Jewe-eUiL.jpg',
                'description' => 'Generic cricket training jersey for practice sessions.',
                'stock_quantity' => 100,
                'material' => 'Dri-FIT',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cricket Gym Jersey White',
                'team' => null,
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'white',
                'price' => 1399.99,
                'image_url' => 'https://static-01.daraz.pk/p/1f09c21b89dbbf8644a1eeaf6df8e8e2.jpg',
                'description' => 'Simple white cricket gym jersey.',
                'stock_quantity' => 80,
                'material' => 'Cotton Blend',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Youth/Kids Jerseys
            [
                'name' => 'Kids Pakistan Jersey (Size S)',
                'team' => 'Pakistan',
                'sport' => 'cricket',
                'size' => 'S',
                'color' => 'green',
                'price' => 1999.99,
                'image_url' => 'https://m.media-amazon.com/images/I/71fkJr6KWDL.jpg',
                'description' => 'Pakistan cricket jersey for kids.',
                'stock_quantity' => 60,
                'material' => 'Soft Cotton',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kids India Jersey (Size XS)',
                'team' => 'India',
                'sport' => 'cricket',
                'size' => 'XS',
                'color' => 'blue',
                'price' => 1899.99,
                'image_url' => 'https://m.media-amazon.com/images/I/61sL8h2i-dL.jpg',
                'description' => 'India cricket jersey for young fans.',
                'stock_quantity' => 55,
                'material' => 'Comfort Fabric',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Special Edition Jerseys
            [
                'name' => 'Pakistan Armed Forces Tribute Jersey',
                'team' => 'Pakistan',
                'sport' => 'cricket',
                'size' => 'L',
                'color' => 'camouflage',
                'price' => 4299.99,
                'image_url' => 'https://images.jansports.pk/img/2020/06/12/pakistan-army-cricket-jersey-design-jersey-2-1591954866.jpg',
                'description' => 'Special edition Pakistan armed forces tribute jersey.',
                'stock_quantity' => 25,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rainbow Pride Cricket Jersey',
                'team' => null,
                'sport' => 'cricket',
                'size' => 'M',
                'color' => 'rainbow',
                'price' => 2799.99,
                'image_url' => 'https://cdn.shopify.com/s/files/1/0024/3728/3897/products/rainbow-jersey-1_1200x1200.jpg',
                'description' => 'Rainbow pride cricket jersey for inclusivity.',
                'stock_quantity' => 40,
                'material' => 'Polyester',
                'in_stock' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        // Insert all jerseys
        DB::table('jerseys')->insert($jerseys);

        // Output success message
        $this->command->info(count($jerseys) . ' jerseys seeded successfully!');
    }
}