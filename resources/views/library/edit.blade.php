@extends('layouts.app')

@section('title', $library->title)

@section('content')
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('my_librarys') }}">Libraries</a></li>
        </ol>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Library: #{{ $library->library_id }} - {{ $library->title }}
                    </div>
                    <div class="panel-body">
                        @include('includes.flash')
                        <div class="library-info">
                            <p>Categry: {{ $category->name }}</p>
                            <p>
                                @if ($library->status === 'Open')
                                    Status: <span class="label label-success">{{ $library->status }}</span>
                                @else
                                    Status: <span class="label label-danger">{{ $library->status }}</span>
                                @endif
                            </p>
                            <p>Comment: {{ $library->message }}</p>
                            <p>Created on: {{ $library->created_at->diffForHumans() }}</p>
                        </div>

                        <hr>
                        <p>Your Comments:</p>
                        <hr>
                        <div class="comments">
                            @foreach ($comments as $comment)
                                <div class="panel panel-@if($library->user->id === $comment->user_id) {{"default"}}@else{{"success"}}@endif">
                                    <div class="panel panel-body">
                                        {{ $comment->comment }}
                                    </div>
                                    <div class="panel panel-heading">
                                        {{ $comment->user->name }}
                                        <span class="pull-right">{{ $comment->created_at->format('m-d-y @ h:m') }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <div class="comment-form">
                            <label for="message" class="form-label">Your message for us *</label>
                            <form action="{{ url('comment') }}" method="POST" class="form">
                                {!! csrf_field() !!}

                                <input type="hidden" name="library_id" value="{{ $library->id }}">

                                <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                    <textarea rows="10" id="comment" id="artical-ckeditor" placeholder="Enter your message" required="required" class="form-control" name="comment"></textarea>

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
        @section('js')
            <script src="vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>CKEDITOR.replace( 'article-ckeditor' );</script>
@endsection