<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'id' =>  1,
            'name'  =>  'Physics',
        ]);
        DB::table('subjects')->insert([
            'id' =>  2,
            'name'  =>  'Maths',
        ]);
        DB::table('subjects')->insert([
            'id' =>  3,
            'name'  =>  'Chemistry',
        ]);
    }
}
