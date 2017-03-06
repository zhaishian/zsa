@extends('admin.common.common')

@section('title','管理用户列表')

@section('content')
<style type="text/css">
	table td{
		text-align:center;
	}
	table th{
		text-align:center;
	}
</style>
<div class="panel panel-default">
<div class="panel-heading">
    管理用户列表
</div>
@if(session('success'))
	<div id="suc" class="alert alert-success alert-dismissable">
   		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
   		{{session('success')}}
	</div>
@endif
@if(session('error'))
	<div id="err" class="alert alert-danger alert-dismissable">
   		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
   		{{session('error')}}
	</div>
@endif
<div class="panel-body">
    <div class="dataTable_wrapper ">
        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
            	<form action="/admin/users" method="get">
                <div class="col-sm-6">
                    <div class="dataTables_length" id="dataTables-example_length">
                    
                        <label>
                            显示
                            <select name="sel" name="num" aria-controls="dataTables-example"
                            class="form-control input-sm">
                                <option value="10"  @if( $request->input('sel')==10) selected="selected" @endif>10</option>
                                <option value="25"  @if( $request->input('sel')==25) selected="selected" @endif>25</option>
                                <option value="50"  @if( $request->input('sel')==50) selected="selected" @endif>50</option>
                                <option value="100" @if( $request->input('sel')==100) selected="selected" @endif >100</option>
                            </select>
                            条数据
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter col-lg-12" style="margin-left:230px" >
                        <label>
                          
                            <input type="text" name="search" id="search" value="{{$request->input('search')}}" class="form-control input-sm" placeholder="请输入查询内容" aria-controls="dataTables-example">
                        	<button class="btn btn-info" >查询</button>
                        </label>
                    </div>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer "
                    role="grid" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example"
                                rowspan="1" colspan="1" style="width:100px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    用户ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                colspan="1" style="width: 100px;" aria-label="Browser: activate to sort column ascending">
                                    用户名
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                colspan="1" style="width: 100px;" aria-label="Browser: activate to sort column ascending">
                                    用户昵称
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                colspan="1" style="width: 80px;" aria-label="Platform(s): activate to sort column ascending">
                                    用户头像
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                colspan="1" style="width: 153px;" aria-label="Engine version: activate to sort column ascending">
                                    用户权限
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                colspan="1" style="width: 100px;" aria-label="CSS grade: activate to sort column ascending">
                                    用户状态
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                colspan="1" style="width: 111px;" aria-label="CSS grade: activate to sort column ascending">
                                    操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($res as $k=>$v)
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">
                                    {{$v->id}}
                                </td>
                                <td>
                                    {{$v->username}}
                                </td>
                                <td>
                                    {{$v->nickname}}
                                </td>
                                <td>                  
                                <img src="{{$v->pictrue}}" alt="" width="60px" height="60px">
                                </td>
                                <td class="center">
                                     {{str_replace(['0','1'],['普通管理员','超级管理员'],$v->auth)}}
                                </td>
                                <td class="center">
                                   {{str_replace(['0','1'],['未激活','激活'],$v->status)}}
                                </td>
                                <td class="center">
                                	<div class="col-sm-6">
	                                  	<form action="/admin/users/{{$v->id}}" method="post">
	                                    	{{ csrf_field()}}										
											<input type="hidden" name="_method" value="PUT">
											<button class="btn btn-primary">修改</button>
	                                    </form>
									</div>
                                    <div class="col-sm-6">
	                                    <form action="/admin/users/{{$v->id}}" method="post">
	                                    	{{ csrf_field()}}									
											<input type="hidden" name="_method" value="DELETE">
											<button class="btn btn-primary" >删除</button>
	                                    </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" >                   
                        {!! $res->appends($data)->render() !!}                    
                </div>
            </div>
        </div>
    </div>
</div>                      
</div>
@endsection

@section('js')
<!-- alert($); -->
setTimeout(function(){
	$('#suc').slideUp(1000);		
},3000);
setTimeout(function(){
	$('#err').slideUp(1000);		
},3000);
@endsection