<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Smartdevice;
use App\Accessory;
use Illuminate\Support\Facades\DB;
use Session;
use App\Cart;
use App\Billitem;

class AccessoryController extends Controller
{
    public function getAddAccessory()
    {
    	return view('employee.pages.accessory.add_accessory');
    }

    public function getAllAccessory()
    {
        $list=Accessory::paginate(15);
        return view('guest.pages.accessory.accessorys',['list'=>$list]);
    }

    public function postAccessoryAddCart(Request $req)
    {
        $accessory=Accessory::find($req->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($accessory, $accessory->isProduct->id,$req->quantity);
        $req->session()->put('cart', $cart);
        // Session::forget('cart');
        return redirect('gio-hang');
    }

    public function getAccessoryByProductType($productType)
    {
        $accessory=new Accessory;
        $list=$accessory->doWhere('productType','=',$productType);
        return view('employee.pages.accessory.accessorybyproducttype',['list'=>$list]);
    }

    public function getAccessory($id)
    {
        $accessory=Accessory::find($id);
        $news=DB::table('new')->orderBy('id','desc')->take(10)->get();
        $listComment=($accessory->isProduct)->getListComment();
        return view('guest.pages.accessory.accessory-info',['accessory'=>$accessory,'news'=>$news,'listComment'=>$listComment]);
    }

    public function getEditAccessory($id)
    {
        $accessory=new Accessory;
        $accessory=$accessory->search($id);
        return view('employee.pages.accessory.edit_accessory',['accessory'=>$accessory['accessory'],'product'=>$accessory['product']]);
    }

    public function getListAccessory()
    {
        $list=Accessory::all();
        return view('employee.pages.accessory.list_accessory',['list'=>$list]);
    }

    public function getDeleteAccessory($id)
    {
        $a=Accessory::find($id);
        $product=$a->isProduct;
        $billitems=Billitem::where('productid',$product->id)->get()->toArray();
        if (count($billitems)>0) {
            $product->status=-1;
            $product->save();
        } else {
            $accessory=new Smartphone;
            $accessory->doDelete($id);
        }
        return redirect()->back();
    }

    public function postEditAccessory(Request $req)
    {

        $id=$req->id;
        $productName=$req->productName;
        $quantity=$req->quantity;
        $purchase=$req->purchase;
        $price=$req->price;
        $discountPercent=$req->discountPercent;
        $productType=$req->productType;
        $weight=$req->weight;
        $madein=$req->madein;
        $status=$req->status; 
        $imagesurl=$req->imagesurl; 
        $gift=$req->gift;
        $description=$req->description;

        $accessory=new Accessory;
        if($req->hasFile('imagesurl')){
             $accessory->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,true);
        }
        else{
            $accessory->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$req->old_imagesurl,$gift,$description,false);
        }
        
        return redirect('nhan-vien/phu-kien');
    }

    public function postAddAccessory(Request $req)
    {
    	$productName=$req->productName;
    	$quantity=$req->quantity;
    	$purchase=$req->purchase;
    	$price=$req->price;
    	$discountPercent=$req->discountPercent;
    	$productType=$req->productType;
    	$weight=$req->weight;
    	$madein=$req->madein;
    	$status=$req->status; 
        $imagesurl=$req->imagesurl; 
    	$gift=$req->gift;
        $description=$req->description;

    	$accessory=new Accessory;
    	$accessory->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description);

    	return redirect('nhan-vien/phu-kien');
    }

    public function getAccessoryByLoai($name)
    {
        $accessory=new Accessory;
        $list=$accessory->doWherePagination('productType','=',$name,15);
        return view('guest.pages.accessory.accessorybyloai',['list'=>$list,'loai'=>$name]);
    }
}
