<?php

namespace Database\Seeders;

use App\Models\Listing;
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
