<?php 
use samat\pizzas\models\Pizzas;class Cms58135f23ee0f3990883690_3077152373Class extends \Cms\Classes\PartialCode
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
