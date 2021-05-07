<?php
namespace App;
use Session;
use App\Smartphone;
class Cart{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;
	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}
	public function add($item, $id,$qty){
		$storedItem = ['qty' => 0, 'price' => $item->isProduct->price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['qty']+=$qty;
		$storedItem['price'] = $item->isProduct->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQty+=$qty;
		$this->totalPrice += $item->isProduct->price*$qty;
	}
	public function remove($id){
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}
		}
		$this->totalQty -= $storedItem['qty'];
		$this->totalPrice -= $storedItem['item']->isProduct->price * $storedItem['qty'];
		unset($this->items[$id]);
		Session::put('cart', $this);
	}
	public function decrease($id){
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['qty']--;
		$storedItem['price'] = $storedItem['item']->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQty -= 1;
		$this->totalPrice -= $storedItem['item']->price;
		Session::put('cart', $this);
	}
	public function increase($id){
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['qty']++;
		$storedItem['price'] = $storedItem['item']->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQty += 1;
		$this->totalPrice += $storedItem['item']->price;
		Session::put('cart', $this);
	}
	public function removeAll(){
		$this->items = null;
		$this->totalPrice = 0;
		$this->totalQty = 0;
	}

	public function updateCart($id,$qty)
	{
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}
		}
		$this->totalQty-=$storedItem['qty'];
		$this->totalPrice -= $storedItem['item']->isProduct->price*$storedItem['qty'];
		$storedItem['qty']=$qty;
		$storedItem['price'] = $storedItem['item']->isProduct->price * $qty;
		$this->totalQty+=$qty;
		$this->totalPrice+=$storedItem['item']->isProduct->price*$qty;
		$this->items[$id]=$storedItem;
		Session::put('cart', $this);
	}
}
?>