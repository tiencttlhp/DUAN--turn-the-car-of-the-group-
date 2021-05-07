<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function getNews()
    {
        $news= News::paginate(9);
    	return view('guest.pages.new.news',['news'=>$news]);
    }

    public function getNewByLoai($name)
    {
        $news=News::where('type',$name)->paginate(9);
        return view('guest.pages.new.newbytheloai',['news'=>$news,'loai'=>$name]);
    }

    public function getListNews()
    {
        $news= News::all();
        return view('employee.pages.new.news',['news'=>$news]);
    }

    public function getEditNew($id)
    {
        $news=News::find($id)->toArray();
        return view('employee.pages.new.new_edit',['news'=>$news]);
    }
    public function getNew($id)
    {
        $news=News::find($id);
        $listComment=$news->getListComment();
        $news=$news->toArray();
        return view('guest.pages.new.new',['news'=>$news,'listComment'=>$listComment]);
    }

    public function getPostNews()
    {
    	return view('employee.pages.new.post_new');
    }

    public function postPostNews(Request $req)
    {
        $news=new News;
        $news->add($req->title,$req->logo,$req->type,$req->content,date('Y-m-d'),session('nhan-vien')->id);
        return redirect('nhan-vien/danh-sach-tin-tuc');;
    }

    public function postEditNews(Request $req)
    {
        $news=new News;
        if($req->hasFile('logo')){
             $news->doUpdate($req->id,$req->title,$req->logo,$req->type,$req->content,date('Y-m-d'),1,true);
        }
        else{
            $news->doUpdate($req->id,$req->title,$req->old_logo,$req->type,$req->content,date('Y-m-d'),1,false);
        }
        return redirect('nhan-vien/danh-sach-tin-tuc');
    }

    public function getDeleteNew($id)
    {
       $news=News::find($id);
       $news->delete();
       echo "Xóa xong";
       return redirect('nhan-vien/danh-sach-tin-tuc');
    }
}
