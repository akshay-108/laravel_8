<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'EVEDA Synthetic Leather Womens hand bag Satchel Ladies Purse',
                'price' => '1199',
                'category' => 'ladies_purse',
                'gallery' => 'https://m.media-amazon.com/images/I/61iTPCusMjS._SY625_.jpg',
                'description' => 'Beautiful textured leatherette, polished & Attractive Design Bag., Eco-friendly, Durable, Lightweight, Flexible And Water-Resistant Material Helps To Keep The Interior Dry'
            ],
            [
                'name' => 'Luxurious Soft Leather Womens Crossbody Bag Aura',
                'price' => '6400',
                'category' => 'ladies_purse',
                'gallery' => 'https://shoesfield.com/cdn/shop/files/luxurious-soft-leather-womens-crossbody-bag-aura-luxurious-soft-leather-womens-crossbody-bag-aura-shoes-field-black-568700.webp?v=1745856320&width=713',
                'description' => 'Luxurious Soft Leather Womens Crossbody Bag Aura Elevate your style with the Luxurious Soft Leather Womens Crossbody Bag Aura, a handbag designed for the modern woman who seeks the perfect blend of elegance and practicality.'
            ],
            [
                'name' => 'Luxurious Soft Leather Womens Crossbody Bag Aura',
                'price' => '5000',
                'category' => 'ladies_purse',
                'gallery' => 'https://shoesfield.com/cdn/shop/files/luxurious-soft-leather-womens-crossbody-bag-aura-luxurious-soft-leather-womens-crossbody-bag-aura-shoes-field-tea-green-267723.webp?v=1745856323&width=713',
                'description' => 'Luxurious Soft Leather Womens Crossbody Bag Aura Elevate your style with the Luxurious Soft Leather Womens Crossbody Bag Aura, a handbag designed for the modern woman who seeks the perfect blend of elegance and practicality.'
            ],
            [
                'name' => 'EXOTIC Studded hand bag for women',
                'price' => '1281',
                'category' => 'ladies_purse',
                'gallery' => 'https://m.media-amazon.com/images/I/61NhaCR1UDL._SY625_.jpg',
                'description' => 'Beautiful textured leatherette, polished & Attractive Design Bag., Eco-friendly, Durable, Lightweight, Flexible And Water-Resistant Material Helps To Keep The Interior Dry'
            ],
        ]);
    }
}
