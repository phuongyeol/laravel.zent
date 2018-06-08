<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cấu trúc thư mục trong Laravel</title>
</head>
<body>
	<table class="table table-hover" style="border: 2px solid;">
		<h3 class="label">Cấu trúc thư mục trong Laravel</h3>
		<thead>
			<tr>
				<th>app</th>
				<td>Chứa models, controllers, middlewares, request, ... đây là thư mục code chính mà bạn sẽ thao tác nhiều sau này.</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>bootstrap</th>
				<td>Chứa một số file của bootstrap framework và một số file cấu hình nạp tự động.</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>config</th>
				<td>Chứa các file cấu hình hệ thống như database, mail, filesystems, ...</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>database</th>
				<td>migrations: nơi bạn sẽ khởi tạo database, seeds: nơi sẽ khởi tạo dữ liệu insert mẫu vào database.</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>public</th>
				<td> Thư mục public cũng dùng cho việc lưu trữ những file như css, javascripts, file images và những file khác. Nó cũng chứa file khởi động index.php</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>resources</th>
				<td>Chứa assets, lang, views (chứa file cấu trúc html)</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>routes</th>
				<td>hứa các file api.php, channels.php, console.php, web.php. Ở đay ta chủ yếu quan tâm tới file web.php nó lưu trứ toàn bộ những route để thông báo với Laravel cách như thế nào để kết nối khi có yêu cầu, theo hàm khai sẵn, controller và action.</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>storage</th>
				<td>Để lưu trữ file tạm thời cho những dịch vụ Laravel khác nhau như session, cache, biên dịch template views.</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>vendor/th>
				<td>Nơi này chứa toàn bộ code của bên thứ ba. Chứa plugin chúng ta cài thêm cho ứng dụng chúng ta.Chứa cả các composer package sử dụng bởi ứng dụng.</td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th>tests</th>
				<td>Chứa các test tự động của bạn.</td>
			</tr>
		</tbody>
	</table>

	<p><b>Models</b>: </p>
</body>
</html>