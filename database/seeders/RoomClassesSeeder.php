<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_classes')->insert([
            'name'=> 'PM6',
            'desc'=>'PM6 desc'
        ]);

        DB::table('room_classes')->insert([
            'name'=> 'PM5',
            'desc'=>'PM5 desc'
        ]);

        DB::table('room_classes')->insert([
            'name'=> 'PM4',
            'desc'=>'PM4 desc'
        ]);
    }
}
