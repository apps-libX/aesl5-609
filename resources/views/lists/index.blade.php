@extends('layouts.master')

@section('content')

    <h1>Lists</h1>

    @if ($lists->count() > 0)
        <ul>
            @foreach ($lists as $list)
                <li>{{ $list->name }}</li>
            @endforeach
        </ul>
    @else
        <p>
            No lists found!
        </p>
    @endif
@endsection


<!--Created by anonymoussc on 8/24/15 1:56 PM-->
