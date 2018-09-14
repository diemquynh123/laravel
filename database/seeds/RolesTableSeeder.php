<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          $data = [
        		['title' => 'Admin'],
                ['title'=>'Trưởng Phòng'],            
                ['title'=>'Nhân viên'],             

        ];
         DB::table('roles')->insert($data);
    
     }
}
