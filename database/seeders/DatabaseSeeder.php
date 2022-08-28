<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Device;
use App\Models\PartCategory;
use App\Models\Parts;
use App\Models\User;
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
        Device::factory(10)->create();
        User::factory(15)->create();
        // adding Categories
        $category = new PartCategory();
        $category->category = "Screen Parts";
        $category->save();

        $category = new PartCategory();
        $category->category = "Speaker Parts";
        $category->save();

        $category = new PartCategory();
        $category->category = "Hardware";
        $category->save();

        $category = new PartCategory();
        $category->category = "Accessories";
        $category->save();

        Parts::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
