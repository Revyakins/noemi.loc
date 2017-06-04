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
            'imagePath' => 'https://my-hit.org/storage/1231405_500x800x250.jpg',
            'title' => 'Harry Potter',
            'description' => 'Захватывающая книга',
            'price'=> 12
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.livelib.ru/boocover/1000590055/o/d356/Dzhon_R._R._Tolkin__Hobbit.jpeg',
            'title' => 'John Tolkien “The Hobbit”',
            'description' => 'Nice book',
            'price'=> 15
        ]);

        $product->save();
    }
}
