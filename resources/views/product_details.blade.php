@extends('layouts.app')
@section('title', 'Product Details')
@section('content')     
<!--====== App Content ======-->
<div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-t-90">
    <div class="container">
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


                <!--====== Product Detail Zoom ======-->
                <div class="pd u-s-m-b-30">
                    <div class="slider-fouc pd-wrap">
                        <div id="pd-o-initiate">
                                @php $thumbnails = json_decode($product->thambnail, true) @endphp
                                @foreach($thumbnails as $thumbnail)

                                <div class="pd-o-img-wrap" data-src="{{asset('storage/uploads/'.$thumbnail)}}">

                                    <img class="u-img-fluid" src="{{asset('storage/uploads/'.$thumbnail)}}" data-zoom-image="{{asset('storage/uploads/'.$thumbnail)}}" alt="">
                                </div>
                                @endforeach
                            
                            <!-- <div class="pd-o-img-wrap" data-src="images/product/product-d-5.jpg">

                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" data-zoom-image="images/product/product-d-5.jpg" alt=""></div> --> -->
                        </div>

                        <span class="pd-text">Click for larger zoom</span>
                    </div>
                    <div class="u-s-m-t-15">
                        <div class="slider-fouc">
                            <div id="pd-o-thumbnail">
                                @foreach($thumbnails as $thumbnail)
                                <div>
                                    <img class="u-img-fluid" src="{{asset('storage/uploads/'.$thumbnail)}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Product Detail Zoom ======-->
            </div>
            <div class="col-lg-7">

                <!--====== Product Right Side Details ======-->
                <div class="pd-detail">
                    <div>

                        <span class="pd-detail__name">{{$product->name}}</span></div>
                    <div>
                        <div class="pd-detail__inline">

                            <span class="pd-detail__price">${{$product->price}}</span>

                            <!-- <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div> -->
                    </div>
                    <div class="u-s-m-b-15">
                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                            <span class="pd-detail__review u-s-m-l-4">

                                <a data-click-scroll="#view-review">23 Reviews</a></span></div>
                    </div>
                    <div class="u-s-m-b-15">
                        <div class="pd-detail__inline">

                            <span class="pd-detail__stock">{{$product->qty}} in stock</span>

                            <span class="pd-detail__left">Only 2 left</span></div>
                    </div>
                    <div class="u-s-m-b-15">

                        <span class="pd-detail__preview-desc">{{$product->short_desc}}</span></div>
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
                        <form id="add_car" action="{{url('add_cart')}}" method="post" class="pd-detail__form">
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
                                    <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
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

<!--====== Product Detail Tab ======-->
<div class="u-s-p-y-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pd-tab">
                    <div class="u-s-m-b-30">
                        <ul class="nav pd-tab__list">
                            <li class="nav-item">

                                <a class="nav-link active" data-toggle="tab" href="#pd-desc">DESCRIPTION</a></li>
                            <li class="nav-item">

                                <a class="nav-link" data-toggle="tab" href="#pd-tag">TAGS</a></li>
                            <li class="nav-item">

                                <a class="nav-link" id="view-review" data-toggle="tab" href="#pd-rev">REVIEWS

                                    <span>(23)</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">

                        <!--====== Tab 1 ======-->
                        <div class="tab-pane fade show active" id="pd-desc">
                            <div class="pd-tab__desc">
                                <div class="u-s-m-b-15">
                                    {{$product->description}}
                                </div>
                                
                            </div>
                        </div>
                        <!--====== End - Tab 1 ======-->


                        <!--====== Tab 2 ======-->
                        <div class="tab-pane" id="pd-tag">
                            <div class="pd-tab__tag">
                                <h2 class="u-s-m-b-15">ADD YOUR TAGS</h2>
                                <div class="u-s-m-b-15">
                                    <form>

                                        <input class="input-text input-text--primary-style" type="text">

                                        <button class="btn btn--e-brand-b-2" type="submit">ADD TAGS</button></form>
                                </div>

                                <span class="gl-text">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                            </div>
                        </div>
                        <!--====== End - Tab 2 ======-->


                        <!--====== Tab 3 ======-->
                        <div class="tab-pane" id="pd-rev">
                            <div class="pd-tab__rev">
                                <div class="u-s-m-b-30">
                                    <div class="pd-tab__rev-score">
                                        <div class="u-s-m-b-8">
                                            <h2>23 Reviews - 4.6 (Overall)</h2>
                                        </div>
                                        <div class="gl-rating-style-2 u-s-m-b-8"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                                        <div class="u-s-m-b-8">
                                            <h4>We want to hear from you!</h4>
                                        </div>

                                        <span class="gl-text">Tell us what you think about this item</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <form class="pd-tab__rev-f1">
                                        <div class="rev-f1__group">
                                            <div class="u-s-m-b-15">
                                                <h2>23 Review(s) for Man Ruched Floral Applique Tee</h2>
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label for="sort-review"></label><select class="select-box select-box--primary-style" id="sort-review">
                                                    <option selected>Sort by: Best Rating</option>
                                                    <option>Sort by: Worst Rating</option>
                                                </select></div>
                                        </div>
                                        <div class="rev-f1__review">
                                            <div class="review-o u-s-m-b-15">
                                                <div class="review-o__info u-s-m-b-8">

                                                    <span class="review-o__name">John Doe</span>

                                                    <span class="review-o__date">27 Feb 2018 10:57:43</span></div>
                                                <div class="review-o__rating gl-rating-style u-s-m-b-8"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                    <span>(4)</span></div>
                                                <p class="review-o__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="review-o u-s-m-b-15">
                                                <div class="review-o__info u-s-m-b-8">

                                                    <span class="review-o__name">John Doe</span>

                                                    <span class="review-o__date">27 Feb 2018 10:57:43</span></div>
                                                <div class="review-o__rating gl-rating-style u-s-m-b-8"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                    <span>(4)</span></div>
                                                <p class="review-o__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="review-o u-s-m-b-15">
                                                <div class="review-o__info u-s-m-b-8">

                                                    <span class="review-o__name">John Doe</span>

                                                    <span class="review-o__date">27 Feb 2018 10:57:43</span></div>
                                                <div class="review-o__rating gl-rating-style u-s-m-b-8"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                    <span>(4)</span></div>
                                                <p class="review-o__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="u-s-m-b-30">
                                    <form class="pd-tab__rev-f2">
                                        <h2 class="u-s-m-b-15">Add a Review</h2>

                                        <span class="gl-text u-s-m-b-15">Your email address will not be published. Required fields are marked *</span>
                                        <div class="u-s-m-b-30">
                                            <div class="rev-f2__table-wrap gl-scroll">
                                                <table class="rev-f2__table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i>

                                                                    <span>(1)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                                                    <span>(1.5)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                    <span>(2)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                                                    <span>(2.5)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                    <span>(3)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                                                    <span>(3.5)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                    <span>(4)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                                                    <span>(4.5)</span></div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                    <span>(5)</span></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-1" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-1"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-1.5" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-1.5"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-2" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-2"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-2.5" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-2.5"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-3" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-3"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-3.5" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-3.5"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-4" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-4"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-4.5" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-4.5"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-5" name="rating">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label" for="star-5"></label></div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="rev-f2__group">
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="reviewer-text">YOUR REVIEW *</label><textarea class="text-area text-area--primary-style" id="reviewer-text"></textarea></div>
                                            <div>
                                                <p class="u-s-m-b-30">

                                                    <label class="gl-label" for="reviewer-name">NAME *</label>

                                                    <input class="input-text input-text--primary-style" type="text" id="reviewer-name"></p>
                                                <p class="u-s-m-b-30">

                                                    <label class="gl-label" for="reviewer-email">EMAIL *</label>

                                                    <input class="input-text input-text--primary-style" type="text" id="reviewer-email"></p>
                                            </div>
                                        </div>
                                        <div>

                                            <button class="btn btn--e-brand-shadow" type="submit">SUBMIT</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Tab 3 ======-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Product Detail Tab ======-->
<div class="u-s-p-b-90">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary u-s-m-b-12">CUSTOMER ALSO VIEWED</h1>

                        <span class="section__span u-c-grey">PRODUCTS THAT CUSTOMER VIEWED</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Intro ======-->


    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="slider-fouc">
                <div class="owl-carousel product-slider" data-item="4">
                    @foreach($related as $related)
                    <div class="u-s-m-b-30">
                        <div class="product-o product-o--hover-on">
                            <div class="product-o__wrap">

                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">

                                    <img class="aspect__img" src="{{asset('storage/uploads/'.$related->image)}}" alt=""></a>
                                <div class="product-o__action-wrap">
                                    <ul class="product-o__action-list">
                                        <li>

                                            <a data-modal="modal" data-modal-id="#quick_view_modal"
                                                    data-id="{{$product->id}}"
                                                    data-name="{{$product->name}}"
                                                    data-price="{{$product->price}}"
                                                    data-qty="{{$product->qty}}"
                                                    data-short_desc="{{$product->short_desc}}"
                                                    data-image="{{$product->image}}"
                                            id="quick_view" ata-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                        
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <span class="product-o__category">

                                <a href="{{url('product_details', $product->id)}}">{{$related->category->category_name}}</a></span>

                            <span class="product-o__name">

                                <a href="product-detail.html">{{$related->name}}</a></span>
                            <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                <span class="product-o__review">(20)</span></div>

                            <span class="product-o__price">${{$related->price}}

                                <span class="product-o__discount">$160.00</span></span>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 1 ======-->
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
        <!--====== End - Quick Look Modal ======-->
        
@endsection