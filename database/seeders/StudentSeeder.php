<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'A',
            'room_class_id' => 1,
            'age' => 21,
            'address' => 'HN',
            'desc' => 'Desc 1'
        ]);

        DB::table('students')->insert([
            'name' => 'B',
            'room_class_id' => 1,
            'age' => 22,
            'address' => 'NA',
            'desc' => 'Desc 2'
        ]);

        DB::table('students')->insert([
            'name' => 'C',
            'room_class_id' => 1,
            'age' => 26,
            'address' => 'HT',
            'desc' => 'Desc 3'
        ]);

        DB::table('students')->insert([
            'name' => 'D',
            'room_class_id' => 2,
            'age' => 18,
            'address' => 'HT',
            'desc' => 'Desc 4'
        ]);

        DB::table('students')->insert([
            'name' => 'E',
            'room_class_id' => 2,
            'age' => 20,
            'address' => 'HP',
            'desc' => 'Desc 5'
        ]);
    }
}
