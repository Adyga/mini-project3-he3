@extends('layouts.app')

@section('title', 'photoappblog')

@section('content')
    <section class="product-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 py-3 order-2 order-lg-1">

                    <div class="product-image"><img src="https://images.unsplash.com/photo-1544825480-4bce131d2611?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60 " alt="product" class="img-fluid"/>                        <div style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/photo/kyle-loftus-596319-detail-2.jpg') no-repeat; background-size: cover;" class="detail-full-item">     </div>
                    </div>
                </div>
                <div class="d-flex align-items-center col-lg-6 col-xl-5 pl-lg-5 mb-5 order-1 order-lg-2">
                    <div>
                        <ul class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog">Blog</a></li>
                            <li class="breadcrumb-item active">photo app</li>
                        </ul>
                        <h1 class="mb-4">photo app</h1>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <div class="d-flex align-items-center">
                                <ul class="list-inline mr-2 mb-0">
                                </ul>
                                <a href="{{ url('my_reviews') }}">List Reviews</a>
                            </div>
                        </div>
                        <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">

        <div class="py-5 px-3">
            <h5 class="text-uppercase mb-4">Leave a review</h5>
            <form id="contact-form" method="post" action="{{ url('/reviewstore') }}" class="form">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Your name *</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="rating" class="form-label">Your rating *</label>
                            <select name="rating" id="rating" class="custom-select focus-shadow-0">
                                <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                                <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                                <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                                <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                                <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Your email *</label>
                    <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="review" class="form-label">Review text *</label>
                    <textarea rows="4" name="review" id="review" placeholder="Enter your review" required="required" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark">Post review</button>
            </form>
        </div>

    </section>
@endsection