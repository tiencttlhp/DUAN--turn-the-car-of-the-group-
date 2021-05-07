<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Comment_New_Href;
use App\Comment_Product_Href;
use App\Product;
use App\News;

class CommentController extends Controller
{
    public function postAddCommentNew(Request $req)
    {

    	$comment=new Comment;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time=date('Y-m-d H:i:s',time());
    	$commentid=$comment->add($req->name,$req->email,$req->phone,$req->content,$time);

    	$t=new Comment_New_Href;
    	$t->add($req->newid,$commentid);
        $news=News::find($req->newid);
        $listComment=$news->getListComment();  
        $str='';
        foreach ($listComment as $comment) {
            $str.='<li class="comment even thread-even depth-1" id="li-comment-13">
                                        <article id="comment-13" class="comment-inner">
                                            <div class="flex-row align-top">
                                                <div class="flex-col">
                                                    <div class="comment-author mr-half">
                                                        <img alt="" src="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=70&amp;d=mm&amp;r=g" data-src="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=70&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=140&amp;d=mm&amp;r=g 2x" data-srcset="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=140&amp;d=mm&amp;r=g 2x" class="avatar avatar-70 photo lazy-load-active" height="70" width="70"> </div>
                                                </div>
                                                
                                                <div class="flex-col flex-grow">
                                                    <cite class="strong fn"><a href="" rel="external nofollow" class="url">'.$comment->name.'</a></cite> <span class="says">bình luận:</span>
                                                    <div class="comment-content">
                                                        <p>'.$comment->content.'</p>
                                                    </div>
                                                    <div class="comment-meta commentmetadata uppercase is-xsmall clear">
                                                        <a href="">
                                                            <time datetime="2018-03-24T14:24:13+00:00" class="pull-left">
                                                                '.$comment->time.' </time>
                                                        </a>
                                                        
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                           
                                        </article>
                                        
                                    </li>';
        }
        return $str;
    }

    public function postAddCommentProduct(Request $req)
    {

    	$comment=new Comment;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time=date('Y-m-d H:i:s',time());
    	$commentid=$comment->add($req->name,$req->email,$req->phone,$req->content,$time);

    	$t=new Comment_Product_Href;
    	$t->add($req->productid,$commentid);
        $product=Product::find($req->productid);
        $listComment=$product->getListComment(); 
        $str='';
        foreach ($listComment as $comment) {
            $str.='<li class="comment even thread-even depth-1" id="li-comment-13">
                                        <article id="comment-13" class="comment-inner">
                                            <div class="flex-row align-top">
                                                <div class="flex-col">
                                                    <div class="comment-author mr-half">
                                                        <img alt="" src="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=70&amp;d=mm&amp;r=g" data-src="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=70&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=140&amp;d=mm&amp;r=g 2x" data-srcset="http://1.gravatar.com/avatar/71d05d14c90dddd19364d80b7ec41474?s=140&amp;d=mm&amp;r=g 2x" class="avatar avatar-70 photo lazy-load-active" height="70" width="70"> </div>
                                                </div>
                                                
                                                <div class="flex-col flex-grow">
                                                    <cite class="strong fn"><a href="" rel="external nofollow" class="url">'.$comment->name.'</a></cite> <span class="says">bình luận:</span>
                                                    <div class="comment-content">
                                                        <p>'.$comment->content.'</p>
                                                    </div>
                                                    <div class="comment-meta commentmetadata uppercase is-xsmall clear">
                                                        <a href="">
                                                            <time datetime="2018-03-24T14:24:13+00:00" class="pull-left">
                                                                '.$comment->time.' </time>
                                                        </a>
                                                        
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                           
                                        </article>
                                        
                                    </li>';
        }
        return $str;
    }

    public function getProductComment($id)
    {
        $product=Product::find($id);
        $listComment=$product->getListComment();       
        return view('employee.pages.listComment',['listComment'=>$listComment,'name'=>$product->productName]);
    }

    public function getNewComment($id)
    {
        $news=News::find($id);
        $listComment=$news->getListComment();       
        return view('employee.pages.new.listComment',['listComment'=>$listComment,'name'=>$news->title,'newid'=>$news->id]);
    }

    public function getDeleteNewComment($id)
    {
        $comment=Comment::find($id);
        $comment_new_href=$comment->getComment_New_Href;
        $comment_new_href->delete();
        $comment->delete();
        return redirect()->back();
    }

    public function getDeleteProductComment($id)
    {
        $comment=Comment::find($id);
        $comment_product_href=$comment->getComment_Product_Href;
        $comment_product_href->delete();
        $comment->delete();
        return redirect()->back();
    }
}
