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
            'subject_name'  =>  'Physics',
        ]);
        DB::table('subjects')->insert([
            'id' =>  2,
            'subject_name'  =>  'Maths',
        ]);
        DB::table('subjects')->insert([
            'id' =>  3,
            'subject_name'  =>  'Chemistry',
        ]);
    }
}
