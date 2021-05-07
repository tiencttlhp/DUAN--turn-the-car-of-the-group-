<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tablet extends Model
{
    protected $table='tablet';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description)
    {
    	$smartdevice=new Smartdevice;
    	$product=new Product;

    	$tablet=new Tablet;
    	$tablet->productid=$product->add($productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,'tablet',$weight,$madein,$status,$imagesurl,$gift,$description);
    	$tablet->smartdeviceid=$smartdevice->add($firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
        $tablet->sim=$sim;
    	$tablet->save();
    }

    public function edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,$isLogoNew)
    {
        $smartdevice=new Smartdevice;
        $product=new Product;

        $tablet=Tablet::find($id);
        $product->edit($tablet->productid,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,'tablet',$weight,$madein,$status,$imagesurl,$gift,$description,$isLogoNew);
        $smartdevice->edit($tablet->smartdeviceid,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
        $tablet->sim=$sim;
        $tablet->save();
    }

    public function search($id)
    {
    	$tablet=Tablet::find($id);
        $product=Product::find($tablet->productid)->toArray();
        $smartdevice=Smartdevice::find($tablet->smartdeviceid)->toArray();
        $tablet=$tablet->toArray();
        return array('tablet'=>$tablet,'product'=>$product,'smartdevice'=>$smartdevice);
    }

    public function isProduct()
    {
        return $this->belongsTo('App\Product','productid','id');
    }

    public function getSmartDevice()
    {
        return $this->belongsTo('App\Smartdevice','smartdeviceid','id');
    }

    public function doDelete($id)
    {
        $tablet=Tablet::find($id);
        $product=Product::find($tablet->productid);
        $smartdevice=Smartdevice::find($tablet->smartdeviceid);
        $tablet->delete();
        $smartdevice->delete();
        $product->delete();
    }

    public function doWhere($x1,$x2,$x3)
    {
        return DB::table('tablet')
        ->join('product','productid','=','product.id')
        ->select(DB::Raw('tablet.id as tabletid,product.*'))
        ->where($x1,$x2,$x3)
        ->get();
    }

    public function doWherePagination($x1,$x2,$x3,$x4)
    {
        return DB::table('tablet')
        ->join('product','productid','=','product.id')
        ->select(DB::Raw('tablet.id as tabletid,product.*'))
        ->where($x1,$x2,$x3)
        ->paginate($x4);
    }
}
