<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smartdevice extends Model
{
    protected $table='smartdevice';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen)
    {
    	$smartdevice=new Smartdevice;
    	$smartdevice->firstcamera=$firstcamera;
    	$smartdevice->second=$second;
    	$smartdevice->chipset=$chipset;
    	$smartdevice->gpu=$gpu;
    	$smartdevice->ram=$ram;
    	$smartdevice->connections=$connections;
    	$smartdevice->memory=$memory;
    	$smartdevice->battery=$battery;
    	$smartdevice->design=$design;
    	$smartdevice->utility=$utility;
    	$smartdevice->screen=$screen;
    	$smartdevice->save();
    	return $smartdevice->id;
    }

    public function edit($id,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen)
    {
        $smartdevice=Smartdevice::find($id);
        $smartdevice->firstcamera=$firstcamera;
        $smartdevice->second=$second;
        $smartdevice->chipset=$chipset;
        $smartdevice->gpu=$gpu;
        $smartdevice->ram=$ram;
        $smartdevice->connections=$connections;
        $smartdevice->memory=$memory;
        $smartdevice->battery=$battery;
        $smartdevice->design=$design;
        $smartdevice->utility=$utility;
        $smartdevice->screen=$screen;
        $smartdevice->save();
        return $smartdevice->id;
    }
}
