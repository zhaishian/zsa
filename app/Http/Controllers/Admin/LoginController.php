<?php

namespace App\Http\Controllers\Admin;
use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{    
    public function getIndex()
    {
        return view('admin.login');
    }
    public function postVerify(Request $request)
    {      
        $password = $request->input('password');
        $username = $request->input('username');
        if(!$username)
        {
            return back()->with('error','用户名输入的内容为空');
        }
        $pro = DB::table('user_admin')->where('username','=',$username)->first();
        if(!$password)
        {
            return back()->with('error','密码输入的内容为空');
        }
        if(!$pro)
        {
            return back()->with('error','用户名不存在');
        }
        if(!$pro->status)
        {
            return back()->with('error','此帐号未激活');
        }
        if (Hash::check($password, $pro->password)) {
             session(['token'=>$pro->token]);
            return redirect('/admin/index/index');
        }else{
            return back()->with('error','帐号密码不正确');
        }
    }
    public function getFlush(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login');
        // dd($request->session()->flush());
    }
}
