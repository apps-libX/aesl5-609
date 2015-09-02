@extends('layouts.master')

@section('content')

    <h1>Edit List</h1>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {!! Form::model($list, array('method' => 'put', 'route' => ['lists.update', $list->id], 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('List Name') !!}
            {!! Form::text('name', null,  array('required', 'class'=>'form-control', 'placeholder'=>'Nunquam promissio consilium')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('List Description') !!}
            {!! Form::textarea('description', null, array('required', 'class'=>'form-control', 'placeholder'=>'Byssuss sunt lamias de magnum ratione!')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update List', array('class'=>'btn btn-primary')) !!}
        </div>

    {!! Form::close() !!}

@stop
{{--Created by anonymoussc on 9/2/15 9:17 PM--}}
