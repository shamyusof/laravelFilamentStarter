<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         $user = User::factory()->create([
             'name' => 'Administrator',
             'email' => 'admin@example.com',
         ]);

        $role = Role::create(['name' => 'admin']);
        //$permission = Permission::create(['name' => 'edit']);
        $user->assignRole($role);
    }
}
