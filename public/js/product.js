$(function(){
	$('.btn-detail').click(function(){
		// Lay id khi click Xem thong tin san pham
		var id=$(this).attr("data-id");
		//Truyen id vao duong dan
		$.ajax({
			url: url_base +"/" + id,
			type: 'GET',
			success: function(res){
				//id #show-name đặt ở Modal:
				$('#show-name').text(res.name);
				$('#show-price').text(res.price);
				$('#show-created_at').text(res.created_at);
			},
			error: function(error){
				console.log("Fail quá Xem ơi! Chạy ngay đi!");
			}
		});
	});

	//.....................................
	// AJAX cho Xóa sản phẩm:
	
	$('.btn-delete').click(function(){
		// Vì $(this) khi xuống phía dưới đã biến thành 1 biến khác nên phải đặt biến cố định cho nó
		var $this = $(this);
		// Lấy id khi click vào Xóa sản 
		var id = $(this).attr("data-id");
		//Truyền id và đường dẫn và thực hiện xóa:
		$.ajax({
			url: url_base + "/" +id,
			type: "DELETE",
			// data:{
			// 	//id1: truyền vào id hàm destroy trong Controller
			// 	//id2: id lấy được ở trên
			// 	id:id 
			// },
			success: function(res){
				$this.parents('tr').remove();
			},
			error: function(error){
				console.log("Fail quá Xóa ơi! Chạy ngay đi!");
			}
		});
	});
});

