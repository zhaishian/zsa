@extends('admin.common.common')
@section('title','添加管理用户')

@section('content')
<div class="container"><div class="col-md-12" style="height:100px;border:solid 1px white;"></div></div>
<div class="col-lg-6 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            添加管理用户
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
				                                                  
                    <form role="form" action="/admin/users" method="post">
                        <div class="form-group has-success">
                            <label for="inputSuccess" class="control-label">用户名</label>
                            <input type="text" id="inputSuccess" name="username" class="form-control">
                        </div>
                        <div class="form-group has-warning">
                            <label for="inputWarning" class="control-label">密码</label>
                            <input type="password" id="inputWarning" name="password" class="form-control">
                        </div>
                        <div class="form-group has-warning">
                            <label for="inputWarning" class="control-label">确认密码</label>
                            <input type="password" id="inputWarning" name="repassword" class="form-control">
                        </div>
                        <div class="form-group has-error">
                        	<label for="inputSuccess" class="control-label">管理权限 　</label>
                        	<label><input type="radio" checked="" value="1" id="optionsRadios1" name="auth">超级管理员　</label>
						    <label><input type="radio" checked="" value="0" id="optionsRadios1" name="auth">普通管理员</label>
                        	
                        </div>
                      	{{ csrf_field() }}
                        <button class="btn btn-outline btn-primary btn-lg btn-block" >提交</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
