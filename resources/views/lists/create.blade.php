@extends('layouts.master')

@section('content')

    <h1>Create a New List</h1>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {!! Form::open(array('route' => 'lists.store', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('List Name') !!}
            {!! Form::text('name', null, array('required', 'class'=>'form-control',
                'placeholder'=>'Nunquam gratia silva?')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('List Description') !!}
            {!! Form::textarea('description', null, array('required', 'class'=>'form-control',
                'placeholder'=>'Capio de fatalis historia, attrahendam acipenser! ')) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create List', array('class'=>'btn btn-primary')) !!}
        </div>

    {!! Form::close() !!}

@stop


{{--Created by anonymoussc on 9/2/15 6:47 AM--}}
