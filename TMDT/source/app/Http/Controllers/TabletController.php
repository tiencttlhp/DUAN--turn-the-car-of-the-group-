<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Smartdevice;
use App\Tablet;
use Session;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Billitem;

class TabletController extends Controller
{
    public function getAddTablet()
    {
    	return view('employee.pages.tablet.add_tablet');
    }

    public function getAllTablet()
    {
        $list=Tablet::paginate(15);
        return view('guest.pages.tablet.tablets',['list'=>$list]);
    }

    public function postTabletAddCart(Request $req)
    {
        $tablet=Tablet::find($req->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($tablet, $tablet->isProduct->id,$req->quantity);
        $req->session()->put('cart', $cart);
        // Session::forget('cart');
        return redirect('gio-hang');
    }

    public function getTabletByManufacturer($hang)
    {
        $tablet=new Tablet;
        $list=$tablet->doWhere('manufacturer','=',$hang);
        return view('employee.pages.tablet.tabletbymanufacturer',['list'=>$list]);
    }

    public function getEditTablet($id)
    {
        $tablet=new Tablet;
        $tablet=$tablet->search($id);
        return view('employee.pages.tablet.edit_tablet',['tablet'=>$tablet['tablet'],'product'=>$tablet['product'],'smartdevice'=>$tablet['smartdevice']]);
    }

    public function getTablet($id)
    {
        $tablet=Tablet::find($id);
        $news=DB::table('new')->orderBy('id','desc')->take(10)->get();
        $listComment=($tablet->isProduct)->getListComment();
        return view('guest.pages.tablet.tablet-info',['tablet'=>$tablet,'news'=>$news,'listComment'=>$listComment]);
    }

    public function getListTablet()
    {
        $list=Tablet::all();
        return view('employee.pages.tablet.list_tablet',['list'=>$list]);
    }

    public function getDeleteTablet($id)
    {
        $t=Tablet::find($id);
        $product=$t->isProduct;
        $billitems=Billitem::where('productid',$product->id)->get()->toArray();
        if (count($billitems)>0) {
            $product->status=-1;
            $product->save();
        } else {
            $tablet=new Tablet;
            $tablet->doDelete($id);
        }
        return redirect()->back();
    }

    public function postEditTablet(Request $req)
    {
        
        $firstcamera=$req->firstcamera;
        $second=$req->second;
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

        $sim=$req->sim;

        $tablet=new Tablet;
        if($req->hasFile('imagesurl')){
             $tablet->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,true);
        }
        else{
            $tablet->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$req->old_imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,false);
        }
        
        return redirect('nhan-vien/may-tinh-bang');
    }

    public function postAddTablet(Request $req)
    {
    	
    	$firstcamera=$req->firstcamera;
    	$second=$req->second;
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

    	$sim=$req->sim;

    	$tablet=new Tablet;
    	$tablet->add($productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description);

    	return redirect('nhan-vien/may-tinh-bang');
    }

    public function getTabletByHang($name)
    {
        $tablet=new Tablet;
        $list=$tablet->doWherePagination('manufacturer','=',$name,15);
        return view('guest.pages.tablet.tabletbyhang',['list'=>$list,'hang'=>$name]);
    }
}
