<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'role_name'  => 'Student',
            ],
            [
                'role_name'  => 'Trainer',
            ],
            [
                'role_name'  => 'Admin',
            ],
        ];

        DB::table('roles')->insert($role);
    }
}
