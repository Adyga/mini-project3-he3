@extends('layouts.app')

@section('content')

    <h1>Questions Listing <h6>(6 Records Per Page)</h6></h1><br>
    <h1>Click on any question for detail record</h1>
    <hr>

    @if (count($libraries) > 0)
        @foreach ($libraries as $library)
            <div class="well">
                <h3><a href="/{{$library->id}}">id-{{$question->body}}</a></h3>

            </div>
        @endforeach
        {{$libraries->links()}}
    @else
        <p>No library orders Found</p>
    @endif

    <small>written on  {{$question->created_at}}</small>

@endsection