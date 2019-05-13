@extends('layouts.app')

@section('title', 'Blog Reviews')

@section('content')
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <ul class="breadcrumb justify-content-start">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item"><a href="blog">Blog</a></li>
                <li class="breadcrumb-item active">blogreview</li>
            </ul>
        </ol>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-review">Reviews</i>
                    </div>

                    <div class="panel-body">
                        @if ($reviews->isEmpty())
                            <p>You have not created any reviews.</p>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Blog</th>
                                    <th>Reviews</th>
                                    <th>Last Updated</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td>
                                            @foreach ($categories as $category)
                                                @if ($category->id === $review->category_id)
                                                    {{ $category->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ url('reviews/'. $review->review_id) }}">
                                                #{{ $review->review_id }} - {{ $review->title }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($review->status === 'Open')
                                                <span class="label label-success">{{ $review->status }}</span>
                                            @else
                                                <span class="label label-danger">{{ $review->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $review->updated_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $reviews->render() }}
                        @endif
                    </div>
                </div>
                <a href="/home" class="btn btn-default">Go Back</a>
            </div>
        </div>
    </div>
@endsection