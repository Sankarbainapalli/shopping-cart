<?php

namespace App;

 // use Illuminate\Database\Eloquent\Model;

class Cart
{
    //
     public $items = null;
   public $totalQty = 0;
   public $totalPrice =0;
   public function _construct($oldcart)
   {
   	if($oldcart){
   		$this->items = $oldcart->items;
   		$this->totalQty=$oldcart->totalQty;
   		$this->totalPrice=$oldcart->totalPrice;

   	}
   }
   public function add($item,$id){
   	$storedItem = ['qty'=> 0, 'price'=> $item->prices,'item'=> $item];
   	if($this->items){
   		if(array_key_exists($id,$this->items)){
   			$storedItem=$this->items[$id];
   		}
   	}
   
   $storedItem['qty']++;
   $storedItem['price'] =$item->prices * $storedItem['qty'];
   $this->items[$id]=$storedItem;
   $this->totalQty++;
   $this->totalPrice += $item->prices;
}
}


