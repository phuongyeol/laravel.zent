<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price']; // bảng các trường vừa thêm vào ở database/migration


    // Tạo hàm 
    public static function getAll()
    {
    	$products = Product::orderBy('id','desc')->paginate(env('PAGES')); // Lấy lại tất cả dữ liệu từ 

    	return $products;
    }
}
