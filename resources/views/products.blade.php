@extends('layouts/app')
@section('content')
<div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{asset('frontend/images/background/bg4.jpg')}});">
    <div class="container">
        <div class="dez-bnr-inr-entry">
            <h1 class="text-white">Products</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Products</li>
        </ul>
    </div>
</div>

<div class="section-full bg-white content-inner">
    <div class="container">
        <div class="row m-b40">
            <div class="col-lg-4 col-md-6 m-b30">
                <div class="dez-box add-product">
                    <div class="dez-media dez-img-effect"> <img src="{{asset('frontend/images/ads/thum1.jpg')}}" alt="">
                        <div class="dez-info-has p-a20 bg-black no-hover">
                            <div class="clearfix">
                                <h3 class="m-t0 m-b10">We Have The Expertise</h3>
                                <h2 class="m-b15">150$<del class="m-l10">180$</del></h2>
                            </div>
                            <div>
                                <a href="#" class="site-button">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 m-b30">
                <div class="dez-box add-product">
                    <div class="dez-media dez-img-effect"> <img src="{{asset('frontend/images/ads/thum2.jpg')}}">
                        <div class="dez-info-has p-a20 bg-black no-hover">
                            <div class="clearfix">
                                <h3 class="m-t0 m-b10">We Have The Expertise</h3>
                                <h2>910$<del class="m-l10">2900$</del></h2>
                            </div>
                            <div>
                                <a href="#" class="site-button">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 m-b30">
                <div class="dez-box add-product">
                    <div class="dez-media dez-img-effect"> <img src="{{asset('frontend/images/ads/thum3.jpg')}}">
                        <div class="dez-info-has p-a20 bg-black no-hover">
                            <div class="clearfix">
                                <h3 class="m-t0 m-b10">We Have The Expertise</h3>
                                <h2>210$<del class="m-l10">220$</del></h2>
                            </div>
                            <div>
                                <a href="#" class="site-button">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-12">
                <div class="widget bg-white">
                    <h4 class="widget-title">Search</h4>
                    <div class="search-bx">
                        <form role="search" method="post">
                            <div class="input-group">
                                <input name="text" class="form-control" placeholder="Write your text" type="text">
                                <span class="input-group-btn">
                                    <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="widget bg-white recent-posts-entry">
                    <h4 class="widget-title">Recent Posts</h4>
                    <div class="widget-post-bx">
                        <div class="widget-post clearfix">
                            <div class="dez-post-media"> <img src="{{asset('frontend/images/blog/recent-blog/pic1.jpg')}}" alt=""
                                    width="200" height="143"> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-header">
                                    <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
                                </div>
                                <div class="dez-post-meta">
                                    <ul>
                                        <li class="post-author">By Admin</li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-post clearfix">
                            <div class="dez-post-media"> <img src="{{asset('frontend/images/blog/recent-blog/pic2.jpg')}}" alt=""
                                    width="200" height="160"> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-header">
                                    <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
                                </div>
                                <div class="dez-post-meta">
                                    <ul>
                                        <li class="post-author">By Admin</li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-post clearfix">
                            <div class="dez-post-media"> <img src="{{asset('frontend/images/blog/recent-blog/pic3.jpg')}}" alt=""
                                    width="200" height="160"> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-header">
                                    <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
                                </div>
                                <div class="dez-post-meta">
                                    <ul>
                                        <li class="post-author">By Admin</li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget bg-white  widget_tag_cloud">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tagcloud">
                        <a href="javascript:void(0);">Design</a>
                        <a href="javascript:void(0);">User interface</a>
                        <a href="javascript:void(0);">SEO</a>
                        <a href="javascript:void(0);">WordPress</a>
                        <a href="javascript:void(0);">Development</a>
                        <a href="javascript:void(0);">Joomla</a>
                        <a href="javascript:void(0);">Design</a>
                        <a href="javascript:void(0);">User interface</a>
                        <a href="javascript:void(0);">SEO</a>
                        <a href="javascript:void(0);">WordPress</a>
                        <a href="javascript:void(0);">Development</a>
                        <a href="javascript:void(0);">Joomla</a>
                        <a href="javascript:void(0);">Design</a>
                        <a href="javascript:void(0);">User interface</a>
                        <a href="javascript:void(0);">SEO</a>
                        <a href="javascript:void(0);">WordPress</a>
                        <a href="javascript:void(0);">Development</a>
                        <a href="javascript:void(0);">Joomla</a>
                    </div>
                </div>
                <div class="widget bg-white widget_services">
                    <h4 class="widget-title">Our services</h4>
                    <ul>
                        <li><a href="#">Residential Construction</a></li>
                        <li><a href="#">Office Construction</a></li>
                        <li><a href="#">Wall Painting</a></li>
                        <li><a href="#">Window Construction</a></li>
                        <li><a href="#">Commercial Construction</a></li>
                        <li><a href="#">Construction Construction</a></li>
                        <li><a href="#">Water Tank Construction</a></li>
                        <li><a href="#">Construction Solutions</a></li>
                        <li><a href="#">Air Duct Construction</a></li>
                        <li><a href="#">Seasonal Construction</a></li>
                        <li><a href="#">Wodden Floor Construction</a></li>
                        <li><a href="#">Office Construction</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-7 col-sm-12">
                <div class="text-center m-b50">
                    <h2 class="m-t0">Latest Products</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-primary style-skew"></div>
                    </div>
                </div>
                <div class="row" id="masonry">
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img1.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                            <div class="sale">
                                <span class="site-button button-sm primary">Sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img2.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0">$20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img3.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                            <div class="sale">
                                <span class="site-button button-sm primary">Sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img4.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0">$20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img5.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                            <div class="sale">
                                <span class="site-button button-sm primary">Sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img6.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0">$20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img7.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                            <div class="sale">
                                <span class="site-button button-sm primary">Sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img8.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0">$20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img9.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0"> <del class="m-r10">$25.00</del> $20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                            <div class="sale">
                                <span class="site-button button-sm primary">Sale</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="text-center m-b30 m-t10 col-md-12">
                        <h2 class="m-t0 m-b15">Best Sellers</h2>
                        <div class="dez-separator-outer ">
                            <div class="dez-separator bg-primary style-skew"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img10.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                            <div class="sale">
                                <span class="site-button button-sm primary">Sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img11.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0">$20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30 product-item card-container">
                        <div class="dez-box ">
                            <div class="dez-thum-bx  dez-img-effect "> <img src="{{asset('frontend/images/product/img12.jpg')}}"
                                    alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i
                                                class="fa fa-cart-plus icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a
                                            href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dez-info p-a20 text-center">
                                <h4 class="dez-title m-t0 text-capitalize m-b5"><a href="#">Measuring
                                        Squares</a></h4>
                                <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                <div class="m-t10">
                                    <a href="#" class="site-button">Add To Cart </a>
                                </div>
                            </div>
                            <div class="sale">
                                <span class="site-button button-sm primary">Sale</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t30 product-service">
            <div class="col-md-6 col-lg-4 m-b30">
                <div class="icon-bx-wraper bx-style-1 p-a20 left bg-primary clearfix text-white">
                    <div class="icon-bx-md  bg-white text-primary"> <a href="#" class="icon-cell "><i
                                class="fa fa-plane"></i></a> </div>
                    <div class="icon-content">
                        <h3 class="dez-tilte text-capitalize m-b5">Free Shipping</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 m-b30">
                <div class="icon-bx-wraper bx-style-1 p-a20 left clearfix bg-primary text-white">
                    <div class="icon-bx-md  bg-white text-primary"> <a href="#" class="icon-cell "><i
                                class="fa fa-briefcase"></i></a> </div>
                    <div class="icon-content">
                        <h3 class="dez-tilte text-capitalize m-b5">Warehouse Prices</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 m-b30">
                <div class="icon-bx-wraper bx-style-1 p-a20 left bg-primary clearfix text-white">
                    <div class="icon-bx-md  bg-white text-primary"> <a href="#" class="icon-cell "><i
                                class="fa fa-cogs"></i></a> </div>
                    <div class="icon-content">
                        <h3 class="dez-tilte text-capitalize m-b5">Secure Shopping</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection