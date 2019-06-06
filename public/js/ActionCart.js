function addToCart(id,quantity){
$.post('uploads/addCart.php', {'id':id,'quantity':quantity},(data)=>{
	img = $('#anh_'+id).attr("src");
	$('#anhModal').attr({
		'src':img,
	})
	$('#nameCart').text($('#nameProduct_'+id).text());
	$('#priceCart').text($('#priceProduct_'+id).text());
	$('#quantityCart').text(quantity);
	$( "#sub-cart" ).load( "http://localhost:88/carla/shop-page.php #sub-cart");
	$( "#sizeCart" ).load( "http://localhost:88/carla/shop-page.php #sizeCart2");
})
$('#myModal').modal();
}
function updateQuantity1(id){
		quantity = $("#quantity_"+id).val();
		$.post('uploads/updateCart.php', {"id":id, "quantity":quantity}, function(data){
			$( "#listCart" ).load( "http://localhost:88/carla/cart.php #listCart");
			$( "#totalPrice" ).load( "http://localhost:88/carla/cart.php #totalPrice");
		});
		if(quantity <=0){
			$( "#closeCheckout" ).load( "http://localhost:88/carla/cart.php #closeCheckout");
		}
	}
function updateQuantity2(id, number){
	quantity = $("#quantity_"+id).val();
	quantity=parseInt(quantity) + number;
	$.post('uploads/updateCart.php', {"id":id, "quantity":quantity}, function(data){
		$( "#listCart" ).load( "http://localhost:88/carla/cart.php #listCart");
		$( "#totalPrice" ).load( "http://localhost:88/carla/cart.php #totalPrice");
	});
	if(quantity <=0){
		$( "#closeCheckout" ).load( "http://localhost:88/carla/cart.php #closeCheckout");
	}
}
function deleteProduct(id){
	$.post('uploads/deleteProduct.php', {"id":id}, function(data){
		$( "#listCart" ).load( "http://localhost:88/carla/cart.php #listCart");
		$( "#totalPrice" ).load( "http://localhost:88/carla/cart.php #totalPrice");
		$( "#sub-cart" ).load( "http://localhost:88/carla #sub-cart");
		$( "#closeCheckout" ).load( "http://localhost:88/carla/cart.php #closeCheckout");
		$( "#sizeCart" ).load( "http://localhost:88/carla/shop-page.php #sizeCart2");
	});
}