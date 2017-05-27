<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://wpc.21684.lambdacdn.net/8021684/cdn/media/catalog/product/cache/1/image/c96a280f94e22e3ee3823dd0a1a87606/2/0/2043581561.jpg',
            'title' => 'Judul',
            'description' => 'coba',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://wpc.21684.lambdacdn.net/8021684/cdn/media/catalog/product/cache/1/image/c96a280f94e22e3ee3823dd0a1a87606/2/0/2043581561.jpg',
            'title' => 'Judul',
            'description' => 'coba',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://wpc.21684.lambdacdn.net/8021684/cdn/media/catalog/product/cache/1/image/c96a280f94e22e3ee3823dd0a1a87606/2/0/2043581561.jpg',
            'title' => 'Judul',
            'description' => 'coba',
            'price' => 10
        ]);

        $product->save();

                 
        
    }
}
