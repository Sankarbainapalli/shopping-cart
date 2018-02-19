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
        //
        $product = new \App\Product([

        	'imgpath' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855669.jpg',
        	'title' => 'movie',
        	'description' => 'this is good movie',
        	'prices' => 24

        ]);
        $product->save();

         $product = new \App\Product([

        	'imgpath' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855669.jpg',
        	'title' => 'movie',
        	'description' => 'this is good movie',
        	'prices' => 20

        ]);
        $product->save();
         $product = new \App\Product([

        	'imgpath' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855669.jpg',
        	'title' => 'movie',
        	'description' => 'this is good movie',
        	'prices' => 22

        ]);
        $product->save();
         $product = new \App\Product([

        	'imgpath' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855669.jpg',
        	'title' => 'movie',
        	'description' => 'this is good movie',
        	'prices' => 23

        ]);
        $product->save();
    }
}
