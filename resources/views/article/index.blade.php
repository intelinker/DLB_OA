@extends('app');

@section('content');

<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h2>欢迎进入连讯通后台管理系统
            <a class="btn btn-lg btn-primary pull-right" href="/article/create" role="button">发布信息</a>
        </h2>
    </div>

</div> <!-- /container -->

    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                @foreach($articles as $article)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" width="64" alt="图标" src="{{$article->user->avatar}}">
{{--                                {!! gettype($diary->user->avatar) !!}--}}
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/article/{{$article->id}}">{{$article->title}}</a></h4>
                            {{$article->content}}
                            回复:{{count($article->comments)}}
                        </div>

                    </div>

                @endforeach

            </div>
        </div>
    </div>

@stop;


