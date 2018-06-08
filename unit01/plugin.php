<!-- MỘT SỐ PLUGIN CƠ BẢN KHI DÙNG SUBLIME TEXT -->
<!-- 1. EMMET: Sử dụng Emmet chúng ta có thể tạo ra 1 cặp thẻ HTML một cách nhanh chóng sử dụng phím tắt "tab"
Tham khảo: https://docs.emmet.io/cheat-sheet/-->

	<!DOCTYPE html>
	<html>
	<head>
		<title>EMMET</title>
	</head>
	<body>
		<!-- Tạo khung html co bản: -->
		html:5
		<!--  Thêm class="my-class" vào trong thẻ div-->
		div.my-class
			<div class="my-class"></div>
		<!-- Thêm id="my-id" vào trong thẻ div-->
		div#my-id
			<div id="my-id"></div>
		<!-- Kết hợp-->
		div.my-class#my-id 
			<div class="my-class" id="my-id"></div>

		<!-- Tạo phần tử con - dùng kí tự >: nav>ul>li  -->
			<nav>
				<ul>
					<li></li>
				</ul>
			</nav>
		
		<!-- Tạo phần tử anh em: div+p+bq -->
			<div></div>
			<p></p>
			<blockquote></blockquote>
			
		<!-- Tạo văn bản giả: lorem -->
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, id!
	
		<!-- Phần tử anh em với thẻ cha -->
		div+div>p>span+em^bp
			<div></div>
			<div>
				<p><span></span><em></em></p>
				<bp></bp>
			</div>
			div+div>p>span+em^^bp
			<div></div>
			<div>
				<p><span></span><em></em></p>
			</div>
			<bp></bp>

		<!-- Nhóm các phần tử: -->
		div>(header>ul>li*2>a)+footer>p
			<div>
				<header>
					<ul>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</header>
				<footer>
					<p></p>
				</footer>
			</div>
		(div>dl>(dt+dd)*3)+footer>p
			<div>
				<dl>
					<dt></dt>
					<dd></dd>
					<dt></dt>
					<dd></dd>
					<dt></dt>
					<dd></dd>
				</dl>
			</div>
			<footer>
				<p></p>
			</footer>

		<!-- Multiplication: * -->
		ul>li*5
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		
		<!-- Item numbering: biến tăng dần $ từ 0 đến $ -->
		ul>li.item$*5
			<ul>
				<li class="item1"></li>
				<li class="item2"></li>
				<li class="item3"></li>
				<li class="item4"></li>
				<li class="item5"></li>
			</ul>

		h$li.item$$$*3
			<h1li class="item001"></h1li>
			<h2li class="item002"></h2li>
			<h3li class="item003"></h3li>

		h$[title=item$]{Text T$}*3
			<h1 title="item1">Text T1</h1>
			<h2 title="item2">Text T2</h2>
			<h3 title="item3">Text T3</h3>
		
		<!-- Item numbering: biến tăng dần $@x từ x -->
		ul>li.item$@3*5
			<ul>
				<li class="item3"></li>
				<li class="item4"></li>
				<li class="item5"></li>
				<li class="item6"></li>
				<li class="item7"></li>
			</ul>

		<!-- Item numbering: biến giảm dần $@- từ $ về 0 -->
		ul>li.item$@-*5
		<ul>
			<li class="item5"></li>
			<li class="item4"></li>
			<li class="item3"></li>
			<li class="item2"></li>
			<li class="item1"></li>
		</ul>
	</body>
	</html>
	<!-- more:  https://docs.emmet.io/cheat-sheet/ -->

<!-- EMMET - END -->
<!-- 2.  Bootstrap 3 snippets: Plugin sử dụng nhanh BT: -->
	bs3 "Ctrl+Space"
	1.Form: bs3-form
	<form action="" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
	2. 	Hàng: bs3-row 
		<div class="row">
		</div>
		Hàng - Cột: bs3-row-col
		<div class="row">
			<div class="col-xs- col-sm- col-md- col-lg-">
			</div>
		</div>

	3. Icon: bs3-icon
		<i class="fa fa-name-shape-o-direction"></i>