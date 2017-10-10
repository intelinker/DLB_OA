@extends('app');

@section('content');

// 引入编辑器代码
{{--@include('editor::head')--}}

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-11" role="main">

            @if($errors->any())
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif


            {!! Form::open(['method'=>"POST",'url'=>'article']) !!}



                <div class="form-group">
                    {!! Form::label('category', '栏目', ['class'=>'col-md-1 control-label']) !!}

                    <div class="col-md-2" style="margin-bottom: 55px">
                        <select class="col-lg-12 col-md-12 col-sm-12 form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="clearfix"/>
                </div>
                <div class="form-group">


                    {!! Form::label('title', '标题', ['class'=>'col-md-1 control-label']) !!}
                    <div class="col-md-11"  style="margin-bottom: 55px">
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">

                    {!! Form::label('content', '内容', ['class'=>'col-md-1 control-label']) !!}
                    {{--<div class="col-md-6">--}}
                    {{--{!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>'10']) !!}--}}
                    {{--</div>--}}
                    {{--编辑器一定要被一个 class 为 editor 的容器包住--}}

                    <div class="editor">
                        {{--创建一个 textarea 而已，具体的看手册，主要在于它的 id 为 myEditor--}}
                        {!! Form::textarea('content', '', ['class' => 'col-md-11','id'=>'myEditor']) !!}

                        {{--上面的 Form::textarea ，在laravel 5 中被提了出去，如果你没安装的话，直接这样用--}}
                        {{--<textarea id='myEditor'></textarea>--}}

                        {{--主要还是在容器的 ID 为 myEditor 就行--}}

                    </div>

                </div>

                <div class="clearfix"></div>

            <div class="form-group">
                {!! Form::submit('发布', ['class'=>'btn btn-primary pull-right',  'style'=>"margin-top: 50px"]) !!}
            </div>

            {!! Form::close() !!}



        </div>
    </div>
@stop