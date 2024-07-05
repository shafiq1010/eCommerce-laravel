<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name'=>'LG Mobile',
            'price'=>'200',
            'category'=>('Mobile'),
             'description'=>('A smartphoe with alot of features'),
             'gallary'=>('https://www.whatmobile.com.pk/admin/images/Infinix/InfinixNote40-s.jpg')
        ]);
    }
}
