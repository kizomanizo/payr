<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Medical',
            'company_id' => 1,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('departments')->insert([
            'name' => 'Accounting',
            'company_id' => 1,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('departments')->insert([
            'name' => 'Information',
            'company_id' => 2,
            'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
