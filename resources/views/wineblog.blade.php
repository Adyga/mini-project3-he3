@extends('layouts.app')

@section('title', 'wineblog')
<div class="container">
@section('content')
    <section class="product-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 py-3 order-2 order-lg-1">

                    <div class="product-image"><img src="https://images.unsplash.com/photo-1544776527-68e63addedf7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="product" class="img-fluid"/>
                        <div style="background: center center url('https://d19m59y37dris4.cloudfront.net/sell/1-2-2/img/photo/kyle-loftus-596319-detail-2.jpg') no-repeat; background-size: cover;" class="detail-full-item">     </div>
                    </div>
                </div>
                <div class="d-flex align-items-center col-lg-6 col-xl-5 pl-lg-5 mb-5 order-1 order-lg-2">
                    <div>
                        <ul class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog">Blog</a></li>
                            <li class="breadcrumb-item active">Fine Wine</li>
                        </ul>
                        <h1 class="mb-4">Fine Wine</h1>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <div class="d-flex align-items-center">
                                <ul class="list-inline mr-2 mb-0">
                                </ul><span class="text-muted text-uppercase text-sm">25 reviews</span>
                            </div>
                        </div>
                        <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
                <li class="nav-item"><a data-toggle="tab" href="#description" role="tab" class="nav-link detail-nav-link active">Description</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#additional-information" role="tab" class="nav-link detail-nav-link">Additional Information</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#reviews" role="tab" class="nav-link detail-nav-link">Reviews</a></li>
            </ul>
            <div class="tab-content py-4">
                <div id="description" role="tabpanel" class="tab-pane active px-3">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div id="additional-information" role="tabpanel" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table text-sm">
                                <tbody>
                                <tr>
                                    <th class="text-uppercase font-weight-normal border-0">Product #</th>
                                    <td class="text-muted border-0">Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                    <th class="text-uppercase font-weight-normal ">Available packaging</th>
                                    <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit</td>
                                </tr>
                                <tr>
                                    <th class="text-uppercase font-weight-normal ">Weight</th>
                                    <td class="text-muted ">dolor sit amet</td>
                                </tr>
                                <tr>
                                    <th class="text-uppercase font-weight-normal ">Sunt in culpa qui</th>
                                    <td class="text-muted ">Lorem ipsum dolor sit amet</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="table text-sm">
                                <tbody>
                                <tr>
                                    <th class="text-uppercase font-weight-normal border-0">Weight</th>
                                    <td class="text-muted border-0">dolor sit amet                                </td>
                                </tr>
                                <tr>
                                    <th class="text-uppercase font-weight-normal ">Sunt in culpa qui</th>
                                    <td class="text-muted ">Lorem ipsum dolor sit amet
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-uppercase font-weight-normal ">Product #</th>
                                    <td class="text-muted ">Lorem ipsum dolor sit amet
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-uppercase font-weight-normal ">Available packaging</th>
                                    <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="reviews" role="tabpanel" class="tab-pane">
                    <div class="row mb-5">
                        <div class="col-lg-10 col-xl-9">
                            <div class="media review">
                                <div class="text-center mr-4 mr-xl-5"><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Han Solo</h5>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                                    </div>
                                    <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections     </p>
                                </div>
                            </div>
                            <div class="media review">
                                <div class="text-center mr-4 mr-xl-5"><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Luke Skywalker</h5>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                                    </div>
                                    <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.     </p>
                                </div>
                            </div>
                            <div class="media review">
                                <div class="text-center mr-4 mr-xl-5"><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Princess Leia</h5>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                                    </div>
                                    <p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.     </p>
                                </div>
                            </div>
                            <div class="media review">
                                <div class="text-center mr-4 mr-xl-5"><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Jabba Hut</h5>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                                    </div>
                                    <p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.     </p>
                                </div>
                            </div>
                            <div class="py-5 px-3">
                                <h5 class="text-uppercase mb-4">Leave a review</h5>
                                <form id="contact-form" method="post" class= 'contact-form' action="{{ url('new_reviews')}}">
                                    {{csrf_field()}}
                                    <div class="row">
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
                                <label for="review" class="form-label">Review text *</label>
                                <textarea rows="4" name="review" id="review" placeholder="Enter your review" required="required" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-dark">Post review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
@endsection