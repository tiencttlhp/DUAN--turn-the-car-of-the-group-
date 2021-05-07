<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function add($username,$password,$fullname,$phonenumber,$email,$avatar)
    {
        $this->username=$username;
        $this->password=$password;
        $this->fullname=$fullname;
        $this->phonenumber=$phonenumber;
        $this->role=0;
        $this->email=$email;
        $file = $avatar;
        $filename=time().'-'.$file->getClientOriginalName();
        $file->move('uploads',$filename);  
        $this->avatar='uploads/'.$filename;
        $this->save();
    }

    public function edit($password,$fullname,$phonenumber,$email,$avatar,$isAvatarNew)
    {
        $this->password=$password;
        $this->fullname=$fullname;
        $this->phonenumber=$phonenumber;
        $this->email=$email;
        if ($isAvatarNew) {
            $file = $avatar;
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move('uploads',$filename);  
            $this->avatar='uploads/'.$filename;
        }
        $this->update();
    }

    public function changeInfo($id,$fullname,$phonenumber,$email,$avatar,$isAvatarNew)
    {
        $user=User::find($id);
        $user->fullname=$fullname;
        $user->phonenumber=$phonenumber;
        $user->email=$email;
        if ($isAvatarNew) {
            $file = $avatar;
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move('uploads',$filename);  
            $user->avatar='uploads/'.$filename;
        }
        $user->save();
    }

    public function changePass($id,$pass)
    {
        $user=User::find($id);
        $user->password=$pass;
        $user->save();
    }
}
