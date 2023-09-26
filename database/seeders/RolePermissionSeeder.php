<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'read-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);

        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'read']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'delete']);

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Approval']);
        Role::create(['name' => 'Purchase']);
        Role::create(['name' => 'Sales']);
        Role::create(['name' => 'Finance']);
        Role::create(['name' => 'Warehouse']);
        Role::create(['name' => 'Validator']);

        $roleAdmin = Role::findByName('Admin');
        $roleAdmin->givePermissionTo('create-user');
        $roleAdmin->givePermissionTo('read-user');
        $roleAdmin->givePermissionTo('update-user');
        $roleAdmin->givePermissionTo('delete-user');

        $roleApproval = Role::findByName('Approval');
        $roleApproval->givePermissionTo('create');
        $roleApproval->givePermissionTo('read');
        $roleApproval->givePermissionTo('update');
        $roleApproval->givePermissionTo('delete');

        $rolePurchase = Role::findByName('Purchase');
        $rolePurchase->givePermissionTo('create');
        $rolePurchase->givePermissionTo('read');
        $rolePurchase->givePermissionTo('update');
        $rolePurchase->givePermissionTo('delete');

        $roleSales = Role::findByName('Sales');
        $roleSales->givePermissionTo('create');
        $roleSales->givePermissionTo('read');
        $roleSales->givePermissionTo('update');
        $roleSales->givePermissionTo('delete');

        $roleFinance = Role::findByName('Finance');
        $roleFinance->givePermissionTo('create');
        $roleFinance->givePermissionTo('read');
        $roleFinance->givePermissionTo('update');
        $roleFinance->givePermissionTo('delete');

        $roleWarehouse = Role::findByName('Warehouse');
        $roleWarehouse->givePermissionTo('create');
        $roleWarehouse->givePermissionTo('read');
        $roleWarehouse->givePermissionTo('update');
        $roleWarehouse->givePermissionTo('delete');

        $roleValidator = Role::findByName('Validator');
        $roleValidator->givePermissionTo('create');
        $roleValidator->givePermissionTo('read');
        $roleValidator->givePermissionTo('update');
        $roleValidator->givePermissionTo('delete');
    }
}
