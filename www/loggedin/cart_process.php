<?php
session_start();
include_once("C:/wamp/phps/config.inc.php");
if(isset($_POST["product_code"]))
{
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //Skapar en produkt array 
	}
	
	//Vi lägger en statement för att få reda på product namn och pris från databasen
	$statement = $mysqli_conn->prepare("SELECT product_name, product_price FROM products_list WHERE product_code=? LIMIT 1");
	$statement->bind_param('s', $new_product['product_code']);
	$statement->execute();
	$statement->bind_result($product_name, $product_price);
	
	while($statement->fetch()){ 
		$new_product["product_name"] = $product_name; //product namn från databas
		$new_product["product_price"] = $product_price; // product pris från databas
		
		if(isset($_SESSION["products"])){  //om session redan finns
			if(isset($_SESSION["products"][$new_product['product_code']])) //kollar om producten finns
			{
				unset($_SESSION["products"][$new_product['product_code']]); //unset gamla produkter
			}			
		}
		
		$_SESSION["products"][$new_product['product_code']] = $new_product;	//uppdaterar produkter med ny vara
	}
	
 	$total_items = count($_SESSION["products"]); //Räknar ihop totala produkter
	die(json_encode(array('items'=>$total_items))); 

}

//	Listar produkten i cart
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){ //om vi har en sessions variabel
		$cart_box = '<ul class="cart-products-loaded">';
		$total = 0;
		foreach($_SESSION["products"] as $product){ //Loopa produkterna med html, css
			
			//variabler som skall användas till html
			$product_name = $product["product_name"]; 
			$product_price = $product["product_price"];
			$product_code = $product["product_code"];
			$product_qty = $product["product_qty"];
			$product_color = $product["product_color"];
			$product_size = $product["product_size"];
			
			$cart_box .=  "<li> $product_name (Qty : $product_qty | $product_color  | $product_size ) &mdash; $currency ".sprintf("%01.2f", ($product_price * $product_qty)). " <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
			$subtotal = ($product_price * $product_qty);
			$total = ($total + $subtotal);
		}
		$cart_box .= "</ul>";
		$cart_box .= '<div class="cart-products-total">Total : '.$currency.sprintf("%01.2f",$total).'</div>';
		die($cart_box);
	}else{
		die("Your Cart is empty"); //Tom cart
	}
}

//	Tar bort produkter från cart
if(isset($_GET["remove_code"]) && isset($_SESSION["products"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING);

	if(isset($_SESSION["products"][$product_code]))
	{
		unset($_SESSION["products"][$product_code]);
	}
	
 	$total_items = count($_SESSION["products"]);
	die(json_encode(array('items'=>$total_items)));
}