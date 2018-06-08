
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="csrf-token" content="{{ csrf_token() }}">
	<title>Danh sách sản phẩm</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Francois+One|Roboto+Mono" rel="stylesheet">

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		legend, h4{
			font-family: 'Francois One', sans-serif;
			text-align: center;
			font-size: 32px;
		}
		.elecenter{
			 margin-left: 42.5%;
		}
	</style>
</head>
<body>

	<div class="container">
		<!-- Thông báo thêm mới thành công -->
		@if (session()->has('flag'))
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{ session()->get('flag') }} </strong>
			</div>
		@endif

		<div class="table" >
			<br>
		<!-- danh sách sản phẩm -->
			<legend> Danh sách sản phẩm</legend>
			<a href="{{ route('products.create')}}"><button type="button" class="btn btn-primary elecenter" >Add a new product +</button></a><br>
			
			<table class="table table-hover table-bordered" style="box-shadow: 5px 5px 5px 5px #888888;">
				<br>
				
				<thead>
					<tr class="active">
						<th>ID</th>
						<th>Name</th>
						<th>Price</th>
						<th>Created at</th>
						<th>Updated at</th>
						<th>Action</th>

					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->price }}</td>
						<td>{{ $product->created_at }}</td>
						<td>{{ $product->updated_at }}</td>
						<td><!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info btn-detail" data-toggle="modal" data-target="#show-product" data-id="{{ $product->id }}">Detail</button>
							<!-- Domain/products/1 -->
							<a href="{{ asset('')}}products/{{$product->id }}"><button type="button" class="btn btn-info btn-detail" data-toggle="modal">Show</button></a>
							<a href="{{ asset('')}}products/{{$product->id }}/edit"><button type="button" class="btn btn-success ">Update</button></a>
							
							<form style="display: inline-block;" action="{{asset('')}}products/{{$product->id}}" method="POST" role="form">
								@csrf
								<input type="hidden" name="_method" value="delete">
								<button type="submit" class="btn btn-danger" >Delete</button>
								<!-- <button type="button" class="btn btn-danger btn-delete" data-id="{{ $product->id }}" >Xóa</button> -->

							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		<div class="elecenter">{{ $products->links() }}</div>
		
		<!-- Hiển thị Detail ngay trang danh sách, dùng Ajax -->
		<!-- Modal: dùng trong foreach thì cần truyền id, còn dùng Ajax ko cần -->
			<div id="show-product" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Product Informationt</h4>
			      </div>
			      	<table class="table table-striped ">
			      			<tr>
			      				<th>Name</th>
			      				<th><span id="show-name">{{$product->name }}</span> </th>
			      			</tr>
			      			<tr>
			      				<th>Price</th>
			      				<th><span id="show-price">{{$product->price }}</span> </th>
			      			</tr>
			      			<tr>
			      				<th>Creted at</th>
			      				<th><span id="show-created_at">{{$product->created_at }}</span> </th>
			      			</tr>
			      	</table>  
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger elecenter" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>
		</div>
	</div>

</body>
	<!-- Viết Ajax cho Xem: -->
	<script type="text/javascript">
		var url_base = '{{ asset('products') }}'; 
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
	</script>
	<!-- Js không nên viết trực tiếp vào view mà để ở public/js -->
	<script type="text/javascript" src="{{ asset('js/product.js')}}"></script>
</html>