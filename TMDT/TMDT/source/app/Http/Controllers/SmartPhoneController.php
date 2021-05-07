<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Smartdevice;
use App\Smartphone;
use Session;
use App\Cart;
use Illuminate\Support\Facades\DB;
use App\Billitem;

class SmartPhoneController extends Controller
{
    public function getAddSmartPhone()
    {
    	return view('employee.pages.smartphone.add_smartphone');
    }

    public function postSmartPhoneAddCart(Request $req)
    {
        $smartphone=Smartphone::find($req->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($smartphone, $smartphone->isProduct->id,$req->quantity);
        $req->session()->put('cart', $cart);
        return redirect('gio-hang');
    }

    public function getSmartPhone($id)
    {
        $smartphone=Smartphone::find($id);
        $news=DB::table('new')->orderBy('id','desc')->take(10)->get();
        $listComment=($smartphone->isProduct)->getListComment();
        return view('guest.pages.smartphone.smartphone-info',['smartphone'=>$smartphone,'news'=>$news,'listComment'=>$listComment]);
    }

    public function getEditSmartPhone($id)
    {
        $smartphone=new Smartphone;
        $smartphone=$smartphone->search($id);
        return view('employee.pages.smartphone.edit_smartphone',['smartphone'=>$smartphone['smartphone'],'product'=>$smartphone['product'],'smartdevice'=>$smartphone['smartdevice']]);
    }

    public function getListSmartPhone()
    {
        $list=Smartphone::all();
        return view('employee.pages.smartphone.list_smartphone',['list'=>$list]);
    }

    public function getSmartPhoneByManufacturer($hang)
    {
        $smartphone=new Smartphone;
        $list=$smartphone->doWhere('manufacturer','=',$hang);
        return view('employee.pages.smartphone.smartphonebymanufacturer',['list'=>$list]);
    }

    public function getDeleteSmartPhone($id)
    {
        $s=Smartphone::find($id);
        $product=$s->isProduct;
        $billitems=Billitem::where('productid',$product->id)->get()->toArray();
        if (count($billitems)>0) {
            $product->status=-1;
            $product->save();
        } else {
            $smartphone=new Smartphone;
            $smartphone->doDelete($id);
        }
        return redirect()->back();
    }

    public function postEditSmartPhone(Request $req)
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

        $smartphone=new Smartphone;
        if($req->hasFile('imagesurl')){
             $smartphone->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,true);
        }
        else{
            $smartphone->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$req->old_imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,false);
        }
        
        return redirect('nhan-vien/dien-thoai');
    }

    public function postAddSmartPhone(Request $req)
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

    	$smartphone=new Smartphone;
    	$smartphone->add($productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description);

    	return redirect('nhan-vien/dien-thoai');
    }

    public function getAllSmartPhone()
    {
        $list=Smartphone::paginate(15);
        return view('guest.pages.smartphone.smartphones',['list'=>$list]);
    }

    public function getSmartPhoneByHang($name)
    {
        $smartphone=new Smartphone;
        $list=$smartphone->doWherePagination('manufacturer','=',$name,15);
        return view('guest.pages.smartphone.smartphonebyhang',['list'=>$list,'hang'=>$name]);
    }

    public function getAllKhuyenMai()
    {
        $list=DB::table('smartphone')
        ->join('product','productid','=','product.id')
        ->select(DB::Raw('smartphone.id as smartphoneid,product.*'))
        ->where('product.discountPercent','>',0)
        ->paginate(15);
        return view('guest.pages.smartphone.smartphonekhuyenmai',['list'=>$list]);
    }
}
