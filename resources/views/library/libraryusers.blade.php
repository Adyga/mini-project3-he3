php@extends('layouts.app')

@section('title', 'My Libraries')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-library"> My Libraries</i>
                </div>

                <div class="panel-body">
                    @if ($libraries->isEmpty())
                        <p>You have not created any libraries.</p>
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
                            @foreach ($libraries as $library)
                                <tr>
                                    <td>
                                        @foreach ($categories as $category)
                                            @if ($category->id === $library->category_id)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ url('libraries/'. $library->library_id) }}">
                                            #{{ $library->library_id }} - {{ $library->title }}
                                        </a>
                                    </td>
                                    <td>
                                        @if ($library->status === 'Open')
                                            <span class="label label-success">{{ $library->status }}</span>
                                        @else
                                            <span class="label label-danger">{{ $library->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $library->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $libraries->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection