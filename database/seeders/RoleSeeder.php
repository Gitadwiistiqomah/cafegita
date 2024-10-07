<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
                'waiterss',
                'chef',
                'cashier',
                'manager'
         ];

         foreach ($data as $item) {
            Role::create([
            'name' => $item,
            'created_at' => now(),
            'updated_at' => now()
                ]);
        }
     }
    
}
