<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update a new product</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Francois+One|Roboto+Mono" rel="stylesheet">

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-2">
				
				<form action="{{asset('')}}products/{{$product->id}}" method="POST" role="form">
				@csrf
					<legend style="font-family: 'Francois One', sans-serif; font-size: 32px; text-align: center;">Update a new product</legend>
					<input type="hidden" name="_method" value="put">
					<div class="form-group has-success has-feedback">
						<label for="">Name</label>
						<input type="text" class="form-control" id="" placeholder="Name" name="name" value="{{ $product->name }}">

						@if ($errors->has('name'))
							<p class=" alert-danger" style="margin-top:5px">{{ $errors->first('name')}}</p>
						@endif
					</div>
					<div class="form-group has-success has-feedback">
						<label for="">Price</label>
						<input type="number" class="form-control" id="" placeholder="1 000 000" name="price" value="{{ $product->price}}">
						@if ($errors->has('price'))
							<p class=" alert-danger" style="margin-top:5px">{{ $errors->first('price')}}</p>
						@endif
					</div>
					
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
		
	</div>
</body>
</html>