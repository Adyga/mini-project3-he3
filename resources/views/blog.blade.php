@extends('layouts.app')

@section('title', 'my blog')

@section('content')
    <section   >
        <div class="container">
            <div class="container">
                <ol class="breadcrumb justify-content-center">
                    <ul class="breadcrumb justify-content-start">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                </ol>

            <div class="row">
                <div class="col-lg-10">
                    <div class="bg-white p-5"><strong class="text-uppercase text-muted d-inline-block mb-2 text-sm">Featured</strong>
                        <h2 class="mb-3">Blogs Page & Reviews</h2>
                        <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="mb-30px"><a href="wineblog"><img src="https://images.unsplash.com/photo-1544776527-68e63addedf7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="..." class="img-fluid"></a>
                        <div class="mt-3"><small class="text-uppercase text-muted">https://unsplash.com/photos/GPwuH2q9mcs </small>
                            <h5 class="my-2"><a href="wineblog" class="text-dark">Wine & Things</a></h5>
                            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2019</p>
                            <p class="my-2 text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="wineblog" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="mb-30px"><a href="coffeeblog"><img src="https://images.unsplash.com/photo-1544737601-0f0029425384?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="..." class="img-fluid"></a>
                        <div class="mt-3"><small class="text-uppercase text-muted">https://unsplash.com/photos/lh5cmW5A63M </small>
                            <h5 class="my-2"><a href="coffeeblog" class="text-dark">Coffee </a></h5>
                            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2019</p>
                            <p class="my-2 text-muted">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="coffeeblog" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="mb-30px"><a href="offtheroadblog"><img src="https://images.unsplash.com/photo-1544811106-2b8e6819fdf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="..." class="img-fluid"></a>
                        <div class="mt-3"><small class="text-uppercase text-muted">https://unsplash.com/photos/qEZsn1RW94c </small>
                            <h5 class="my-2"><a href="offtheroadblog" class="text-dark">Off The Road Vehicles</a></h5>
                            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2019</p>
                            <p class="my-2 text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.  Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="offtheroadblog" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="mb-30px"><a href="architectureblog"><img src="https://images.unsplash.com/photo-1544263241-3e013c4cd351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="..." class="img-fluid"></a>
                        <div class="mt-3"><small class="text-uppercase text-muted">https://unsplash.com/photos/yFaHP6gujaw </small>
                            <h5 class="my-2"><a href="architectureblog" class="text-dark">Architecture </a></h5>
                            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2019</p>
                            <p class="my-2 text-muted">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="architectureblog" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="mb-30px"><a href="photoappblog"><img src="https://images.unsplash.com/photo-1544825480-4bce131d2611?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="..." class="img-fluid"></a>
                        <div class="mt-3"><small class="text-uppercase text-muted">https://unsplash.com/@jowa</small>
                            <h5 class="my-2"><a href="photoappblog" class="text-dark">Newest photo apps</a></h5>
                            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2019</p>
                            <p class="my-2 text-muted">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="photoappblog" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="mb-30px"><a href="photographyblog"><img src="https://images.unsplash.com/photo-1544808728-35c5958efd93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80" alt="..." class="img-fluid"></a>
                        <div class="mt-3"><small class="text-uppercase text-muted">https://unsplash.com/photos/WeNrlFHvG50 </small>
                            <h5 class="my-2"><a href="photographyblog" class="text-dark">Best books about Photography</a></h5>
                            <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2019</p>
                            <p class="my-2 text-muted">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="photographyblog" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
    </section>
@endsection