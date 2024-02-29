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
         //
       
        DB::table('products')->insert([
            [
                'name'=>'Sony',
            'price'=> '100000',
            'category'=>'TV',
            'description'=>'A SmartTV from Sony',
            'gallery'=>'https://m.media-amazon.com/images/I/915+sXcUY+L._AC_UF1000,1000_QL80_.jpg',
            ],
            [
            'name'=>'Samsung Smart TV',
            'price'=> '65000',
            'category'=>'TV',
            'description'=>'A SmartTV from Samsung',
            'gallery'=>'https://m.media-amazon.com/images/I/71RxCmvnrbL._AC_UF1000,1000_QL80_.jpg',
            ],
            [
            'name'=>'OnePlus',
            'price'=> '25000',
            'category'=>'Tv',
            'description'=>'A SmartTV from Oneplus',
            'gallery'=>'https://m.media-amazon.com/images/I/41WE9ZGEC4L._SX300_SY300_QL70_FMwebp_.jpg',
            ],
        ]);
    }
}
