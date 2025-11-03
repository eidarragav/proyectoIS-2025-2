<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id'=>1, 'role_name'=>'candidate'],
            ['id'=>2, 'role_name'=>'company'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
