<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_Product_Href extends Model
{
    protected $table='comment_product_href';
    public $timestamps=false;
    protected $primaryKey='id';

    public function getComment()
    {
    	return $this->belongsTo('App\Comment','commentid','id');
    }

    public function add($productid,$commentid)
    {
    	$this->productid=$productid;
    	$this->commentid=$commentid;
    	$this->save();
    }
}
