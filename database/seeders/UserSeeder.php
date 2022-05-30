<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'role_id'   => 1,
                'name'      => 'zall',
                'email'     => 'zall@zall.com',
                'password'  => Hash::make('1234'),
                'gender'    => 'male',
                'age'       => '22',
                'phone'     => '081245527656',
                'nik'       => '7371918239819283',
                'education' => 'S1',
                'work'      => 'work',
                'address'      => 'Address',
                'status'     => 'inactive',
            ],
            [
                'role_id'   => 2,
                'name'      => 'fzall',
                'email'     => 'fzall@zall.com',
                'password'  => Hash::make('1234'),
                'gender'    => 'male',
                'age'       => '22',
                'phone'     => '081245527654',
                'nik'       => '7371918239819282',
                'education' => 'S2',
                'work'      => 'works',
                'address'      => 'Addresss',
                'status'     => 'inactive',
            ],
            [
                'role_id'   => 3,
                'name'      => 'admin',
                'email'     => 'admin@admin.com',
                'password'  => Hash::make('1234'),
                'gender'    => 'male',
                'age'       => '22',
                'phone'     => '081245527651',
                'nik'       => '7371918239819211',
                'education' => 'S3',
                'work'      => 'work',
                'address'      => 'Address',
                'status'     => 'inactive',
            ],
        ];

        DB::table('users')->insert($user);
    }
}
