<?php

namespace Database\Seeders;

use App\Models\Listing;
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
            'name'=> 'aparat',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 600,
            'discountPrice'=> 500,
            'stars'=> 5,
        ]);

        Product::create([
            'name'=> 'pralka',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 1200,
            'discountPrice'=> 1200,
            'stars'=> 5,
        ]);

        Product::create([
            'name'=> 'rower',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 800,
            'discountPrice'=> 750,
            'stars'=> 5,
        ]);

        Product::create([
            'name'=> 'smartfon',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 2600,
            'discountPrice'=> 2600,
            'stars'=> 5,
        ]);

        Product::create([
            'name'=> 'suszarka',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 300,
            'discountPrice'=> 300,
            'stars'=> 4,
        ]);

        Product::create([
            'name'=> 'dysk twardy',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lacinia elit, id luctus magna. Integer id dui sapien. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc risus quam, imperdiet nec ullamcorper non, aliquam in urna.',
            'price'=> 500,
            'discountPrice'=> 4750,
            'stars'=> 4,
        ]);

        \App\Models\User::factory(5)->create();

        Listing::create([
            'title' => 'testTitle1',
            'tags' => 'testTag1',
            'company' => 'testCompany1',
            'location' => 'testLocation1',
            'email' => 'testEmail1',
            'website' => 'testWebsite1',
            'description' => 'testDescription1',
        ]);

        Listing::create([
            'title' => 'testTitle2',
            'tags' => 'testTag2',
            'company' => 'testCompany2',
            'location' => 'testLocation2',
            'email' => 'testEmail2',
            'website' => 'testWebsite2',
            'description' => 'testDescription2',
        ]);

        Listing::create([
            'title' => 'testTitle3',
            'tags' => 'testTag3',
            'company' => 'testCompany3',
            'location' => 'testLocation3',
            'email' => 'testEmail3',
            'website' => 'testWebsite3',
            'description' => 'testDescription3',
        ]);

        
    }
}
