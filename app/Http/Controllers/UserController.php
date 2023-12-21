<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function registration()
    {
        return view('registration');
    }
    public function login()
    {
        return view('login');
    }
    public function store(Request $request):RedirectResponse
    {
        $userinfo=$request->only('first_name','last_name','country','dob','email','phone_number','password','user_type');
        $userinfo['password'] = Hash::make($userinfo['password']);
        User::create($userinfo);
        return redirect()->route('loginUser')->with(['success','Your information has been submited']);
    }
    public function loginDashboard(Request $request):RedirectResponse
    {
        $credential = $request->validate([
           'email'=>'required | email',
            'password'=>'required'
        ]);
        if (Auth::attempt($credential))
        {
            $request->session()->regenerate();
            switch ($request){
                case(Auth::user()->user_type == 1):
                    return redirect('admin');
                    break;
                case (Auth::user()->user_type == 2):
                    return redirect('users');
                    break;
                case (Auth::user()->user_type == 3):
                    return redirect('shop');
            }
        }
        return redirect()->route('loginUser')->with('fail','Wrong username or password');
    }
    public function admin()
    {
        $users = Auth::user();
        return view('admin.admin',compact('users'));
    }
    public function user()
    {
        $users = Auth::user();
        return view('user.users',compact('users'));
    }
    public function shopIndex()
    {   $users = Auth::user();
        return view('delivery.shop.shop-users',compact('users'));
    }
    public function action()
    {
        $userinfo= Auth::user();
        return view('admin.action',compact('userinfo'));
    }
    public function update(Request $request):RedirectResponse
    {
        User::where('id',$request->id)->update($request->only('first_name','last_name','country','dob','email','phone_number'));
        return redirect()->route('admin')->with(["success",'Your information has been updated']);
    }
    public function distroy(int $id):RedirectResponse
    {
        User::where('id',$id)->delete();
        return redirect()->route('registrationUser')->with(["success",'Your profile has been deleted']);
    }
    public function logout (Request $request):RedirectResponse
    {
        Auth::logout(); Session::flush();
        return redirect()->route('loginUser');
    }

}
