<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bwana Kizito',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'name' => 'HR Officer',
            'username' => 'hr',
            'password' => bcrypt('123456'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
