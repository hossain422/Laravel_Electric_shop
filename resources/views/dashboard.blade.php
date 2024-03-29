@extends('layouts.app')
@section('title', 'Dashboard')
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

                            <a href="dashboard.html">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->


<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="dash">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">

                        <!--====== Dashboard Features ======-->
                        <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                            <div class="dash__pad-1">

                                <span class="dash__text u-s-m-b-16">Hello, {{Auth::user()->name}}</span>
                                <ul class="dash__f-list">
                                    <li>

                                    <a class=" {{ Request::is('dashboard') ? 'dash-active' : '' }}" href="{{url('dashboard')}}dashboard">Manage My Account</a></li>
                                    <li>

                                    <a class="{{ Request::is('profile') ? 'dash-active' : '' }}" href="{{url('profile')}}">My Profile</a></li>

                                    <li>

                                    <a class="{{ Request::is('order') ? 'dash-active' : '' }}" href="{{url('order')}}">My Orders</a></li>
                                    <li>

                                    <a class="{{ Request::is('') ? 'dash-active' : '' }}" href="{{url('logout')}}">Logout</a></li>



                                </ul>
                            </div>
                        </div>
                        <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                            <div class="dash__pad-1">
                                <ul class="dash__w-list">
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                            <span class="dash__w-text">{{$order->count()}}</span>

                                            <span class="dash__w-name">Orders Placed</span></div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Cancel Orders</span></div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Wishlist</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Dashboard Features ======-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                            <div class="dash__pad-2">
                                <h1 class="dash__h1 u-s-m-b-14">Manage My Account</h1>

                                <span class="dash__text u-s-m-b-30">From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</span>
                                <div class="row">
                                    <div class="col-lg-4 u-s-m-b-30">
                                        <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">PERSONAL PROFILE</h2>
                                                <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                    <a href="dash-edit-profile.html">Edit</a></div>

                                                <span class="dash__text">John Doe</span>

                                                <span class="dash__text">johndoe@domain.com</span>
                                                <div class="dash__link dash__link--secondary u-s-m-t-8">

                                                    <a data-modal="modal" data-modal-id="#dash-newsletter">Subscribe Newsletter</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 u-s-m-b-30">
                                        <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">ADDRESS BOOK</h2>

                                                <span class="dash__text-2 u-s-m-b-8">Default Shipping Address</span>
                                                <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                    <a href="dash-address-book.html">Edit</a></div>

                                                <span class="dash__text">4247 Ashford Drive Virginia - VA-20006 - USA</span>

                                                <span class="dash__text">(+0) 900901904</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 u-s-m-b-30">
                                        <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">BILLING ADDRESS</h2>

                                                <span class="dash__text-2 u-s-m-b-8">Default Billing Address</span>

                                                <span class="dash__text">4247 Ashford Drive Virginia - VA-20006 - USA</span>

                                                <span class="dash__text">(+0) 900901904</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                            <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
                            <div class="dash__table-wrap gl-scroll">
                                <table class="dash__table">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Placed On</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order as $order)
                                        <tr>
                                            <td>{{$order->invoice}}</td>
                                            <td>{{$order->created_at->format('d-M-Y')}}</td>
                                            <td>
                                                @if($order->status == 1)
                                                <button class="btn btn-sm btn-warning">Processing</button>
                                                @else
                                                <button class="btn btn-sm btn-success">Order Received</button>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dash__table-total">

                                                    <span>${{$order->total}}</span>
                                                    <!-- <div class="dash__link dash__link--brand">
                                                        <a href="{{url('order_details', $order->invoice)}}">MANAGE</a>
                                                    </div> -->
                                                </div>
                                            </td>
                                            <td>
                                                    <a class=" btn btn-sm btn-info" href="{{url('order_details', $order->invoice)}}">Order Details</a>
                                                    <a class=" btn btn-sm btn-primary" href="{{url('invoice_download', $order->invoice)}}">Download</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->
</div>
@endsection