<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getIndex(Request $request)
    {
    	$token = $request->session()->get('token');
    	$res = DB::table('user_admin')->where('token',$token)->first();
    	return view('admin.index',['res'=>$res]);
    }
    public function getPersonal(Request $request)
    {
    	
    	$id = $request->all();
    	$res = DB::table('user_admin')->where('id',$id)->first();
    	// dd($res);
    	return view('admin.govern.personal',['res'=>$res]);
    }
    public function postPersonal(Request $request)
    {
    	dd($request->all());
    }
    public function getPictrue(Request $request)
    {
    	dd($request->all());
    	
    }
}
