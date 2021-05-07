<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Tablet;
use App\Accessory;
use App\Laptop;

class GuestController extends Controller
{
    public function getHome()
    {
        $s=new Smartphone;
    	$smartphones=$s->doWhere('manufacturer','=','iphone');
        $smartphones1=$s->doWhereLimit('product.discountPercent','>',0,5);
    	$tablets=Tablet::take(10)->get();
    	$accessorys=Accessory::take(10)->get();
        $laptops=Laptop::take(8)->get();
    	$news=News::take(3)->get();
    	$news1=News::skip(3)->take(3)->get();
    	$news2=News::skip(6)->take(3)->get();
    	return view('guest.pages.home',['smartphones'=>$smartphones,'smartphones1'=>$smartphones1,'tablets'=>$tablets,'accessorys'=>$accessorys,'news'=>$news,'news1'=>$news1,'news2'=>$news2,'laptops'=>$laptops]);
    }

    public function getDevelopingPage()
    {
    	return view('guest.pages.developing-pages');
    }

    public function getHelp()
    {
        return view('guest.pages.huong-dan');
    }
}
