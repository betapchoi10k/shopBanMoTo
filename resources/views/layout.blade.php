<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop bán xe Moto Laravel</title>

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />

    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/535f28fd53.js" crossorigin="anonymous"></script>
    {{-- css modal map --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/MapBox.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/button.css')}}">

</head>
<style>
body {
    margin: 0;
    padding: 0;
}

#map {
    position: absolute;
    top: 0;
    left: 0;
}

.item-language:hover {
    background-color: #ccc;
}

.openOptionLanguage {
    display: block !important;
}
</style>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 168 297 8706</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> ducduy10k@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li style="font-size: 12px;color: #696763;font-family: 'Roboto', sans-serif;">
                                    <div class="" id="language-active" style="padding: 10px 15px;">
                                        <img width="16px" height="16px" style="border-radius:50%;"
                                            src="{{asset('public/frontend/images/home/vietnam-flag-icon-256.png')}}"
                                            alt="">&nbsp
                                        <span>Việt Nam</span>
                                    </div>
                                    <div id='optionLanguage' class=""
                                        style="background-color: white;display: none;position: absolute;z-index: 1;border: 1px solid #ccc;padding: 5px;top: 33px; right: -30px;">
                                        <a href="" class="item-language" style="display:block;padding:2px">
                                            <img width="16px" height="16px"
                                                src="{{asset('public/frontend/images/home/united-states-of-america-flag-xl.png')}}"
                                                alt="">&nbsp
                                            <span>USA</span>
                                        </a>

                                        <a href="" class="item-language" style="display:block;padding:2px;">
                                            <img width="16px" height="16px"
                                                src="{{asset('public/frontend/images/home/vietnam-flag-icon-256.png')}}"
                                                alt="">&nbsp
                                            <span>Việt Nam</span>
                                        </a>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trang-chu')}}"><img src="{{'public/frontend/images/home/logo.png'}}"
                                    alt="" /></a>
                        </div>
                       
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog - Tin tức<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">Giỏ hàng</a></li>
                                <li><a href="contact-us.html">Video</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    {{-- information --}}
    <div class="information"
        style="display: block;width: 50px;height: 100px;right: 20px;top: 40vh;position: fixed;z-index:1;">
        <!-- location -->
        <div class="item-infor" id='openMap'
            style="cursor: pointer;position: absolute;width:48px;border-radius: 50%;background: aqua; transform: translateY(-115px);height: 48px;border:2px solid white;">
            <i style="font-size: 2.6rem;color: white;margin: 0 auto;position: absolute;top: 50%;transform: translateY(-13px) translateX(67%);"
                class="fas fa-map-marker-alt"></i>
        </div>
        <!-- Send message -->
        <div class="item-infor" id='open-modal-mail' data-toggle="modal" data-target="#modalMessage"
            style="cursor: pointer;position: absolute;width:48px;border-radius: 50%;background: orange; transform: translateY(-55px);height: 48px;border:2px solid white;">
            <i style="font-size: 2.6rem;color: white;margin: 0 auto;position: absolute;top: 50%;transform: translateY(-50%) translateX(35%);"
                class="fas fa-envelope"></i>
        </div>
        <!-- Phone call -->
        <div class="item-infor" id='open-modal-call' data-toggle="modal" data-target="#modalPhone"
            style="cursor: pointer;position: absolute;width:48px;border-radius: 50%;background: #22f028; transform: translateY(5px);height: 48px;border:2px solid white;">
            <i style="font-size: 2.6rem;color:white ;margin: 0 auto;position: absolute;top: 50%;transform: translateY(-50%) translateX(36%);"
                class="fas fa-phone-alt"></i>
        </div>
        <!-- Messenger -->
        <div class="item-infor" id='open-modal-messeger'
            style="cursor: pointer;position: absolute;width:48px;border-radius: 50%;background: #3871f5; transform: translateY(65px);height: 48px;border:2px solid white;">
            <i style="font-size: 2.6rem;color:white ;margin: 0 auto;position: absolute;top: 50%;transform: translateY(-50%) translateX(36%);"
                class="fab fa-facebook-messenger"></i>
        </div>
        <!-- Zalo -->
        <div class="item-infor"  id='open-modal-zalo'
            style="cursor: pointer;position: absolute;width:48px;border-radius: 50%;background:url('../public/frontend/images/home/logo-zalo-vector.png') ; transform: translateY(125px);height: 48px;border:2px solid white;overflow: hidden;">
            <img style="width: 52px;height: 52px;border-radius: 50px;transform: translate(-2px, -7px);"
                src="{{asset('public/frontend/images/home/logo-zalo-vector.png')}}" alt="" id="contactZalo">
        </div>

    </div>


    {{--  map location --}}


    <div class="" id="map-infor"
        style="position: fixed;width:50vw;height: calc(70vh - 55px);top :10%; right: 0 ;z-index: 2;transform:translateX(100%);transition: all 0.9s ease 0.1s;box-shadow: rgb(204, 204, 204) 5px 5px 5px;border: 1px solid #ccc;">
        <div class='modal-title-x' style="width: 100%;height: 30px;background: white;/* bottom: 100%; */;padding:5px 15px;   "> 
            Vị trí 
            <span onclick="closemap()"><i class='fa fa-times' style="right: 0;position: absolute;padding: 9px 13px;" ></i></span>
        </div>
        <div class='modal-body-x' style="position:Relative;height: calc(100% - 30px);width:100%;">
        <div style=" height:100% !important;width:100% !important;" id="map"></div>
        <div id="M3D" onclick="M3D()">3D</div>
        <div id="shop-position">
            <select name="" id="">
                <option value="">Hà Nội</option>
                <option value="">Đà Nẵng</option>
                <option value="">TP Hồ Chí Minh</option>
            </select>
        </div>
        <div>
            
        </div>
        <!-- Instruction -->
        <div style="display: none;" id="instructions">hello</div>
        </div>
    </div>

    {{-- end map location --}}
    <!-- Modal send message -->

    <div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-labelledby="modalMessageLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modalMessageLabel" style="text-align:center;">Gửi tin nhắn cho chúng tôi
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="margin-top:-18px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <p style="margin-top:5px;">&nbsp Phone number (*)</p>
                        <input type="tel" placeholder='Enter your phone number ... ' class="form-control">
                        <p style="margin-top:5px;">&nbsp Content (*)</p>
                        <textarea id="content-message" placeholder='Leave a message for us .' class='form-control'
                            name="content-message" rows="4" cols="50"></textarea>
                        <p style="margin-top:5px;">&nbsp Your name </p>
                        <input type="text" id='yourName' placeholder="Your name ..." class='form-control'>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" style="margin-top:0px;">Send</button>
                </div>
            </div>
        </div>
    </div>


    <!-- End Modal send message -->
    <!-- Modal Phone  -->
    <!-- Modal -->
    <div class="modal fade" id="modalPhone" tabindex="-1" role="dialog" aria-labelledby="modalPhoneTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modalPhoneTitle" style="text-align:center;">Để lại số điện thoại của bạn
                    </h3>
                    <h5 style="text-align:center;">Chúng tôi sẽ gọi lại cho bạn trog thời gian ngắn nhất </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="margin-top: -46px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div
                        style="height: 32px;border: 1px solid #ccc;width: 255px;display:inline-block;margin-left: 95px;border-bottom-left-radius:5px;border-top-left-radius:5px;">
                        <i class="fas fa-phone-alt" style=" font-size: 17px; margin: 5px 10px;"></i>
                        <input type="text" class='input-none-outline' style="border:none;margin: 5px 10px;width: 190px;"
                            placeholder="Nhập số điện thoại của bạn ...">

                    </div>
                    <button class="btn custom-btn btn-15"
                        style="display: inline-block;margin-top: -5px;margin-left: -4px;border-bottom-left-radius: 0px;border-top-left-radius: 0px;">Yêu
                        cầu gọi lại</button>
                    <div style=" margin :10px auto;width:50%;">
                        <span
                            style="width:100px; height:2px;border-top:1px solid #ccc;display:inline-block;"></span>&nbsp&nbsp<span>Hoặc</span>&nbsp&nbsp<span
                            style="width:100px; height:2px;border-top:1px solid #ccc;display:inline-block;"></span>
                    </div>
                    <br>
                    <div style="text-align:center;">
                        <h4>Liên hệ với chúng tôi qua Hotline :</h4>
                        <h2>038 297 8706</h2>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal phone  -->
    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            
                            @foreach($category as $key =>$cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                            @foreach($brand as $key =>$bra)
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="{{URL::to('/thuong-hieu-san-pham/'.$bra->brand_id)}}"> <span class="pull-right">(50)</span>{{$bra->brand_name}}</a>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                        <!--/brands_products-->

                        <div class="price-range">
                            <!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                    data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>
                        <!--/price-range-->

                        <div class="shipping text-center">
                            <!--shipping-->
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">

                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">

                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">

                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left" id='testTranslate'>Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>

    {{-- map js --}}

    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js">
    </script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
        type="text/css" />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js">
    </script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css"
        type="text/css" />
    <script>

   
    // document.getElementById("language-active").addEventListener("click", function(event) {
    //     event.preventDefault()
    // });
    $(function() {
        $('#language-active').click(function(event) {
            console.log("da vao");
            $('#optionLanguage').toggleClass('openOptionLanguage');
        });
        $('#open-modal-zalo').click(function(event){
            newwindown = window.open('https://zalo.me/0382978706','_blank');
        })
        
        $('#open-modal-messeger').click(function(event){
            newwindown = window.open('https://www.facebook.com/messages/t/102527788259135','_blank');
        })

    })
    </script>
    <script src="{{asset('public/frontend/js/MapBox.js')}}"></script>
</body>
</html>