{{--@extends('app');--}}

{{--@section('content');--}}
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>{{ $article->title }}</title>

<link rel="stylesheet" href="/css/bootstrap.css">
{{--<link rel="stylesheet" href="/css/font-awesome.css">--}}
{{--<link rel="stylesheet" href="/css/style.css">--}}

    <div class="container">

        <div class="jumbotron">
            <div class="container">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-circle" width="64" alt="图标" src="{{$article->user->avatar}}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">{{$article->title}}</h3>
                                    <h5 class="blog-post-meta" style="color: darkgray">{{$article->user->name}}</h5>
                                    <h5  style="color: darkgray">{{$article->created_at}}</h5>
                                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->id == $article->created_by)
                                        <a class="btn btn-lg btn-primary pull-right" methods="get" href='/article/{!! $article->id !!}/edit' role="button">编辑信息</a>
                                    @endif
                                    {{--{{$article->description}}--}}
                                </div>
                            </div>
            </div>
            <h2>
            </h2>
        </div>
    </div>


    <div class="container">
        <div class="col-xs-12 blog-main">

            <div class="blog-post ">





                <p class="lead" style="font-size: 20px">{{$article->content}}</p>
                {{--<h3>Sub-heading</h3>--}}
                {{--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>--}}
                {{--<pre><code>Example code block</code></pre>--}}
                {{--<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>--}}
                {{--<h3>Sub-heading</h3>--}}
                {{--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>--}}
                {{--<ul>--}}
                    {{--<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>--}}
                    {{--<li>Donec id elit non mi porta gravida at eget metus.</li>--}}
                    {{--<li>Nulla vitae elit libero, a pharetra augue.</li>--}}
                {{--</ul>--}}
{{--                {{$article->comments}}--}}
                <hr>
                <blockquote>
                    {{--<h2 class="blog-post-title">{{$article->title}}</h2>--}}
                    <h4>回复列表({{count($article->comments)}})</h4>
                </blockquote>
            @foreach($article->comments as $comment)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" width="35" alt="图标" src="{{$comment->user->avatar}}">
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading" style="color: darkslategray">{{$comment->user->name}}
                                {{$article->created_at}}</h5>
                            <div style="font-size: 22px">{{$comment->content}}</div>

                        </div>
                    </div>
                @endforeach
            </div><!-- /.blog-post -->

            <hr>
            {{--@if(\Illuminate\Support\Facades\Auth::check())--}}

                {{--{!! Form::open(['url'=>'comments']) !!}--}}

                {{--{!! Form::hidden('article_id', $article->id) !!}--}}
                {{--<div class="col-md-12">--}}
                    {{--{!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>'10']) !!}--}}
                {{--</div>--}}

                {{--<div class="form-group pull-right">--}}
                    {{--{!! Form::submit('发表评论', ['class'=>'btn btn-primary']) !!}--}}
                {{--</div>--}}

                {{--{!! Form::close() !!}--}}
            {{--@else--}}
                {{--{!! Form::open(['url'=>'/user/login', 'method'=>'get']) !!}--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::submit('登陆后发表评论', ['class'=>'btn btn-primary']) !!}--}}
                {{--</div>--}}

                {{--{!! Form::close() !!}--}}
            {{--@endif--}}



            {{--<div class="clearfix"></div>--}}

            {{--<nav>--}}
                {{--<ul class="pager">--}}
                    {{--<li><a href="#">Previous</a></li>--}}
                    {{--<li><a href="#">Next</a></li>--}}
                {{--</ul>--}}
            {{--</nav>--}}

        </div>
    </div>

{{--@stop--}}