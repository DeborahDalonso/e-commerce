<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://dummyjson.com/products')->json();


        foreach ($response['products'] as $product) {

            \App\Models\Product::create([
                'name' => $product['title'], 
                'price' => $product['price'], 
                'category' => $product['category']
            ]);
        }
    }
}
