<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeOneController extends Controller
{
    // 主页面
    public function getIndex()
    {
    	return view('home.indexone');
    }
    // 格子浏览模式
    public function getBrowseGrid()
    {
    	return view('home.goods.goodsbrowseonegrid');
    }
    // 列表浏览模式
    public function getBrowseList()
    {
    	return view('home.goods.goodsbrowseonelist');
    }
    // 线下分店
    public function getStore()
    {
    	return view('home.store.storeone');
    }
    public function getDetails()
    {
    	return view('home.goods.goodsdetailsone');
    }
}
