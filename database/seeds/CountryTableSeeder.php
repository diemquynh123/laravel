<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'name' => 'contry 01',
        	],
        	[
        		'name' => 'contry 02',
        	]
        ];
        DB::table('countries')->insert($data);
    }
}
