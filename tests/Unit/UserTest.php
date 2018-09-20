<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\User;
use PHPUnit\Framework\Assert;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function user_full_name_attribute()
    {
        //create user
        $user =User::create([
        	'name' => 'hoa',
        	'lastname' => 'anh',
        	'email' =>'hoaanh@gmail.com',
        	'password' =>'secret',
        ]);
         //assert user has full name
        $this->assertEquals('hoa anh',$user->fullname);
    }
}
