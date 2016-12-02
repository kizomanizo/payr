<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add seed companies
        DB::table('companies')->insert([
            'name' => 'Mfano Company Limited.',
            'address' => 'P.O. Box 202010 Dar es Salaam',
            'contacts' => '+255-22-250-6930',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('companies')->insert([
            'name' => 'Migebuka Fisheries',
            'address' => 'P.O. Box 12098 Kigoma',
            'contacts' => '+255-71-312 3456',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('companies')->insert([
            'name' => 'Mkuki Publishing House',
            'address' => 'Serengeti Road 10108 Mwanza',
            'contacts' => '+255-76-712-0334',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('companies')->insert([
            'name' => 'BIM Aluminium Systems',
            'address' => 'Njiro Taso 2211 Arusha',
            'contacts' => '+255-75-543-7887',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}