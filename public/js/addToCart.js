function addToCart(id,quantity){
$.post('uploads/addCart.php', {'id':id,'quantity':quantity},(data)=>{
	img = $('#anh_'+id).attr("src");
	$('#anhModal').attr({
		'src':img,
	})
	$('#nameCart').text($('#nameProduct_'+id).text());
	$('#priceCart').text($('#priceProduct_'+id).text());
	$('#quantityCart').text(quantity);
	$( "#sub-cart" ).load( "http://localhost:88/carla #sub-cart");
})
console.log(id, quantity);
$('#myModal').modal();
}