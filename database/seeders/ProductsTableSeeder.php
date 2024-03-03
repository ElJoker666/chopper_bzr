<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Playera Nike',
            'slug' => 'playera-nike',
            'details' => 'Sin detalles',
            'price' => 200,
            'shipping_cost' => 30,
            'description' => 'Playera de color rojo/naranja, Talla s',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => '428686519_266794343175030_7031182954881412274_n.jpg'
        ]);

        Product::create([
            'name' => 'Playera Drip',
            'slug' => 'Playera-drip',
            'details' => 'Sin detalles',
            'price' => 200,
            'shipping_cost' => 30,
            'description' => 'Playera de color blanco, Talla m',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => '428701347_266794126508385_9116952674504481009_n.jpg'
        ]);

        Product::create([
            'name' => 'Playera Champion',
            'slug' => 'playera-champion',
            'details' => 'Sin detalles',
            'price' => 200,
            'shipping_cost' => 30,
            'description' => 'Playera de color negro, Talla m',
            'category_id' => 1,
            'brand_id' => 3,
            'image_path' => '429534834_266793486508449_4162665731945108480_n.jpg'
        ]);

        Product::create([
            'name' => 'Pantalon Levis',
            'slug' => 'pantalon-levis',
            'details' => 'Sin detalles',
            'price' => 200,
            'shipping_cost' => 30,
            'description' => 'Pantalon de color azul marido, Talla m',
            'category_id' => 2,
            'brand_id' => 3,
            'image_path' => '428672350_267468056440992_4931880206741150630_n.jpg'
        ]);

    }
}
