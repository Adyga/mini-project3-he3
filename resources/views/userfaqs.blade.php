@extends('layouts.app')

@section('title', 'My Faqs')

@section('content')
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
        </ol>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-faq"> My Faqs</i>
                    </div>

                    <div class="panel-body">
                        @if ($faqs->isEmpty())
                            <p>You have not created any faqs.</p>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>
                                            @foreach ($categories as $category)
                                                @if ($category->id === $faq->category_id)
                                                    {{ $category->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ url('faqs/'. $faq->faq_id) }}">
                                                #{{ $faq->faq_id }} - {{ $faq->title }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($faq->status === 'Open')
                                                <span class="label label-success">{{ $faq->status }}</span>
                                            @else
                                                <span class="label label-danger">{{ $faq->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $faq->updated_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $faqs->render() }}
                        @endif
                    </div>
                </div>
                <a href="/home" class="btn btn-default">Go Back</a>
            </div>
        </div>
    </div>
@endsection