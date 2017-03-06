<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>后台登录界面</title>
    <link href="/type/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/type/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/type/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="/type/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- 	 <link href="http://evanwukong.blog.163.c/type/admin/blog/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://evanwukong.blog.163.com/blog/js/jquery-1.9.1.min.js"></script>
    <script src="http://evanwukong.blog.163.com/blog/js/bootstrap.min.js"></script>
   
    <script src="http://evanwukong.blog.163.com/blog/js/html5shiv.js"></script>
    <script src="http://evanwukong.blog.163.com/blog/js/respond.min.js"></script>
 -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">登　录</h3>
                    </div>
                    @if(session('error'))
                        <div id="err" class="alert alert-danger alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            {{session('error')}}
                        </div>
                    @endif
                    <div class="panel-body">
                        <form role="form" action="/admin/login/verify" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="管理用户" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                     {{ csrf_field() }}
                                    <input class="form-control" placeholder="用户密码" name="password" type="password" >
                                </div>
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/type/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/type/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/type/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="/type/admin/dist/js/sb-admin-2.js"></script>
</body>
</html>
