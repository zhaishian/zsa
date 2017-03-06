<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="/type/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/type/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/type/admin/dist/css/timeline.css" rel="stylesheet">
    <link href="/type/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="/type/admin/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="/type/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/index/index">后台首页</a>
            </div>
            <!-- 这是右上角的图标 -->
            









            <ul class="nav navbar-top-links navbar-right">
                <!-- 信息通知 -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/admin/index/personal?id={{$res->id}}"><i class="fa fa-user fa-fw"></i> 用户信息</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/admin/login/flush"><i class="fa fa-sign-out fa-fw"></i> 注销</a>
                        </li>
                    </ul>
                </li>
            </ul>







            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul id="side-menu" class="nav">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" placeholder="搜索..." class="form-control">
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li> 
                       <li class="">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 管理员管理<span class="fa arrow"></span></a>                           
                            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 80px;">
                                <li>
                                    <a href="/admin/users/create">添加管理用户</a>
                                </li>
                                <li>
                                     <a href="/admin/users">管理用户列表</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 用户管理<span class="fa arrow"></span></a>                           
                            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 80px;">
                                <li>
                                    <a href="#">添加用户</a>
                                </li>
                                <li>
                                    <a href="#">用户列表</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 分类管理<span class="fa arrow"></span></a>                           
                            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 80px;">
                                <li>
                                    <a href="/admin/cate/create">添加分类</a>
                                </li>
                                <li>
                                    <a href="#">商品类列表</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 商品管理<span class="fa arrow"></span></a>                           
                            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 80px;">
                                <li>
                                    <a href="#">添加商品</a>
                                </li>
                                <li>
                                    <a href="#">商品列表</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="active" href="#"><i class="fa fa-edit fa-fw"></i> 订单列表</a>
                        </li>
                        <li>
                            <a class="active" href="#"><i class="fa fa-edit fa-fw"></i> 库存列表</a>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 支付管理<span class="fa arrow"></span></a>                           
                            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 80px;">
                                <li>
                                    <a href="#">添加支付</a>
                                </li>
                                <li>
                                    <a href="#">支付列表</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 物流管理<span class="fa arrow"></span></a>                           
                            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 80px;">
                                <li>
                                    <a href="#">添加物流</a>
                                </li>
                                <li>
                                    <a href="#">物流列表</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="active" href="#"><i class="fa fa-edit fa-fw"></i> 评论列表</a>
                        </li>       
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper" style="min-height: 342px;">
        @section('content')


        <!-- 这是空白区 -->

        @show
        </div>
    </div>
    <script src="/type/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/type/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/type/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="/type/admin/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
    @section('js')

    @show
    </script>
    <script type="text/javascript">
    // $('.active').find('a').click(function(){
    //     $(this).find('ul').attr('class','nav nav-second-level collapseing');
    //     $(this).find('ul').attr('aria-expanded','false');
    //     $(this).find('ul').css('height','80px');
    // });
    // $('.active').find('ul').attr('class',"nav nav-second-level collapse in");
    // $('.active').find('ul').attr('aria-expanded',"true");
    // $('.active').find('ul').attr('style','');
    </script>
</body>
</html>
