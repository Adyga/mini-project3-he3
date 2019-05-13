@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Edit Member Profile</h2><br  />
    <form method="post" action="{{action('ClubController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$club->name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{$club->email}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="number">Phone Number:</label>
                <input type="text" class="form-control" name="number" value="{{$club->number}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Club Center:</lable><br>

                <select name="center">
                    <option value="New York"  @if($club->center=="New York") selected @endif >New York</option>
                    <option value="Chicago"  @if($club->center=="Chicago") selected @endif>Chicago</option>
                    <option value="Dalas" @if($club->center=="Dalas") selected @endif>Dalas</option>
                    <option value="Los Angeles" @if($club->center=="Los Ageles") selected @endif>Los Angeles</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection