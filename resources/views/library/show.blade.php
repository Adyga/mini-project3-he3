@extends('layouts.app')

@section('title', $library->title)

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Request: #{{ $library->library_id }} - {{ $library->title }}
                </div>

                <div class="panel-body">
                    @include('includes.flash')

                    <div class="library-info">
                        <p>comment: {{ $library->message }}</p>
                        <p>Categry: {{ $category->name }}</p>
                        <p>
                            @if ($library->status === 'Open')
                                Status: <span class="label label-success">{{ $library->status }}</span>
                            @else
                                Status: <span class="label label-danger">{{ $library->status }}</span>
                            @endif
                        </p>
                        <p>Created on: {{ $library->created_at->diffForHumans() }}</p>
                    </div>

                    <hr>

                    <div class="comment-form">
                        <form action="{{ url('comment') }}" method="POST" class="form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="library_id" value="{{ $library->id }}">

                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
