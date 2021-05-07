<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='bill';
    public $timestamps=false;
    protected $primaryKey='id';
    
    public function add($datetime,$customername,$customeremail,$customeraddress,$customernumber){
    	$this->datetime=$datetime;
    	$this->customername=$customername;
    	$this->customeremail=$customeremail;
    	$this->customeraddress=$customeraddress;
    	$this->customernumber=$customernumber;
    	$this->save();
    }

    public function getBillItem()
    {
        return $this->hasMany('App\Billitem','billid','id');
    }

}
