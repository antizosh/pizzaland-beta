<?php 
use samat\pizzas\models\Pizzas;class Cms5810c780ea032881523434_1811960437Class extends \Cms\Classes\PageCode
{

public function onStart(){
	$pizzas = Pizzas::where('available', 1)->get();
	
	$this['menu'] = $pizzas;
	
}
public function onAdd(){
	$pizza_id = post('pizza_id');
	$quantity = post('quantity');
	
	if ($quantity > 0){
		Session::put('pizza'.$pizza_id, $quantity + Session::get('pizza'.$pizza_id,0));
		
	}
	
	
	
}
}
