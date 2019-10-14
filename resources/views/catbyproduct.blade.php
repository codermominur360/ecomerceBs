@extends('layout.app')

@section('content')
<div class="content">
    <div class="products-agileinfo">
        <h2 class="tittle">Men's Wear</h2>
        <div class="container">
            <div class="product-agileinfo-grids w3l">

@include('front-end.inc.single-slider')

                <div class="col-md-9 product-agileinfon-grid1">
                    <div class="product-agileinfon-top">
                        <div class="col-md-6 product-agileinfon-top-left">
                            <img class="img-responsive " src="images/img3.jpg" alt="">
                        </div>
                        <div class="col-md-6 product-agileinfon-top-left">
                            <img class="img-responsive " src="images/img4.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mens-toolbar">
                        <p >Showing 1–9 of 21 results</p>
                        <p class="showing">Sorting By
                            <select>
                                <option value=""> Name</option>
                                <option value="">  Rate</option>
                                <option value=""> Color </option>
                                <option value=""> Price </option>
                            </select>
                        </p>
                        <p>Show
                            <select>
                                <option value=""> 9</option>
                                <option value="">  10</option>
                                <option value=""> 11 </option>
                                <option value=""> 12 </option>
                            </select>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
                            <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="images/menu1.png"></a></li>
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="images/menu.png"></a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

                                    <div class="product-tab">
                                        @foreach($newProducts as $newProduct)
                                             <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                                            <div class="grid-arr">
                                                <div  class="grid-arrival">
                                                    <figure>
                                                        <a href="{{url('productDetails/'.$newProduct->product_id)}}" class="new-gri">
                                                            <div class="grid-img">
                                                                <img  src="{{asset($newProduct->product_image)}}" class="img-responsive" alt="No Image insert from server">
                                                            </div>
                                                            <div class="grid-img">
                                                                <img  src="{{$newProduct->product_image}}" class="img-responsive"  alt="">
                                                            </div>
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <div class="women">
                                                    <h6><a href="single.html">{{$newProduct->product_name}}</a></h6>
                                                    <span class="size">XL / XXL / S </span>
                                                    <p ><del>$100.00</del><em class="item_price">{{$newProduct->product_price}}</em></p>
                                                    <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--content-->
@endsection

@section('banner')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
@endsection
