@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Please add your category*</div>
                    <div class="card-body">
                        @if($edit === FALSE)
                            {!! Form::model($category, ['action' => 'CategoryController@store']) !!}
                        @else()
                            {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'patch']) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('name', 'name') !!}
                            {!! Form::text('name', $category->body, ['class' => 'form-control','required' => 'required']) !!}
                        </div>
                        <button class="btn btn-success float-right" value="submit" type="submit" id="submit">Save
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection