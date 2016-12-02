<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed some random titles like Doctor, Chef, Technician, System Analyst
        DB::table('titles')->insert([
            'name' => 'Human Resources Manager',
            'salary' => '600000',
            'department_id' => 1,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('titles')->insert([
            'name' => 'Senior Accountant',
            'salary' => '750000',
            'department_id' => 1,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('titles')->insert([
            'name' => 'Field Officer',
            'salary' => '400000',
            'department_id' => 2,
            'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
