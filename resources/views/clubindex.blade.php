@extends('layouts.app')

@section('title', 'club Reviews')
@section('content')

<div class="container">
    <div>
        <ul class="breadcrumb justify-content-start">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Clubs</a></li>

        </ul>
    </div>
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">New York</h4>
                <a href="clubs/edit"><img src="https://90daysindc.files.wordpress.com/2012/05/042.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">

                <ul class="list-unstyled mt-3 mb-4">
                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco</p>
                </ul>
                <a href="clubs/edit" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>

            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Chicago</h4>
                <a href="clubs/edit"><img src="http://s3.amazonaws.com/architecture-org/files/pages/chicago-tribune-tower-01.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">

                <ul class="list-unstyled mt-3 mb-4">
                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco</p>
                </ul>
                <a href="clubs/edit" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Dallas</h4>
                <a href="clubs/edit"><img src="http://www.highrises.com/uploads/one-dallas-center2.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">

                <ul class="list-unstyled mt-3 mb-4">
                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco</p>
                </ul>
                <a href="clubs/edit" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Angeles</h4>
                <a href="clubs/edit"><img src="https://tse4.mm.bing.net/th?id=OIP.-sc4lXCuvrnH6JKYORFjMAHaKe&pid=Api&P=0&w=300&h=300" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">

                <ul class="list-unstyled mt-3 mb-4">
                    <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco</p>
                </ul>
                <a href="clubs/edit" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
            </div>
        </div>
    </div>
    <a href="clubs/edit" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">


            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
@endsection