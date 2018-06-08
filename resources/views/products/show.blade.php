<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Inforrmation Product </title>
</head>
<body>
	<p>Name: {{ $product->name }}</p>
	<p>price: {{ $product->price }}</p>
	<p>Created at: {{ $product->created_at }}</p>
	<p>Update at: {{ $product->update_at }}</p>
</body>
</html>