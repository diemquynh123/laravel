<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id	title	Categories	author	created_at	updated_at	status	image

        $data = [	
        			[
        				'title'=>'tiêu đề 01',
        				'Categories'=>'chuyên mục 01',
        				'author'=>'tác giả 01',
                        'content'=>'bài viết 1',
        				'post_time'=>new Datetime(),
        				'status'=>'2',
    				],
        			[
        				'title'=>'tiêu đề 02',
        				'Categories'=>'chuyên mục 02',
        				'author'=>'tác giả 02',
                        'content'=>'bài viết 2',
        				'post_time'=>new Datetime(),
        				'status'=>'2',
        			],
        	];
          DB::table('products')->insert($data);
    }
}
