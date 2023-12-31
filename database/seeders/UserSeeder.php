<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        $admin = User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '12345678',
            'password' => Hash::make('admin'),
            'status' => 1
        ]);

        $admin->assignRole('admin');

        $agente = User::create([
            'firstname' => 'agente',
            'lastname' => 'agente',
            'email' => 'agente@gmail.com',
            'phone' => '12345678',
            'password' => Hash::make('agente'),
            'status' => 1
        ]);

        $agente->assignRole('agente');

        $delivery = User::create([
            'firstname' => 'delivery',
            'lastname' => 'delivery',
            'email' => 'delivery@gmail.com',
            'phone' => '12345678',
            'password' => Hash::make('delivery'),
            'status' => 1
        ]);

        $delivery->assignRole('delivery');

        $Ste = User::create([
            'firstname' => 'Road',
            'lastname' => 'Runner',
            'email' => 'roadrunner@gmail.com',
            'phone' => '12345678',
            'password' => Hash::make('roadrunner'),
            'status' => 1
        ]);

        $Ste->assignRole('delivery');

         $seller = User::create([
            'firstname' => 'Seller',
            'lastname' => 'Seller',
            'email' => 'seller@gmail.com',
            'phone' => '12345678',
            'password' => Hash::make('seller'),
            'status' => 1
        ]);

        $seller->assignRole('seller');
        
        // $Ste = User::create([
        //     'firstname' => 'ste',
        //     'lastname' => 'ste',
        //     'email' => 'ste@gmail.com',
        //     'phone' => '12345678',
        //     'password' => Hash::make('delivery'),
        //     'status' => 1
        // ]);

        // $Ste->assignRole('delivery');
    }
}
