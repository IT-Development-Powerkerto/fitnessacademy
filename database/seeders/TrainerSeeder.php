<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainer = [
            'user_id' => 2,
            'status' => 'IN WAITING',
            'sinta_id' => Str::random(8),
            'scopus_id' => Str::random(8),
            'description' => Str::random(300)
        ];
        DB::table('trainers')->insert($trainer);
    }
}
