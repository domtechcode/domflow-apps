<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
          ]);

          $admin->assignRole('Admin');

          $approval = User::create([
            'name' => 'Approval',
            'username' => 'approval',
            'password' => bcrypt('approval'),
          ]);

          $approval->assignRole('Approval');

          $purchase = User::create([
            'name' => 'Purchase',
            'username' => 'purchase',
            'password' => bcrypt('purchase'),
          ]);

          $purchase->assignRole('Purchase');

          $sales = User::create([
            'name' => 'Sales',
            'username' => 'sales',
            'password' => bcrypt('sales'),
          ]);

          $sales->assignRole('Sales');

          $finance = User::create([
            'name' => 'Finance',
            'username' => 'finance',
            'password' => bcrypt('finance'),
          ]);

          $finance->assignRole('Finance');

          $warehouse = User::create([
            'name' => 'Warehouse',
            'username' => 'warehouse',
            'password' => bcrypt('warehouse'),
          ]);

          $warehouse->assignRole('Warehouse');

          $validator = User::create([
            'name' => 'Validator',
            'username' => 'validator',
            'password' => bcrypt('validator'),
          ]);

          $validator->assignRole('Validator');
    }
}
