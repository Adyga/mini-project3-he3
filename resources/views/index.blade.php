@extends('layouts.app')

@section('content')

    <h1>Questions Listing <h6>(6 Records Per Page)</h6></h1><br>
    <h1>Click on any question for detail record</h1>
    <hr>

    @if (count($questions) > 0)
        @foreach ($questions as $question)
            <div class="well">
                <h3><a href="/{{$question->id}}">id-{{$question->body}}</a></h3>

            </div>
        @endforeach
        {{$questions->links()}}
    @else
        <p>no questions found</p>
    @endif

    <small>written on  {{$question->created_at}}</small>

@endsection