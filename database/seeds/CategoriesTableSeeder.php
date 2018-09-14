<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        	['name' => 'xã hội'],
        	['name' => 'đời sống'],
        ];
         DB::table('Categories')->insert($data);
    }
}
