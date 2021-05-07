<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_New_Href extends Model
{
    protected $table='comment_new_href';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($newid,$commentid)
    {
    	$this->newid=$newid;
    	$this->commentid=$commentid;
    	$this->save();
    }

    public function getComment()
    {
    	return $this->belongsTo('App\Comment','commentid','id');
    }
}
