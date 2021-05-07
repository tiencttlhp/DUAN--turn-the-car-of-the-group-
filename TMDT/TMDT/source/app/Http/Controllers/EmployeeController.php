<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Bill;
use Session;

class EmployeeController extends Controller
{
    public function getHome()
    {
        $news_left=News::orderBy('id','desc')->take(3)->get();
        $news_right=News::orderBy('id','desc')->skip(3)->take(3)->get();
        $bills=Bill::orderBy('id','desc')->take(5)->get();
    	return view('employee/pages/home',['news_left'=>$news_left,'news_right'=>$news_right,'bills'=>$bills]);
    }

    public function postCheckUserName(Request $req)
    {
        $user=User::where('username',$req->username)->get();
        if(count($user)>0){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function postLogin(Request $req)
    {
        $username=$req->username;
        $password=$req->password;
        $user=User::where('username',$username)->where('password',$password)->where('role',0)->get();
        if (count($user)>0) {
            Session::put('nhan-vien', $user[0]);
            return redirect('nhan-vien/trang-chu');
        } else {
            return redirect('nhan-vien/dang-nhap')->with('thong-bao','Sai tên đăng nhập hoặc mật khẩu.');
        }
        
    }

    public function getLogin()
    {
    	return view('employee/pages/login');
    }

    public function getDeleteEmployee($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('admin/nhan-vien');
    }

    public function getInfo()
    {
        $user=User::find(session('nhan-vien')->id);
    	return view('employee/pages/info',['user'=>$user]);
    }

    public function getAddEmployee()
    {
        return view('admin.pages.add_employee');
    }

    public function getEmployees()
    {
        $list=User::where('role',0)->get();
        return view('admin.pages.employees',['list'=>$list]);
    }

    public function postAddEmployee(Request $req)
    {
        $user = new User;
        $user->add($req->username,$req->password,$req->fullname,$req->digits,$req->email,$req->styled_file);
        return redirect('admin/nhan-vien');
    }

    public function getEditEmployee($id)
    {
        $user=User::find($id);
        return view('admin.pages.edit_employee',['user'=>$user]);
    }

    public function postEditEmployee(Request $req)
    {
        $user=User::find($req->id);
        if ($req->hasFile('avatar_new')) {
            $user->edit($req->password,$req->fullname,$req->digits,$req->email,$req->avatar_new,true);
        }
        else{
            $user->edit($req->password,$req->fullname,$req->digits,$req->email,$req->old_avatar,false);
        }
        return redirect('admin/nhan-vien');
    }

    public function getLogout()
    {
        Session::forget('nhan-vien');
        return redirect('nhan-vien/dang-nhap');
    }

    public function postChangePass(Request $req)
    {
        $user=new User;
        $user->changePass($req->id,$req->password);
        $user=User::find($req->id);
        Session::put('nhan-vien',$user);
        return redirect('nhan-vien/thong-tin');
    }

    public function postChangeInfoE(Request $req)
    {
        $user=new User;
        $fullname=$req->fullname;
        $phonenumber=$req->phonenumber;
        $email=$req->email;
        if ($req->hasFile('avatar_new')) {
            $user->changeInfo($req->id,$fullname,$phonenumber,$email,$req->avatar_new,true);
        }
        else{
            $user->changeInfo($req->id,$fullname,$phonenumber,$email,$req->old_avatar,false);
        }
        $user=User::find($req->id);
        Session::put('nhan-vien',$user);
        
        return redirect('nhan-vien/thong-tin');
    }

    
}
