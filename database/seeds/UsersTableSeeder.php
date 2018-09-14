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
        //
        $data = [
            [
                'country_id'=>'1',
                'name'=>'admin',
                'email'=>'diemquynh231296@gmail.com',
                'password'=>bcrypt('123456'),
                'created_at'=>new Datetime(),
            ],
        	[	'country_id'=>1,
                'name'=>'mai',
                'email'=>'mai@gmail.com',
                'password'=>bcrypt('123456'),
                'created_at'=>new Datetime(),
            ],
        	[
                'country_id'=>2,
        		'name'=>'anh',
                'email'=>'anh@gmail.com',
                'password'=>bcrypt('123456'),
                'created_at'=>new Datetime(),
        	],
            [
                'country_id'=>2,
                'name'=>'lan',
                'email'=>'lan@gmail.com',
                'password'=>bcrypt('123456'),
                'created_at'=>new Datetime(),
            ],
            
        ];
         DB::table('users')->insert($data);
    }
}
