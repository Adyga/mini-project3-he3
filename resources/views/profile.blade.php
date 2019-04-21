@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My Profile</div>

                    <div class="card-body">
                        <span class="font-weight-bold">Email: </span>{{$profile->email}}</br>

                        <span class="font-weight-bold">Body: </span>{{$profile->body}}</br>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success float-right" href="{{ route('profile.edit', ['profile_id' => $profile->id,'user_id' => $profile->user->id]) }}">
                            Edit
                            <a href="/home" class="btn btn-default">Go Back</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection