@extends('admin.common.common')

@section('title','后台管理用户修改')

@section('content')
<div class="col-lg-6 col-lg-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            修改管理用户
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
				                                               
                    <form role="form" action="/admin/users/edit/user/update" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success">
                            <label for="inputSuccess" class="control-label">用户名 　</label>
                            <input type="text" id="inputSuccess" name="username" disabled="disabled" placeholder="{{$res->username}}" class="form-control">
                        </div>
                        <div class="form-group has-success">
                            <label for="inputSuccess" class="control-label">用户昵称 　</label>
                            <input type="text" id="inputSuccess" name="nickname"  placeholder="{{$res->nickname}}" class="form-control">
                        </div>
                        <div class="form-group has-error">
                        	<label for="inputSuccess" class="control-label">权限 　</label>
                        	<label><input type="radio"  value="1" id="optionsRadios1" name="auth" @if($res->auth == 1) checked @endif>超级管理员　</label>
						    <label><input type="radio"  value="0" id="optionsRadios1" name="auth" @if($res->auth == 0) checked @endif>普通管理员</label>
                        	
                        </div>
                        <div class="form-group has-error">
                        	<label for="inputSuccess" class="control-label">状态 　</label>
                        	<label><input type="radio"  value="1" id="optionsRadios1" name="status" @if($res->status == 1)checked @endif>启用　</label>
						    <label><input type="radio" value="0" id="optionsRadios1" name="status" @if($res->status == 0)checked @endif>禁用</label>
                        	
                        </div>
                        <div class="form-group has-error">
                        	<label for="inputSuccess" class="control-label">头像 　</label>
                        	<label><img src="{{$res->pictrue}}" alt="" width="90px" height:"90px"></label>
                      	
                        </div>
                        <div class="form-group has-error">
                        	<label for="inputSuccess" class="control-label">更改头像 　</label>
							<label><input type="file" checked="" value="1" id="optionsRadios1" name="pic"></label>
                        </div>
                      	{{ csrf_field() }}
                      	<input type="hidden" name="id" value="{{$res->id}}">
                        <button class="btn btn-outline btn-primary btn-lg btn-block" >提交</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection