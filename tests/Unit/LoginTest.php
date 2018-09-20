<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\User;
use PHPUnit\Framework\Assert;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class LoginTest extends TestCase
{
	use DatabaseTransactions;
    /**
    // 302 lệnh chuyển hướng tạm thời
     * A basic test example.
     * @test
     * @return void
     */
    
    public function testuserpass()
    {
        $response = $this->json('POST', '/login',['email' => 'lan@gmail.com','password' => '123456']);
            $response->assertStatus(302);
            $response->assertRedirect('/home');
    }
    /**
    * @test
    //422	Unprocessable Entity - Dữ liệu của bạn gửi lên không hợp lệ hoặc bị lỗi.
    */
      public function if_email_wrong_login_fails()
    {
        $response = $this->json('POST', '/login',['email' => 'mai@gmail.com','password' => '123456']);
        $response->assertStatus(422);
    }

     /**
    * @test
    */
       public function if_password_wrong_login_fails()
    {
        $response = $this->json('POST', '/login',['email' => 'lan@gmail.com','password' => '12345678']);
        $response->assertStatus(422);
    }

     /**
    * @test
    */

     public function register()
    {
        User::create([
            'name' => 'minh',
     		'email' => 'minh@gmail.com',
     		'password' => bcrypt('123456'),
        ]);

        $credentials = [
            'name' => 'minh',
     		'email' => 'minh@gmail.com',
     		'password' => bcrypt('123456'),
        ];
        $response = $this->post('/register', $credentials);
 		$response
	        ->assertStatus(302);
	       // ->assertSessionHas($credentials, $value = 'minh');
    }

}
