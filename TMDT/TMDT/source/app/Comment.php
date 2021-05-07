<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($name,$email,$phone,$content,$time)
    {
    	$this->name=$name;
    	$this->email=$email;
    	$this->phone=$phone;
    	$this->content=$content;
        $this->time=$time;
    	$this->save();
    	return $this->id;
    }

    public function getComment_New_Href()
    {
        return $this->hasOne('App\Comment_New_Href','commentid','id');
    }

    public function getComment_Product_Href()
    {
        return $this->hasOne('App\Comment_Product_Href','commentid','id');
    }
}
