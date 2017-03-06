@extends('admin.common.common')
@section('title','添加管理用户')

@section('content')
<div class="container"><div class="col-md-12" style="height:100px;border:solid 1px white;"></div></div>
<div class="col-lg-8 col-lg-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            添加商品分类
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">  
                    @if (count($errors) > 0)
				   <div class="alert alert-danger alert-dismissable">
				   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li style='list-style:none'>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				    @endif   
                    <div class="col-lg-12">
                    <form role="form" action="/admin/cate" method="post">
                        <div class="form-group">
                            <label>商品类名/商品名</label>
                            <input placeholder="请输入..." class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label>所属分类</label>
                            <select class="form-control" name="cate">
                                <option>总类</option>
                                @foreach($name as $k=>$v)
                                <option>{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>状态　</label>
                            <label class="radio-inline">
                                {{ csrf_field() }}
                                <input type="radio"  value="0" id="optionsRadiosInline1" name="status">启用　
                            </label>
                            <label class="radio-inline">
                                <input type="radio" value="1" id="optionsRadiosInline2" name="status">禁用
                            </label>
                        </div>

                        <button class="btn btn-default" style="margin-left:100px" type="submit">提交</button>
                        <button class="btn btn-default " style="margin-left:260px" type="reset">重置</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
