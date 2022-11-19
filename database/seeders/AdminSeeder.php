<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name'              => 'admin',
                'email'             => 'admin@seeder.com',
                'email_verified_at' => now(),
                'level'             => 'admin',
                'password'          => bcrypt('passwordadmin')
            ],
            [
                'name'              => 'kasir',
                'email'             => 'kasir@seeder.com',
                'email_verified_at' => now(),
                'level'             => 'kasir',
                'password'          => bcrypt('passwordkasir')
            ],
        ];

        $categories = [
            [
                'name_category' => 'Jacket'
            ],
            [
                'name_category' => 'T-Shirt'
            ],
            [
                'name_category' => 'Shoe'
            ],
        ];

        $products = [
            [
                'name_product' => 'Jacket 1',
                'description' => 'Description Jacket 1',
                'stock' => 10,
                'price' => 20000,
                'category_id' => 1
            ],
            [
                'name_product' => 'T-Shirt 1',
                'description' => 'Description T-Shirt 1',
                'stock' => 10,
                'price' => 20000,
                'category_id' => 2
            ],
            [
                'name_product' => 'Shoe 1',
                'description' => 'Description Shoe 1',
                'stock' => 10,
                'price' => 20000,
                'category_id' => 3
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        foreach ($categories as $category) {
            Category::create($category);
        }

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
