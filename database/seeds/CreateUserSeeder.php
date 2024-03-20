<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'sadmin@sadmin.com',
            'password' => bcrypt('sadmin123')
        ]);

        $role = Role::create(['name' => 'Super-Admin']);
       
        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        //Admin
         $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);
        $role = Role::create(['name' => 'Admin']);

        $permission = Permission::where('name','role-list')->first();

        $role->givePermissionTo($permission->id);


        $user->assignRole([$role->id]);
        //User
         $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user123')
        ]);
        $role = Role::create(['name' => 'User']);
        $permission = Permission::where('name','role-list')->first();
        $role->givePermissionTo($permission->id);
        $user->assignRole([$role->id]);
        //Cashier
         $user = User::create([
            'name' => 'Cashier',
            'email' => 'cashier@cashier.com',
            'password' => bcrypt('cashier123')
        ]);
        $role = Role::create(['name' => 'Cashier']);

        $permission = Permission::where('name','role-list')->first();

        $role->givePermissionTo($permission->id);


        $user->assignRole([$role->id]);
        //Tester
         $user = User::create([
            'name' => 'Tester',
            'email' => 'tester@tester.com',
            'password' => bcrypt('tester123')
        ]);
        $role = Role::create(['name' => 'Tester']);

        $permission = Permission::where('name','role-list')->first();

        $role->givePermissionTo($permission->id);


        $user->assignRole([$role->id]);
    }
}
