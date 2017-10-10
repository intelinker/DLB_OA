<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>连讯通</title>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</head>
....`12345667890\][<poiiiuytrewq>SDFGHJJKL;;''/.,MMNNBBVVCCXXZZ</poiiiuytrewq>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top"  style="background-color: #FF3B30">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin-right: 30px" href="/">连讯通后台管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            {{--<ul class="nav navbar-nav">--}}
                {{--<li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="/">资讯</a></li>--}}
                {{--<li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="/">笔记</a></li>--}}
                {{--<li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="/">问答</a></li>--}}
                {{--<li class="{{ (Request::is('util*') ? 'active' : '') }}"><a href="/util?datatype=0">编辑</a></li>--}}

            {{--</ul>--}}
            <ul class="nav navbar-nav navbar-right">
                @if(\Illuminate\Support\Facades\Auth::check())
                    {{--<li><a href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a> </li>--}}
                    {{--<li><a href="/user/logout">logout</a></li>--}}


                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">{{Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            {{--<li> <a href="#"><i class="fa fa-user"></i>Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            <li><a href="/user/logout">退出登录</a></li>
                        </ul>
                    </li>




                    <li style="margin: 5px"><img class="media-object img-circle" width="40" alt="图标" src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}"></li>

                {{--@else--}}
                    {{--<li><a href="/user/login">登录</a></li>--}}
                    {{--<li><a href="/user/register">注册</a></li>--}}
                @endif
                {{--<li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>--}}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

</body>
</html>

<?php
