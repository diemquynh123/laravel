<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
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
        		'user_id' => '2',
        		'title' => 'mục 1',
        	],
        	[
        		'user_id' => '3',
        		'title' => 'mục 2',
        	],
        ];
         DB::table('posts')->insert($data);
    }
}
