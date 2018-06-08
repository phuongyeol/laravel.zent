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


// Route::get('/products', 'ProductController@index');

// // Thêm mới sản phẩm
// // chú ý thứ tự
// Route::post('/products', 'ProductController@store'); 

// Route::get('/products/tao_moi', 'ProductController@create')->name('products.create');

// Route::get('/products/{id}/edit', 'ProductController@edit');
// Route::put('/products/{id}', 'ProductController@update');

// Route::get('/products/{id}', 'ProductController@show')->name('product.show'); // Truyen vao id goi den ham detail tu ProductController
// //Show dùng AJAX
// Route::get('/products/{id}', 'ProductController@detail'); 

// Route::delete('/products/{id}', 'ProductController@destroy2'); 
// // Xóa dùng AJAX
// Route::delete('/products/{id}', 'ProductController@destroy'); 






//...........
//Khi định nghĩa các hàm khác phải định nghĩa trên dòng này Route:resource(
//Nhóm: 
// Route::prefix('admin')->group(function(){
// 	Route::get('ngaos',function(){
// 		echo "NGAOSTEAM x 3.14";
// 	});
	Route::resource('/products','ProductController'); // resource đặt tên sẵn, kiểm tra bằng lệnh 'php artisan route:list'
// });

//...........

// Tham số không bắt buộc:

Route::get('user/{name?}', function($name = 'ZonZon'){
	echo $name;
});