<?php 
use samat\pizzas\models\Pizzas;class Cms58136a77a5641680375360_353194053Class extends \Cms\Classes\PageCode
{

public function onStart(){
	 
	$pizzas = Pizzas::get();
	$array = [];
	$total = 0;
	foreach($pizzas as $pizza){
	   $id =$pizza->id;
		if (Session::has('pizza'.$id)){
			$price = $pizza->price;
			$title = $pizza->title;
			$quantity = Session::get('pizza'.$id,0);
			
			$total += $quantity*$price;
			
		array_push($array, compact('title', 'price', 'id', 'quantity'));	
		}
	
		
	}
	$this['total'] = $total;
	$this['pizzas'] = $array;
}
public function onSend(){
	$name = post('name');
	$phone = post('phone');
	$address = post('address');
	$order  = post('order');
	$vars = compact('name', 'phone', 'address', 'order');
	
	Mail::send('new.order', $vars, function($message){
		$message->to("samat@method.kz");
		
	});
	
}
}
