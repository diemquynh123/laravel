<?php

namespace Tests\Unit;
use App\Models\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function test_product_has_name_attribute()
    {
    	//create product
    	$product = Product::create(['name' => 'product 01','detail' =>'new product','price' => '123','discount' => '20']);
        $this->assertEquals(true);
    }
}
