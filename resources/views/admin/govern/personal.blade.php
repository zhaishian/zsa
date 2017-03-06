@extends('admin.common.common')
@section('title','个人信息')

@section('content')
<div class="container"><div class="col-md-12" style="height:2px;border:solid 1px white;"></div></div>
<div class="col-lg-6 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            修改个人信息
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
				                                                  
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group has-error">

							<label>	<a role="button" class="btn btn-default" href="/admin/index/pictrue?id={{$res->id}}"><img src="{{$res->pictrue}}" alt="" width="80px" height="80px" ></a></label>
                        </div>
                        <div class="form-group has-success">
                            <label for="inputSuccess" class="control-label">用户名 　</label>
                            <input type="text" id="inputSuccess" name="username"  placeholder="{{$res->username}}" class="form-control">
                        </div>
                        <div class="form-group has-success">
                            <label for="inputSuccess" class="control-label">用户昵称 　</label>
                            <input type="text" id="inputSuccess" name="nickname"  placeholder="{{$res->nickname}}" class="form-control">
                        </div>
                        <div class="form-group has-success">
                            <label for="inputSuccess" class="control-label">用户密码 　</label>
                            <input type="password" id="inputSuccess" name="password"   class="form-control">
                        </div>
                        <div class="form-group has-success">
                            <label for="inputSuccess" class="control-label">确认密码 　</label>
                            <input type="password" id="inputSuccess" name="repassword"   class="form-control">
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