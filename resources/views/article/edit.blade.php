@extends('app');

@section('content');

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

            {!! Form::model($article, ['method'=>'PATCH', 'url'=>'article/'.$article->id]) !!}

                <div class="form-group">
                    {!! Form::label('category', '栏目', ['class'=>'col-md-1 control-label']) !!}

                    <div class="col-md-2" style="margin-bottom: 55px">
                        <select class="col-lg-12 col-md-12 col-sm-12 form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $category->id == $article->category_id ? 'selected' : '' }}>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="clearfix"/>
                </div>

                @include('article.editform')

            <div class="form-group">
                {!! Form::submit('发布', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}



        </div>
    </div>

@stop