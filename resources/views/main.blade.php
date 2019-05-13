@extends('layouts.app')

@section('title', 'main')

@section('content')

<main class="py-4">
    @yield('content')
    <div class="container">
        <div>
            <ul class="breadcrumb justify-content-start">
                <li class="breadcrumb-item active"> >Home</li>
            </ul>
        </div>
        <div class="card-deck mb-3 text-center">
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Questions</h4>
                    <a href="/home"><img src="https://90daysindc.files.wordpress.com/2012/05/042.jpg" alt="..." class="img-fluid"></a>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco</p>
                    </ul>


                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Blogs</h4>
                    <a href="/blog"><img src="http://s3.amazonaws.com/architecture-org/files/pages/chicago-tribune-tower-01.jpg" alt="..." class="img-fluid"></a>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco</p>
                    </ul>

                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Library</h4>
                    <a href="/new_library"><img src="http://www.highrises.com/uploads/one-dallas-center2.jpg" alt="..." class="img-fluid"></a>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco</p>
                    </ul>

                </div>
            </div>

        </div>
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