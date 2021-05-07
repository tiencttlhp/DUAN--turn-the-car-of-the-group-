<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$productType,$weight,$madein,$status,$imagesurl,$gift,$description)
    {
    	$product=new Product;
    	$product->productName=$productName;
    	$product->quantity=$quantity;
    	$product->purchase=$purchase;
    	$product->price=$price;
    	$product->discountPercent=$discountPercent;
    	$product->productType=$productType;
        $product->manufacturer=$manufacturer;
    	$product->weight=$weight;
    	$product->madein=$madein;
    	$product->status=$status;
    	$file = $imagesurl;
        $filename=time().'-'.$file->getClientOriginalName();
        $file->move('uploads',$filename);  
        $product->imagesurl='uploads/'.$filename; 
    	$product->gift=$gift;
    	$product->description=$description;
    	$product->save();
    	return $product->id;
    }

    public function edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$manufacturer,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,$isLogoNew)
    {
        $product=Product::find($id);
        $product->productName=$productName;
        $product->quantity=$quantity;
        $product->purchase=$purchase;
        $product->price=$price;
        $product->discountPercent=$discountPercent;
        $product->productType=$productType;
        $product->manufacturer=$manufacturer;
        $product->weight=$weight;
        $product->madein=$madein;
        $product->status=$status;
        if ($isLogoNew) {
            $file = $imagesurl;
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move('uploads',$filename);  
            $product->imagesurl='uploads/'.$filename; 
        } else {
            $product->imagesurl=$imagesurl;
        } 
        $product->gift=$gift;
        $product->description=$description;
        $product->save();
    }

    public function listCommentHref()
    {
        return $this->hasMany('App\Comment_Product_Href','productid','id');
    }

    public function getListComment()
    {
        $listComment=array();
        $listCommentHref=$this->listCommentHref;
        foreach ($listCommentHref as $value) {
            array_push($listComment,$value->getComment);
        }
        return $listComment;
    }
}
