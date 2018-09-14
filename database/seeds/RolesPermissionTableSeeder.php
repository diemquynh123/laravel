<?php

use Illuminate\Database\Seeder;

class RolesPermissionTableSeeder extends Seeder
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
        		'permission_id' => 1,
        	],
            [
                'roles_id' => 2,
                'permission_id' => 2,
            ],
            [
                'roles_id' => 3,
                'permission_id' => 3,
            ],


        ];
         DB::table('role_permission')->insert($data);
    
     }
}
