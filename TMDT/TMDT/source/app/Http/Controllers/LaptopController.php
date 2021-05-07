<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Laptop;
use Session;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Billitem;

class LaptopController extends Controller
{
    public function getAddLaptop()
    {
    	return view('employee.pages.laptop.add_laptop');
    }

    public function getAllLaptop()
    {
        $list=Laptop::paginate(15);
        return view('guest.pages.laptop.laptops',['list'=>$list]);
    }

    public function getLaptopByManufacturer($hang)
    {
        $laptop=new Laptop;
        $list=$laptop->doWhere('manufacturer','=',$hang);
        return view('employee.pages.laptop.laptopbymanufacturer',['list'=>$list]);
        
    }

    public function postLaptopAddCart(Request $req)
    {
        $laptop=Laptop::find($req->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($laptop, $laptop->isProduct->id,$req->quantity);
        $req->session()->put('cart', $cart);
        // Session::forget('cart');
        return redirect('gio-hang');
    }

    public function getLaptop($id)
    {
        $laptop=Laptop::find($id);
        $news=DB::table('new')->orderBy('id','desc')->take(10)->get();
        $listComment=($laptop->isProduct)->getListComment();
        return view('guest.pages.laptop.laptop-info',['laptop'=>$laptop,'news'=>$news,'listComment'=>$listComment]);
    }

    public function postAddLaptop(Request $req)
    {
    	$firstcamera=$req->firstcamera;
    	$chipset=$req->chipset;
    	$gpu=$req->gpu;
    	$ram=$req->ram;
    	$connections=$req->connections;
    	$memory=$req->memory;
    	$battery=$req->battery;
    	$design=$req->design;
    	$utility=$req->utility;
    	$screen=$req->screen;

    	$productName=$req->productName;
    	$quantity=$req->quantity;
    	$purchase=$req->purchase;
    	$price=$req->price;
    	$discountPercent=$req->discountPercent;
    	$manufacturer=$req->manufacturer;
    	$weight=$req->weight;
    	$madein=$req->madein;
    	$status=$req->status; 
        $imagesurl=$req->imagesurl; 
    	$gift=$req->gift;
        $description=$req->description;

    	$keyboard=$req->keyboard;

    	$smartphone=new Laptop;
    	$smartphone->add($productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$keyboard,$description);

    	return redirect('nhan-vien/laptop');
    }

    public function getEditLaptop($id)
    {
    	$laptop=new Laptop;
        $laptop=$laptop->search($id);
        return view('employee.pages.laptop.edit_laptop',['laptop'=>$laptop['laptop'],'product'=>$laptop['product'],'smartdevice'=>$laptop['smartdevice']]);
    }

    public function postEditLaptop(Request $req)
    {
    	$firstcamera=$req->firstcamera;
        $chipset=$req->chipset;
        $gpu=$req->gpu;
        $ram=$req->ram;
        $connections=$req->connections;
        $memory=$req->memory;
        $battery=$req->battery;
        $design=$req->design;
        $utility=$req->utility;
        $screen=$req->screen;

        $id=$req->id;
        $productName=$req->productName;
        $quantity=$req->quantity;
        $purchase=$req->purchase;
        $price=$req->price;
        $discountPercent=$req->discountPercent;
        $manufacturer=$req->manufacturer;
        $weight=$req->weight;
        $madein=$req->madein;
        $status=$req->status; 
        $imagesurl=$req->imagesurl; 
        $gift=$req->gift;
        $description=$req->description;

        $keyboard=$req->keyboard;

        $laptop=new Laptop;
        if($req->hasFile('imagesurl')){
             $laptop->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$keyboard,$description,true);
        }
        else{
            $laptop->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$req->old_imagesurl,$gift,$firstcamera,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$keyboard,$description,false);
        }
        
        return redirect('nhan-vien/laptop');
    }

    public function getDeleteLaptop($id)
    {
    	$l=Laptop::find($id);
        $product=$l->isProduct;
        $billitems=Billitem::where('productid',$product->id)->get()->toArray();
        if (count($billitems)>0) {
            $product->status=-1;
            $product->save();
        } else {
            $laptop=new Laptop;
            $laptop->doDelete($id);
        }
        return redirect()->back();
    }

    public function getListLaptop()
    {
    	$list=Laptop::all();
        return view('employee.pages.laptop.list_laptop',['list'=>$list]);
    }

    public function getLaptopByHang($name)
    {
        $laptop=new Laptop;
        $list=$laptop->doWherePagination('manufacturer','=',$name,15);
        return view('guest.pages.laptop.laptopbyhang',['list'=>$list,'hang'=>$name]);
    }
}
