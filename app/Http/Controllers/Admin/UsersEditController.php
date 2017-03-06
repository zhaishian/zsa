<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersEditController extends Controller
{
    public function postUpdate(Request $request)
    {
       // dd('45');
        // $this->validate($request, [
        //     'nickname' => 'required|regex:/^\S{8,30}$/|unique:user_admin',
        // ],[
        //     'nickname.required' => '用户名不能为空',
        //     'nickname.regex'=>'用户名格式不正确',
        //     'nickname.unique'=>'用户名已存在',           
        // ]);
        $nickname = $request->input('nickname');
        $id = $request->input('id');
        $auth = $request->input('auth');
        $status = $request->input('status');
        $pic = '/uploads/admin/default.jpg';
        if($request->hasFile('pic'))
        {
            $names = md5(rand(1,999999).time());
            $suf = $request->file('pic')->getClientOriginalExtension();
            $request->file('pic')->move('./uploads/admin',$names.'.'.$suf);
            $pic = '/uploads/admin/'.$names.'.'.$suf;
        }
        $res = ['auth'=>$auth,'status'=>$status,'pictrue'=>$pic,'nickname'=>$nickname];
        $pro = DB::table('user_admin')->where('id',$id)->update($res);
        if($pro)
        {
            return redirect('/admin/users')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
