<?php 
use samat\pizzas\models\Pizzas;class Cms5810c7810030e980751782_1298821852Class extends \Cms\Classes\PartialCode
{

public function onStart(){
	$sum = 0;
	$pizzas = Pizzas::get();
	
	foreach($pizzas as $pizza){
		if(Session::has('pizza'.$pizza->id)){
			
			$sum += Session::get('pizza'.$pizza->id,0); 
			
		}
		
	}
	$this['quantity'] = $sum;
	
}
}
