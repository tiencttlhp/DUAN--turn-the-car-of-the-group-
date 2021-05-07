<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billitem extends Model
{
    protected $table='billitem';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($productid,$billid,$quantity)
    {
    	$this->productid=$productid;
    	$this->billid=$billid;
    	$this->quantity=$quantity;
    	$this->save();
    }

    public function isProduct()
    {
        return $this->belongsTo('App\Product','productid','id');
    }
}
