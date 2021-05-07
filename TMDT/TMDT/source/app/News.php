<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='new';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($title,$logo,$type,$content,$postDate,$postEmpid)
    {
    	$news = new News;
        $news->title=$title;
        $news->type=$type;
        $news->content=$content;
        $news->postEmpid=$postEmpid;
        $news->postDate=$postDate;
        $file = $logo;
        $filename=time().'-'.$file->getClientOriginalName();
        $file->move('uploads',$filename);  
        $news->logo='uploads/'.$filename; 
        $news->save();
    }

    function doUpdate($id,$title,$logo,$type,$content,$postDate,$postEmpid,$isLogoNew)
    {
    	$news=News::find($id);
    	$news->title=$title;
        $news->type=$type;
        $news->content=$content;
        $news->postEmpid=$postEmpid;
        $news->postDate=$postDate;
        if ($isLogoNew) {
        	$file = $logo;
	        $filename=time().'-'.$file->getClientOriginalName();
	        $file->move('uploads',$filename);  
	        $news->logo='uploads/'.$filename; 
        } else {
        	$news->logo=$logo;
        }
        $news->save();
    }

    public function listCommentHref()
    {
        return $this->hasMany('App\Comment_New_Href','newid','id');
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

    public function getPostEmp()
    {
        return $this->belongsTo('App\User','postEmpid','id');
    }

    public function getCountComment(){
        return $this->hasMany('App\Comment_New_Href','newid','id');
    }
}
