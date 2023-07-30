@extends('layouts.app')
@section('title', 'Wishlist')
@section('content')     
<!--====== App Content ======-->
<div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-y-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb__wrap">
                    <ul class="breadcrumb__list">
                        <li class="has-separator">

                            <a href="index.html">Home</a></li>
                        <li class="is-marked">

                            <a href="wishlist.html">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->


<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary">Wishlist</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Intro ======-->


    <!--====== Section Content ======-->
    <div class="section__content wishlist">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!--====== Wishlist Product ======-->
                    @foreach($wishlist as $wishlist)
                    <div class="w-r u-s-m-b-30">
                        <div class="w-r__container">
                            <div class="w-r__wrap-1">
                                <div class="w-r__img-wrap">

                                    <img class="u-img-fluid" src="{{asset('storage/uploads/'.$wishlist->product->image)}}" alt=""></div>
                                <div class="w-r__info">

                                    <span class="w-r__name">

                                        <a href="{{url('product_details', $wishlist->product_id)}}">{{$wishlist->product->name}}</a></span>

                                    <span class="w-r__category">

                                        <a href="{{url('category', $wishlist->product->sub_category_id)}}">{{$wishlist->product->sub_category->sub_category_name}}</a></span>

                                    <span class="w-r__price">${{$wishlist->product->price}}

                                        <span class="w-r__discount">$160.00</span></span></div>
                            </div>
                            <div class="w-r__wrap-2">
                                            
                                <a class="w-r__link btn--e-brand-b-2" data-bs-toggle="modal" data-bs-target="#quick_view_modal"
                                                                    data-id="{{$wishlist->product_id}}"
                                                                    data-name="{{$wishlist->product->name}}"
                                                                    data-price="{{$wishlist->product->price}}"
                                                                    data-qty="{{$wishlist->product->qty}}"
                                                                    data-short_desc="{{$wishlist->product->short_desc}}"
                                                                    data-image="{{$wishlist->product->image}}"
                                                                    id="quick_view">ADD TO CART</a>

                                <a class="w-r__link btn--e-transparent-platinum-b-2" href="{{url('product_details', $wishlist->product_id)}}">VIEW</a>

                                <a data-id="{{$wishlist->id}}" class="delete_wishlist w-r__link btn--e-transparent-platinum-b-2" href="#">REMOVE</a></div>
                        </div>
                    </div>
                    @endforeach
                    <!--====== End - Wishlist Product ======-->


                </div>
                <div class="col-lg-12">
                    <div class="route-box">
                        <div class="route-box__g">

                            <a class="route-box__link" href="shop-side-version-2.html"><i class="fas fa-long-arrow-alt-left"></i>

                                <span>CONTINUE SHOPPING</span></a></div>
                        <div class="route-box__g">

                            <a class="route-box__link" href="wishlist.html"><i class="fas fa-trash"></i>

                                <span>CLEAR WISHLIST</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->
</div>
<!--====== End - App Content ======-->


<!--====== Quick Look Modal ======-->
<div class="modal fade" id="quick_view_modal">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content modal--shadow">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Quick View</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">Electronics</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->

                                
                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="">
                                            <div>

                                                <img id="quick_image" class="u-img-fluid" src="" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div id="thumbnail">
                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </div> -->
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span id="quick_name" class="pd-detail__name"></span></div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span id="quick_price" class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span id="quick_stock" class="pd-detail__stock">200 in stock</span>

                                            <!-- <span class="pd-detail__left">Only 2 left</span></div> -->
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span id="quick_short_desc" class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form id="add_car" method="post" action="{{url('add_cart')}}" class="pd-detail__form">
                                            @csrf
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input id="qty" name="qty" class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">
                                                        
                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">
                                                    <input class="product_id" id="product_id" type="hidden" name="product_id">
                                                    <button class="btn btn-secondary btn--e-brand-b-2" type="submit">Add to Cart</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--====== End - Quick Look Modal ======-->

@endsection