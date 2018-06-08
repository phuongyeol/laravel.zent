<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Product; // thay cho include

class ProductController extends Controller
{
	// Sử dụng biến "static" ở models Product.php thì sẽ không cần dùng hàm construct ở Controller và ko sủ dụng this

			// protected $product;
			// // Khởi tạo models
			// public function __construct()
			// {
			// 	$this->product = new Product();
			// }
    public function index()
    {
    	// $products = $this->product->getAll();
    	// Khi sử dụng static trong Product.php thì có thể thay $this->
    	$products = Product::getAll();
    	// thay cho include trong PHP thuần
    	return view('products.list',
            ['products'=> $products,
    	]); 
    }

    // Phương thức xem dùng Ajax
    public function detail($id)
    {
    	$product = Product::find($id);
    	return response()->json($product);
    }

    // Phương thức xem không dùng Ajax
    public function show($id)
    {
        $product = Product::find($id);
         return view('products.show',['product'=> $product]);
    }

    // Phương thức Xóa dùng Ajax
            // public function destroy($id)
            // {
            //     $result = Product::where('id', $id)->delete();
            //     return response()->json($id);
            // }
    // Phương thức Xóa không dùng Ajax
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('products')->with('flag', 'Xóa thành công!');
    }

    // Phương thức Thêm mới
    public function create(){
        return view('products.create');
    }
    // Nạp vào CSDL
    public function store(CreateProductRequest $request){
        // Trả về một mảng array chứa dữ liệu
        // dd($data);
        $data = $request->all();
        // Lưu vào CSDL cách thuần
                // $product = new Product;
                // $product->name = $data['name'];
                // $product->price = $data['price'];

                // $product->save();
        //Lưu vào database dùng hàm create($data);
        Product::create($data);

        return redirect('products')->with('flag', 'Thêm mới thành công!');
    }

    //Phương thức Cập nhật 
    public function edit($id){
        $product = Product::find($id);
         return view('products.edit',['product'=> $product]);
    }
    public function update(Request $request, $id){

        $product = Product::find($id);

        $data = $request->all();

        $product->update($data);

        return redirect('products')->with('flag', 'Update successfull!');
    }

}
