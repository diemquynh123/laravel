<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          $data = [
        	[
        		'roles_id' => 1,
        		'user_id' => 1,
        	],
            [
                'roles_id' => 2,
                'user_id' => 1,
            ],
            [
                'roles_id' => 3,
                'user_id' => 1,
            ],
            [
                'roles_id' => 1,
                'user_id' => 2,
            ],
            [
                'roles_id'=>2,
                'user_id'=>2,
            ],
            [
                'roles_id'=>2,
                'user_id'=>3,
            ],
            [
                'roles_id'=>3,
                'user_id'=>3,
            ],
            [
                'roles_id'=>1,
                'user_id'=>4,
            ],

            [
                'roles_id'=>3,
                'user_id'=>4,
            ],

        ];
         DB::table('role_user')->insert($data);
    }
}
