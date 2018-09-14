<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
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
        		'title' => 'có thể xem danh sách bài viết',
        		'url' => 'product_list',
        	],
            [
                'title' => 'có thể thêm bài viết',
                'url' => 'addproduct',
            ],
    		[
        		'title' => 'có thể sửa bài viết',
        		'url' => 'editproduct',
        	],

        ];
         DB::table('permissions')->insert($data);
    }
}
