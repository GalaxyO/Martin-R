<?php
require_once('C:/wamp/phps/mysql_connect.php');
include("C:/wamp/phps/config.inc.php"); //include config file
?>
<!DOCTYPE HTML>
<html>
<head>
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){	
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Adding...'); //Laddar button text 

			$.ajax({ //Gör en ajax request till cart_process
				url: "cart_process.php",
				type: "POST",
				dataType:"json", //förväntar json value from servern
				data: form_data
			}).done(function(data){ //Vid Ajax success
				$("#cart-info").html(data.items); 
				button_content.html('Add to Cart');
				alert("Item added to Cart!"); //alert user
				if($(".shopping-cart-box").css("display") == "block"){//om cartbox fortfarande är synlig
					$(".cart-box").trigger( "click" ); 
							}
			})
			e.preventDefault();
		});

	//Visa produkter i cart
	$( ".cart-box").click(function(e) { //När användaren klickar på cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(); //display cart box
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Gör en ajax request som använder jQuery Load() & updaterar resultat
	});
	
	//Stänger Cart
	$( ".close-shopping-cart-box").click(function(e){
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut();
	});
	
	//Tar bort produkter från cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
		});
	});

});
</script>
</head>
<body>
<div align="center">
<h4>Cart</h4>
</div>

<a href="#" class="cart-box" id="cart-info" title="View Cart">
<?php 
if(isset($_SESSION["products"])){
	echo count($_SESSION["products"]); 
}else{
	echo 0; 
}
?>
</a>

<div class="shopping-cart-box">
<a href="#" class="close-shopping-cart-box" >Close</a>
<h3>Your Shopping Cart</h3>
    <div id="shopping-cart-results">
    </div>
</div>

<?php
//Listar produkter från databas
$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM products_list");

$products_list =  '<ul class="products-wrp">';

while($row = $results->fetch_assoc()) {
$products_list .= <<<EOT
<li>
<form class="form-item">
<h4>{$row["product_name"]}</h4>
<div><img src="images/{$row["product_image"]}"></div>
<div>Price : {$currency} {$row["product_price"]}<div>
<div class="item-box">
    <div>
	Rarity :
    <select name="product_color">
    <option value="Standard">Standard</option>
    <option value="Holo">Holo</option>
    <option value="Foil">Foil</option>
    </select>
	</div>
	
	<div>
    Quantity :
    <select name="product_qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
	</div>
	
	<div>
    Size :
    <select name="product_size">
	<option value="S">S</option>
    <option value="M">M</option>
    <option value="XL">XL</option>
    </select>
	</div>
	
    <input name="product_code" type="hidden" value="{$row["product_code"]}">
    <button type="submit">Add to Cart</button>
</div>
</form>
</li>
EOT;

}
$products_list .= '</ul></div>';

echo $products_list; // Listan av produkter skrivs ut
?>