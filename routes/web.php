<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/auth/{provider}', 'SocialAuthController@redirectToProvider');
Route::get('/auth/{provide}/callback', 'SocialAuthController@handleProviderCallback');

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')
        ->name('user.change-language');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'admin','prefix'=>'admin'],function(){
	Route::get('/','AdminController@getHome')->name('admin')->middleware('checklogin','auth');

	Route::get('/permission','AclController@getPermission')->name('permission_list')->middleware('can:permission_list');
	Route::get('/addPermission','AclController@getAddPermission')->name('addpermission')->middleware('can:addpermission');
	Route::post('/addPermission','AclController@postAddPermission')->middleware('can:addpermission');
	Route::get('/editPermission/{id}','AclController@getEditPermission')->name('editpermission')->middleware('can:editpermission');
	Route::post('/editPermission','AclController@postEditPermission')->name('posteditpermission')->middleware('can:posteditpermission');
	Route::get('/deletePermission/{id}','AclController@DeletePermission')->name('deletepermission')->middleware('can:deletepermission');

	Route::get('/role','AclController@getRole')->name('role_list')->middleware('can:role_list');
	Route::get('/addRole','AclController@getAddRole')->name('addrole')->middleware('can:addrole');
	Route::post('/addRole','AclController@postAddRole')->name('postaddrole')->middleware('can:postaddrole');
	Route::get('/editRole/{id}','AclController@getEditRole')->name('editrole')->middleware('can:editrole');
	Route::post('/editRole','AclController@postEditRole')->name('postEditrole')->middleware('can:postEditrole');
	Route::get('/deleterole/{id}','AclController@DeleteRole')->name('deleterole')->middleware('can:deleterole');

	Route::get('/user','AclController@getUser')->name('user_list')->middleware('can:user_list');
	Route::get('/addUser','AclController@getAddUser')->name('adduser')->middleware('can:adduser');
	Route::post('/addUser','AclController@postAddUser')->name('postadduser')->middleware('can:postadduser');
	Route::get('/editUser/{id}','AclController@getEditUser')->name('edituser')->middleware('can:edituser');
	Route::post('/editUser','AclController@postEditUser')->name('postEdituser')->middleware('can:postEdituser');
	Route::get('/deleteUser/{id}','AclController@DeleteUser')->name('deleteuser')->middleware('can:deleteuser');
	Route::get('/phoneUser/{id}','AclController@getphoneUser')->name('phoneuser');


	Route::get('/country','AdminController@getcountry')->name('country');
	Route::get('/content','AdminController@getcontent')->name('content');
	Route::get('/product/comment/{id}','AdminController@getcmtprod')->name('cmtproduct');
	Route::get('/product/tag/{id}','AdminController@gettagprod')->name('tagproduct');
	Route::get('/post/comment/{id}','AdminController@getcmtpost')->name('cmtpost');
	Route::get('/post/tag/{id}','AdminController@gettagpost')->name('tagpost');

	Route::get('/product','AdminController@getProduct')->name('product')->middleware('can:product_list');

	Route::get('/add','AdminController@addProduct')->name('addproduct')->middleware('can:addproduct');

	Route::post('/add','AdminController@postaddProduct')->name('postadd')->middleware('can:addproduct');

	Route::get('/edit/{id}','AdminController@editProduct')->name('editproduct')->middleware('can:editproduct');

	Route::post('/edit','AdminController@posteditProduct')->name('posteditproduct')->middleware('can:editproduct');
	Route::get('/delete/{id}','AdminController@DeleteProd')->name('deleteprod')->middleware('can:deleteprod');

	Route::get('/category','AdminController@getcategory')->name('category')->middleware('can:category');
	Route::get('/addcategory','AdminController@getaddcate')->name('addcate')->middleware('can:addcate');
	Route::post('/addcategory','AdminController@postaddcate')->name('postaddcate')->middleware('can:addcate');
	Route::get('/editcategory/{id}','AdminController@geteditcate')->name('editcate')->middleware('can:editcate');
	Route::post('/editcategory','AdminController@posteditcate')->name('posteditcate')->middleware('can:editcate');
	Route::get('/deletecate','AdminController@deletecate')->name('deletecate')->middleware('can:deletecate');


	Route::get('/article','AdminController@getarticle')->name('article');
	 Route::post('/article','AdminController@loadDataAjax')->name('loadDataAjax');
});
	Route::group(['namespace'=>'quynh','prefix'=>'quynh'],function(){
		Route::get('/','LoginController@getLogin')->name('login');
		Route::post('/','LoginController@postLogin')->name('postLogin');
		Route::get('/register','LoginController@getRegister')->name('register');
		Route::post('/register','LoginController@postRegister')->name('postRegister');
	});
