<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Mirodil',
                'email' => 'mirodilkamilov@gmail.com',
                'password' => Hash::make('Secret1234'),
                'created_at' => '2021-02-18 02:57:14',
                'updated_at' => '2021-02-18 02:57:50'
            ],
            [
                'name' => 'Test1',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('Secret1234'),
                'created_at' => '2021-02-18 03:57:14',
                'updated_at' => '2021-02-18 03:57:50'
            ],
            [
                'name' => 'Test2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('Secret1234'),
                'created_at' => '2021-02-18 03:57:14',
                'updated_at' => '2021-02-18 03:57:50'
            ]
        ]);

        DB::table('payment_methods')->insert([
            [
                'type' => 'Cash',
            ],
            [
                'type' => 'Click',
            ],
            [
                'type' => 'Payme',
            ],
            [
                'type' => 'VisaCard',
            ]
        ]);

        DB::table('products')->insert([
            [
                'title' => 'ASUS TUF',
                'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
                'price' => 559,
                'photo' => 'img/products/asus1.jpg',
                'created_at' => '2021-02-18 02:39:13',
                'updated_at' => '2021-02-18 02:39:13'
            ],
            [
                'title' => 'DELL',
                'description' => 'This card has supporting text below as a natural lead-in to additional content.',
                'price' => 499,
                'photo' => 'img/products/dell.jpg',
                'created_at' => '2021-02-18 02:39:13',
                'updated_at' => '2021-02-18 02:39:50'
            ],
            [
                'title' => 'ASUS ROG',
                'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.',
                'price' => 590,
                'photo' => 'img/products/asus2.jpg',
                'created_at' => '2021-02-18 02:57:14',
                'updated_at' => '2021-02-18 02:57:50'
            ]
        ]);

        DB::table('orders')->insert([
            [
                'user_id' => 2,
                'payment_method_id' => 3,
                'total' => 1679,
                'created_at' => '2021-02-18 03:57:14',
                'updated_at' => '2021-02-18 03:57:14'
            ],
            [
                'user_id' => 1,
                'payment_method_id' => 1,
                'total' => 2797,
                'created_at' => '2021-02-18 03:59:14',
                'updated_at' => '2021-02-18 03:59:14'
            ],
            [
                'user_id' => 3,
                'payment_method_id' => 2,
                'total' => 499,
                'created_at' => '2021-02-18 03:59:14',
                'updated_at' => '2021-02-18 03:59:14'
            ],
            [
                'user_id' => 3,
                'payment_method_id' => 3,
                'total' => 559,
                'created_at' => '2021-02-18 04:00:00',
                'updated_at' => '2021-02-18 04:00:00'
            ]
        ]);

        DB::table('product_order')->insert([
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'sub-total' => 499
            ],
            [
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 2,
                'sub-total' => 1180
            ],

            [
                'order_id' => 2,
                'product_id' => 3,
                'quantity' => 2,
                'sub-total' => 1180
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'sub-total' => 499
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 2,
                'sub-total' => 1118
            ],

            [
                'order_id' => 3,
                'product_id' => 2,
                'quantity' => 1,
                'sub-total' => 499
            ],
            [
                'order_id' => 4,
                'product_id' => 1,
                'quantity' => 1,
                'sub-total' => 559
            ]
        ]);

    }
}
