<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sel = $request->input('sel',10);
        $sea = $request->input('search');
        $data = $request->all();
        $res = DB::table('user_admin')->where('username','like','%'.$sea.'%')->paginate($sel);
        return view('admin.grvern.grvern',['res'=>$res,'request'=>$request,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grvern.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|regex:/^\S{8,16}$/|unique:user_admin',
            'password' => 'required|regex:/^\w{6,12}$/',
            'repassword'=>'required|same:password',
        ],[
            'username.required' => '用户名不能为空',
            'username.regex'=>'用户名格式不正确',
            'username.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repassword.required'=>'确认密码不能为空',
            'repassword.same'=>'两次密码不一致',
        ]);
       $res =  $request->except(['_token','repassword']);
       $res['password'] = Hash::make($request->input('password'));
       $res['token'] = md5(rand(1,999999).time());
       $result = DB::table('user_admin')->insert($res);
       if($result)
       {
            return redirect('/admin/users');
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = DB::table('user_admin')->where('id',$id)->first();
        return view('admin.govern.edit',['res'=>$res]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = DB::table('user_admin')->where('id',$id)->delete();
        if($res)
        {
            return redirect('/admin/users')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

}
