<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'fullname' => 'ahmed',
            'product_name' => 'iphone 12',
            'upsell' => 'yes',
            'phone' => '0674710151',
            'city' => 'marrakech',
            'adresse' => 'marrakech',
            'quantity' => 12,
            'confirmation' => 'yes',
            'affectation' => 'yes',
            'delivery' => 'khalid',
            'note' => 'quickly',
        ]);
    }
}
