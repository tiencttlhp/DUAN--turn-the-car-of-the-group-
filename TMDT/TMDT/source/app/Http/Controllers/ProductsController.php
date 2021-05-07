<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use Session;
use App\Cart;
use App\Tablet;
use App\Accessory;
use App\Laptop;

class ProductsController extends Controller
{
    public function getSearch(Request $req)
    {
    	$smartphone=new Smartphone;
        $list1=$smartphone->doWhere('productName','like','%'.$req->content_search.'%');
        $laptop=new Laptop;
        $list2=$laptop->doWhere('productName','like','%'.$req->content_search.'%');
        $tablet=new Tablet;
        $list3=$tablet->doWhere('productName','like','%'.$req->content_search.'%');
        $accessory=new Accessory;
        $list4=$accessory->doWhere('productName','like','%'.$req->content_search.'%');
        $list=array($list1,$list2,$list3,$list4);
        return view('guest.pages.search_result',['list1'=>$list1,'list2'=>$list2,'list3'=>$list3,'list4'=>$list4,'content_search'=>$req->content_search]);
    }

    public function getProduct($id)
    {
    	return view('guest.pages.product-info');
    }

    public function getAddProductPage()
    {
    	return view('employee/pages/add_product');
    }

    public function getProductList()
    {
    	return view('employee/pages/smartphone_list');
    }

    public function getDeleteProductInCart($id)
    {
        $cart = Session::get('cart');
        $cart->remove($id);
        if($cart->items==null){
            Session::forget('cart');
        }
        return redirect()->back();
    }
}
