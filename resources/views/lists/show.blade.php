@extends('layouts.master')

@section('content')
    <h1>{{ $list->name }}</h1>

    <p>
        Created on: {{ $list->created_at }}
        Last modified: {{ $list->updated_at }}<br />
    </p>

    <p>
        {{ $list->description }}
    </p>
@endsection


{{--Created by anonymoussc on 8/25/15 2:12 PM--}}
