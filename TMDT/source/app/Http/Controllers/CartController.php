<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Bill;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getCart()
    {
        $bill=Bill::all();
    	$lastID=1;
        if (count($bill)>0) {
            $lastID=DB::table('bill')->select('id')->orderBy('id','desc')->get()->toArray();
            $lastID=($lastID[0]->id) +1;
        }
        return view('guest.pages.cart.cart',['lastID'=>$lastID]);
        
    }

    public function postUpdateCart(Request $req)
    {
    	$cart=Session::get('cart');
    	$items=$cart->items;
    	foreach ($items as $key => $value) {
    		$qty=$req->cart[$key];
    		$cart->updateCart($key,$qty);
    	}
    	return redirect('gio-hang');
    }
}
