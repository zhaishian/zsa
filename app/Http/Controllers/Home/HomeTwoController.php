<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeTwoController extends Controller
{
        // 主页面
    public function getIndex()
    {
    	return view('home.indextwo');
    }
    // 格子浏览模式
    public function getBrowseGrid()
    {
    	return view('home.goods.goodsbrowsetwogrid');
    }
    // 列表浏览模式
    public function getBrowseList()
    {
    	return view('home.goods.goodsbrowsetwolist');
    }
    // 线下分店
    public function getStore()
    {
    	return view('home.store.storetwo');
    }
    public function getDetails()
    {
    	return view('home.goods.goodsdetailstwo');
    }
}
