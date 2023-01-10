<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'Camera',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 600,
            'discountPrice'=> 500,
            'stars'=> 5,
            'productImage' => 'productImages/camera.jpg',
        ]);

        Product::create([
            'name'=> 'Washing machine',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 1200,
            'discountPrice'=> 1200,
            'stars'=> 5,
            'productImage' => 'productImages/washingmachine.jpg',
        ]);

        Product::create([
            'name'=> 'Bike',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 800,
            'discountPrice'=> 750,
            'stars'=> 5,
            'productImage' => 'productImages/bike.jpg',
        ]);

        Product::create([
            'name'=> 'Smartphone',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 2600,
            'discountPrice'=> 2600,
            'stars'=> 5,
            'productImage' => 'productImages/smartphone.jpg'
        ]);

        Product::create([
            'name'=> 'Hair dryer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 300,
            'discountPrice'=> 300,
            'stars'=> 4,
            'productImage' => 'productImages/hairdryer.jpg'
        ]);

        Product::create([
            'name'=> 'Hard drive',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 500,
            'discountPrice'=> 4750,
            'stars'=> 4,
            'productImage' => 'productImages/harddrive.jpg'
        ]);

        \App\Models\User::factory(10)->create();
    }
}
