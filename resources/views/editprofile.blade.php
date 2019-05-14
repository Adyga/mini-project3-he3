@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Profiles</div>
                    <div class="card-body">
                        @if($edit === FALSE)
                            {!! Form::model($profile, ['route' => ['profile.store', $profile], 'method' => 'post']) !!}
                        @else()
                            {!! Form::model($profile, ['route' => ['profile.update', $profile, $profile], 'method' => 'patch']) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('body', 'Your Profile:') !!}
                            {!! Form::text('body' , $profile->body, ['class' => 'form-control','required' => 'required']) !!}
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