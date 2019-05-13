<!DOCTYPE html>
<html>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Club Center</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($clubs as $club)
            @php
                $date=date('Y-m-d', $club['date']);
            @endphp
            <tr>
                <td>{{$club['id']}}</td>
                <td>{{$club['name']}}</td>
                <td>{{$date}}</td>
                <td>{{$club['email']}}</td>
                <td>{{$club['number']}}</td>
                <td>{{$club['center']}}</td>

                <td><a href="{{action('ClubController@edit', $club['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('ClubController@destroy', $club['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</html>