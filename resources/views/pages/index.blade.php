@extends('layouts.frontend')
@section('title', 'Home Page')
@section('content')
    {{--SLIDE SHOW--}}
    <div id="slideshow" class="clearfix">
        <div class="bannercontainer banner-fullwidth" style="padding: 0 0;margin: 0px;background-color:#ffffff">
            <div id="sliderlayer146517296" class="rev_slider fullwidthbanner" style="width:100%;height:585px; " >
                <ul>

                    <li data-link="#"  data-masterspeed="300"  data-transition="random" data-slotamount="7" data-thumb="img/modules/leosliderlayer/bg-slider.jpg">
                        <img src="{{ theme('frontend/img/modules/leosliderlayer/bg-slider.jpg') }}" alt=""/>
                        <div class="caption lfr easeOutExpo                        "
                             data-x="30"
                             data-y="45"
                             data-speed="300"
                             data-start="400"
                             data-easing="easeOutExpo">

                            <img src="{{ theme('frontend/img/modules/leosliderlayer/image2.png') }}" alt=""/>

                        </div>
                        <div class="caption very_large_black_text lft easeOutExpo                        ltt"
                             data-x="708"
                             data-y="120"
                             data-speed="300"
                             data-start="800"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#ffffff">

                            Italian Wines

                        </div>
                        <div class="caption large_text lfl easeOutExpo                        ltb"
                             data-x="711"
                             data-y="222"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo"                           style="font-size:62px;background-color:transparent;color:#7b9f52">

                            <strong>30% </strong> OFF

                        </div>
                        <div class="caption small_text lfr easeOutExpo                        randomrotateout"
                             data-x="715"
                             data-y="293"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo"  data-link="http://www.prestashop.com/"                         style="font-size:14px;color:#fff">

                            Lorem dolor consectetur adipiscing netus fames turpis <br/>dummy text dustry.

                        </div>
                        <div class="caption link_detail lfr easeOutExpo                        "
                             data-x="721"
                             data-y="362"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo"                           style="font-size:14px;color:#fff">

                            shop now

                        </div>
                    </li>

                    <li   data-masterspeed="300"  data-transition="random" data-slotamount="7" data-thumb="img/modules/leosliderlayer/bg-slider.jpg">
                        <img src="{{ theme('frontend/img/modules/leosliderlayer/bg-slider.jpg') }}" alt=""/>
                        <div class="caption very_large_black_text lfb easeOutExpo                        randomrotateout"
                             data-x="57"
                             data-y="107"
                             data-speed="300"
                             data-start="800"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#ffffff">

                            Wine Store

                        </div>
                        <div class="caption large_text lfr easeOutExpo                        stb"
                             data-x="62"
                             data-y="203"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#7b9f52">

                            <strong>10%</strong> OFF

                        </div>
                        <div class="caption small_text lfb easeOutExpo                        stl"
                             data-x="69"
                             data-y="276"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo"  data-link="http://www.prestashop.com/"                         style="font-size:14px;color:#FFF">

                            Lorem dolor consectetur adipiscing netus fames turpis<BR> dummy text dustry

                        </div>
                        <div class="caption link_detail lfb easeOutExpo                        "
                             data-x="70"
                             data-y="342"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo"                           style="color:#FFF">

                            SHOP NOW

                        </div>
                        <div class="caption lfb easeOutExpo                        "
                             data-x="554"
                             data-y="24"
                             data-speed="300"
                             data-start="2400"
                             data-easing="easeOutExpo"                           >

                            <img src="{{ theme('frontend/img/modules/leosliderlayer/image1.png') }}" alt=""/>

                        </div>
                    </li>

                    <li   data-masterspeed="300"  data-transition="random" data-slotamount="7" data-thumb="img/modules/leosliderlayer/bg-slider.jpg">
                        <img src="{{ theme('frontend/img/modules/leosliderlayer/bg-slider.jpg') }}" alt=""/>
                        <div class="caption randomrotate easeOutExpo                        "
                             data-x="62"
                             data-y="61"
                             data-speed="300"
                             data-start="600"
                             data-easing="easeOutExpo"                           >

                            <img src="{{ theme('frontend/img/modules/leosliderlayer/image5.png') }}" alt=""/>

                        </div>
                        <div class="caption very_large_black_text lft easeOutExpo                        "
                             data-x="588"
                             data-y="104"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeOutExpo"  data-link="#"                         style="font-size:62px;color:#FFF">

                            Lorem ipsum

                        </div>
                        <div class="caption large_text lfb easeOutExpo                        "
                             data-x="589"
                             data-y="211"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#7b9f52">

                            <strong> 15%</strong> OFF

                        </div>
                        <div class="caption small_text randomrotate easeOutExpo                        "
                             data-x="599"
                             data-y="294"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo"  data-link="http://www.prestashop.com/"                         style="font-size:14px;color:#fff">

                            Lorem dolor consectetur adipiscing netus fames turpis<br/> dummy text dustryShop Now

                        </div>
                        <div class="caption link_detail randomrotate easeOutExpo                        "
                             data-x="598"
                             data-y="373"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo"                           style="color:#FFF">

                            SHOP NOW

                        </div>
                    </li>
                </ul>

                <div class="tp-bannertimer tp-top"></div>
            </div>
        </div>


    </div>
    {{--END SLIDE SHOW--}}

    <div id="columns" class="columns-container">
        <div class="container">
            <div class="row">
                <div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12">

                </div>
            </div>
            <div class="row">
                <!-- Center -->
                <div id="center_column" class="col-md-12">
                    <div class="clearfix">

                        <div class="clearfix">                                                                                                                                    <div class="row " >
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 nopadding nobackground" >
                                    <div class="widget-html block">
                                        <div class="block_content">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12 block ">
                                                    <div class=" banner-image"><img class="img-responsive" src="{{theme('frontend/img/modules/leomanagewidgets/banner1.jpg')}}" alt="" /></div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 block">
                                                    <div class=" banner-image"><img class="img-responsive " src="{{theme('frontend/img/modules/leomanagewidgets/banner2.jpg')}}" alt="" /></div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 block">
                                                    <div class=" banner-image "><img class="img-responsive" src="{{theme('frontend/img/modules/leomanagewidgets/banner3.jpg')}}" alt="" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 nopadding nobackground hidden-xs hidden-sm hidden-sp" >
                                    <div class="widget-html block">
                                        <div class="block_content">
                                            <div class="media-list clearfix">
                                                <div class="wapper wapper-left">
                                                    <div class="media free">
                                                        <div class="media-content"><a class="pull-left" href="#"><img src="{{ theme('frontend/img/modules/leomanagewidgets/icon-free.png') }}" alt="" /></a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Free Shipping</h4>
                                                                <p>On order over $99.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wapper  wapper-center">
                                                    <div class="media Discount">
                                                        <div class="media-content"><a class="pull-left" href="#"><img src="{{ theme('frontend/img/modules/leomanagewidgets/icon-discounts.pn') }}g" alt="" /></a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Discount on Orders</h4>
                                                                <p>Tellus aodio consequat odio sed.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wapper  wapper-right">
                                                    <div class="media need">
                                                        <div class="media-content"><a class="pull-left" href="#"><img src="{{ theme('frontend/img/modules/leomanagewidgets/icon-need.png') }}" alt="" /></a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Need on Help</h4>
                                                                <p>On order over $88.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12" >

                                    <div class="products_block exclusive leomanagerwidgets nopadding nobackground text-center block" >
                                        <h4 class="page-heading text-center">New products</h4>
                                        <div class="block_content text-left">
                                            <div class="carousel slide" id="leoproductcarousel152678724">

                                                <div class="carousel-btn">
                                                    <a class="carousel-control left" href="#leoproductcarousel152678724"   data-slide="prev">&lsaquo;</a>
                                                    <a class="carousel-control right" href="#leoproductcarousel152678724"  data-slide="next">&rsaquo;</a>
                                                </div>

                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <div class="product_list grid">
                                                            <div class="row">
                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="8"></div>
                                                                                <a class="product_img_link"	href="home/8-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus27.jp')}}g" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="8"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/8-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/8-donec-tellus-purus.html" title="Quick view" ></a>
                                                                                <span class="new-box">
                                                                                    <span class="new-label product-label">New</span>
                                                                                </span>
                                                                                <span class="sale-box">
                                                                                    <span class="sale-label product-label">Sale!</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/8-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url" >
                                                                                        Donec tellus purus
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																			<span itemprop="price" class="price product-price">
																				$126.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="online_only label label-warning">Online only</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																				<span class="available-now">
																					<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="orderc4c4.html?add=1&amp;id_product=8&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="8">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/8-donec-tellus-purus.html" data-id-product="8" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_8" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="9"></div>
                                                                                <a class="product_img_link"	href="home/9-donec-tellus-purus.html" title="Fusce a congue" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus31.jpg')}}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="9"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/9-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/9-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																				<span class="new-box">
																					<span class="new-label product-label">New</span>
																				</span>
																				<span class="sale-box">
																					<span class="sale-label product-label">Sale!</span>
																				</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/9-donec-tellus-purus.html" title="Fusce a congue" itemprop="url" >
                                                                                        Fusce a congue
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																					<span itemprop="price" class="price product-price">
																						$167.91						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />

																						<span class="old-price product-price">
																							$193.00
																						</span>
                                                                                    <span class="price-percent-reduction">-13%</span>


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																						<span class="available-now">
																							<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="ordere04f.html?add=1&amp;id_product=9&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="9">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/9-donec-tellus-purus.html" data-id-product="9" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_9" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '9', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="10"></div>
                                                                                <a class="product_img_link"	href="home/10-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus33.jpg')}}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="10"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/10-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/10-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																						<span class="new-box">
																							<span class="new-label product-label">New</span>
																						</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/10-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url" >
                                                                                        Donec tellus purus
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star star_on"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "3" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																							<span itemprop="price" class="price product-price">
																								$323.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																								<span class="available-now">
																									<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="ordera5cc.html?add=1&amp;id_product=10&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="10">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/10-donec-tellus-purus.html" data-id-product="10" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_10" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="11"></div>
                                                                                <a class="product_img_link"	href="home/11-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus34.jpg')}}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="11"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/11-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/11-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																								<span class="new-box">
																									<span class="new-label product-label">New</span>
																								</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/11-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url" >
                                                                                        Donec tellus purus
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																									<span itemprop="price" class="price product-price">
																										$243.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																										<span class="available-now">
																											<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order37e9.html?add=1&amp;id_product=11&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="11">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/11-donec-tellus-purus.html" data-id-product="11" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_11" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="item ">
                                                        <div class="product_list grid">
                                                            <div class="row">
                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="12"></div>
                                                                                <a class="product_img_link"	href="home/12-donec-tellus-purus.html" title="Morbi ullamcorper" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus35.jpg')}}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="12"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/12-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/12-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																										<span class="new-box">
																											<span class="new-label product-label">New</span>
																										</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/12-donec-tellus-purus.html" title="Morbi ullamcorper" itemprop="url" >
                                                                                        Morbi ullamcorper
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																											<span itemprop="price" class="price product-price">
																												$238.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																												<span class="available-now">
																													<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/12-donec-tellus-purus.html" data-id-product="12" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_12" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="13"></div>
                                                                                <a class="product_img_link"	href="home/13-donec-tellus-purus.html" title="Lorem ipsum dolor" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus36.jpg')}}" alt="Morbi ullamcorper" title="Morbi ullamcorper" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="13"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/13-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/13-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																												<span class="new-box">
																													<span class="new-label product-label">New</span>
																												</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/13-donec-tellus-purus.html" title="Lorem ipsum dolor" itemprop="url" >
                                                                                        Lorem ipsum dolor
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																													<span itemprop="price" class="price product-price">
																														$545.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																														<span class="available-now">
																															<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="ordera1f3.html?add=1&amp;id_product=13&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="13">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/13-donec-tellus-purus.html" data-id-product="13" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_13" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="14"></div>
                                                                                <a class="product_img_link"	href="home/14-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus37.jpg')}}" alt="Lorem ipsum dolor" title="Lorem ipsum dolor" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="14"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/14-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/14-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																														<span class="new-box">
																															<span class="new-label product-label">New</span>
																														</span>
																														<span class="sale-box">
																															<span class="sale-label product-label">Sale!</span>
																														</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/14-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url" >
                                                                                        Fusce vestibulum
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																															<span itemprop="price" class="price product-price">
																																$423.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																<span class="available-now">
																																	<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order9ad2.html?add=1&amp;id_product=14&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="14">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/14-donec-tellus-purus.html" data-id-product="14" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_14" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '14', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="15"></div>
                                                                                <a class="product_img_link"	href="home/15-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus38.jpg')}}" alt="Fusce vestibulum" title="Fusce vestibulum" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="15"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/15-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/15-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																<span class="new-box">
																																	<span class="new-label product-label">New</span>
																																</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/15-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url" >
                                                                                        Fusce vestibulum
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																	<span itemprop="price" class="price product-price">
																																		$223.25						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />

																																		<span class="old-price product-price">
																																			$235.00
																																		</span>
                                                                                    <span class="price-percent-reduction">-5%</span>


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="discount label label-danger">Reduced price!</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																		<span class="available-now">
																																			<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order1f77.html?add=1&amp;id_product=15&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="15">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/15-donec-tellus-purus.html" data-id-product="15" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_15" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '15', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    </div>

                                </div>
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12" >

                                    <!-- MODULE Block blockleoblogstabs -->
                                    <div id="blockleoblogstabs" class="block blogs_block exclusive blockleoblogs nobackground products_block text-center nopadding">
                                        <h4 class="page-heading ">Latest Blogs</h4>
                                        <div class="block_content">
                                            <div class="carousel slide" id="blockleoblogs">

                                                <div class="carousel-btn">
                                                    <a class="carousel-control left" href="#blockleoblogs"   data-slide="prev">&lsaquo;</a>
                                                    <a class="carousel-control right" href="#blockleoblogs"  data-slide="next">&rsaquo;</a>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog first_item">
                                                                <div class="blog_container clearfix">

                                                                    <div class="blog-image">
                                                                        <img src="{{ theme('frontend/img/leoblog/b/6/276_234/b-blog-4.jpg') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="img-responsive" alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"/>
                                                                    </div>

                                                                    <div class="blog-meta text-left">
                                                                        <h5><a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium...</a></h5>





                                                                        <div class="blog-shortinfo">

                                                                            Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...

                                                                        </div>
                                                                        <p>
                                                                            <a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="view">Read more</a>
                                                                        </p>
                                                                    </div>



                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog last_item">
                                                                <div class="blog_container clearfix">

                                                                    <div class="blog-image">
                                                                        <img src="{{ theme('frontend/img/leoblog/b/7/276_234/b-blog-5.jpg') }}" title="Morbi condimentum molestie Nam enim odio sodales" class="img-responsive" alt="Morbi condimentum molestie Nam enim odio sodales"/>
                                                                    </div>

                                                                    <div class="blog-meta text-left">
                                                                        <h5><a href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b7.html" title="Morbi condimentum molestie Nam enim odio sodales">Morbi...</a></h5>





                                                                        <div class="blog-shortinfo">

                                                                            Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum....

                                                                        </div>
                                                                        <p>
                                                                            <a href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b7.html" title="Morbi condimentum molestie Nam enim odio sodales" class="view">Read more</a>
                                                                        </p>
                                                                    </div>



                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="item ">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog first_item">
                                                                <div class="blog_container clearfix">

                                                                    <div class="blog-image">
                                                                        <img src="{{ theme('frontend/img/leoblog/b/8/276_234/b-blog-6.jpg') }}" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" class="img-responsive" alt="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus"/>
                                                                    </div>

                                                                    <div class="blog-meta text-left">
                                                                        <h5><a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at...</a></h5>





                                                                        <div class="blog-shortinfo">

                                                                            Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi...

                                                                        </div>
                                                                        <p>
                                                                            <a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" class="view">Read more</a>
                                                                        </p>
                                                                    </div>



                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog last_item">
                                                                <div class="blog_container clearfix">

                                                                    <div class="blog-image">
                                                                        <img src="{{ theme('frontend/img/leoblog/b/9/276_234/b-blog-7.jpg') }}" title="Nullam ullamcorper nisl quis ornare molestie" class="img-responsive" alt="Nullam ullamcorper nisl quis ornare molestie"/>
                                                                    </div>

                                                                    <div class="blog-meta text-left">
                                                                        <h5><a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html" title="Nullam ullamcorper nisl quis ornare molestie">Nullam...</a></h5>





                                                                        <div class="blog-shortinfo">

                                                                            Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus,...

                                                                        </div>
                                                                        <p>
                                                                            <a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html" title="Nullam ullamcorper nisl quis ornare molestie" class="view">Read more</a>
                                                                        </p>
                                                                    </div>



                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="item ">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog first_item">
                                                                <div class="blog_container clearfix">

                                                                    <div class="blog-image">
                                                                        <img src="{{ theme('frontend/img/leoblog/b/5/276_234/b-blog-3.jpg') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="img-responsive" alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"/>
                                                                    </div>

                                                                    <div class="blog-meta text-left">
                                                                        <h5><a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b5.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium...</a></h5>





                                                                        <div class="blog-shortinfo">

                                                                            Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...

                                                                        </div>
                                                                        <p>
                                                                            <a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b5.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="view">Read more</a>
                                                                        </p>
                                                                    </div>



                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog last_item">
                                                                <div class="blog_container clearfix">

                                                                    <div class="blog-image">
                                                                        <img src="{{ theme('frontend/img/leoblog/b/4/276_234/b-blog-2.jpg') }}" title="Ipsum cursus vestibulum at interdum Vivamus" class="img-responsive" alt="Ipsum cursus vestibulum at interdum Vivamus"/>
                                                                    </div>

                                                                    <div class="blog-meta text-left">
                                                                        <h5><a href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html" title="Ipsum cursus vestibulum at interdum Vivamus">Ipsum cursus...</a></h5>





                                                                        <div class="blog-shortinfo">

                                                                            Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget...

                                                                        </div>
                                                                        <p>
                                                                            <a href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html" title="Ipsum cursus vestibulum at interdum Vivamus" class="view">Read more</a>
                                                                        </p>
                                                                    </div>



                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /MODULE Block blockleoblogstabs -->

                                </div>
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12" >

                                    <div class="products_block exclusive leomanagerwidgets nopadding nobackground text-center block" >
                                        <h4 class="page-heading text-center">
                                            Featured products
                                        </h4>
                                        <div class="block_content text-left">
                                            <div class="carousel slide" id="leoproductcarousel595809559">

                                                <div class="carousel-btn">
                                                    <a class="carousel-control left" href="#leoproductcarousel595809559"   data-slide="prev">&lsaquo;</a>
                                                    <a class="carousel-control right" href="#leoproductcarousel595809559"  data-slide="next">&rsaquo;</a>
                                                </div>

                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <div class="product_list grid">
                                                            <div class="row">
                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="12"></div>
                                                                                <a class="product_img_link"	href="home/12-donec-tellus-purus.html" title="Morbi ullamcorper" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus35.jpg')}}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="12"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/12-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/12-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																		<span class="new-box">
																																			<span class="new-label product-label">New</span>
																																		</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/12-donec-tellus-purus.html" title="Morbi ullamcorper" itemprop="url" >
                                                                                        Morbi ullamcorper
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																			<span itemprop="price" class="price product-price">
																																				$238.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																				<span class="available-now">
																																					<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/12-donec-tellus-purus.html" data-id-product="12" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_12" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="13"></div>
                                                                                <a class="product_img_link"	href="home/13-donec-tellus-purus.html" title="Lorem ipsum dolor" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus36.jpg')}}" alt="Morbi ullamcorper" title="Morbi ullamcorper" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="13"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/13-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/13-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																				<span class="new-box">
																																					<span class="new-label product-label">New</span>
																																				</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/13-donec-tellus-purus.html" title="Lorem ipsum dolor" itemprop="url" >
                                                                                        Lorem ipsum dolor
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																					<span itemprop="price" class="price product-price">
																																						$545.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																						<span class="available-now">
																																							<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="ordera1f3.html?add=1&amp;id_product=13&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="13">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/13-donec-tellus-purus.html" data-id-product="13" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_13" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="14"></div>
                                                                                <a class="product_img_link"	href="home/14-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus37.jpg')}}" alt="Lorem ipsum dolor" title="Lorem ipsum dolor" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="14"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/14-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/14-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																						<span class="new-box">
																																							<span class="new-label product-label">New</span>
																																						</span>
																																						<span class="sale-box">
																																							<span class="sale-label product-label">Sale!</span>
																																						</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/14-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url" >
                                                                                        Fusce vestibulum
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																							<span itemprop="price" class="price product-price">
																																								$423.00						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																								<span class="available-now">
																																									<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order9ad2.html?add=1&amp;id_product=14&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="14">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/14-donec-tellus-purus.html" data-id-product="14" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_14" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '14', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="15"></div>
                                                                                <a class="product_img_link"	href="home/15-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus38.jpg')}}" alt="Fusce vestibulum" title="Fusce vestibulum" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="15"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/15-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/15-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																								<span class="new-box">
																																									<span class="new-label product-label">New</span>
																																								</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/15-donec-tellus-purus.html" title="Fusce vestibulum" itemprop="url" >
                                                                                        Fusce vestibulum
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																									<span itemprop="price" class="price product-price">
																																										$223.25						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />

																																										<span class="old-price product-price">
																																											$235.00
																																										</span>
                                                                                    <span class="price-percent-reduction">-5%</span>


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="discount label label-danger">Reduced price!</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																										<span class="available-now">
																																											<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order1f77.html?add=1&amp;id_product=15&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="15">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/15-donec-tellus-purus.html" data-id-product="15" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_15" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '15', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="item ">
                                                        <div class="product_list grid">
                                                            <div class="row">
                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="16"></div>
                                                                                <a class="product_img_link"	href="home/16-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus39.jpg')}}" alt="Fusce vestibulum" title="Fusce vestibulum" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="16"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/16-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/16-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																										<span class="new-box">
																																											<span class="new-label product-label">New</span>
																																										</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/16-donec-tellus-purus.html" title="Donec tellus purus" itemprop="url" >
                                                                                        Donec tellus purus
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																											<span itemprop="price" class="price product-price">
																																												$223.25						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />

																																												<span class="old-price product-price">
																																													$235.00
																																												</span>
                                                                                    <span class="price-percent-reduction">-5%</span>


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="discount label label-danger">Reduced price!</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																												<span class="available-now">
																																													<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order8636.html?add=1&amp;id_product=16&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="16">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/16-donec-tellus-purus.html" data-id-product="16" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_16" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '16', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="17"></div>
                                                                                <a class="product_img_link"	href="home/17-donec-tellus-purus.html" title="Ligula ullamcorper" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus40.jpg')}}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="17"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/17-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/17-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																												<span class="new-box">
																																													<span class="new-label product-label">New</span>
																																												</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/17-donec-tellus-purus.html" title="Ligula ullamcorper" itemprop="url" >
                                                                                        Ligula ullamcorper
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																													<span itemprop="price" class="price product-price">
																																														$223.25						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />

																																														<span class="old-price product-price">
																																															$235.00
																																														</span>
                                                                                    <span class="price-percent-reduction">-5%</span>


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="discount label label-danger">Reduced price!</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																														<span class="available-now">
																																															<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order12d5.html?add=1&amp;id_product=17&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="17">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/17-donec-tellus-purus.html" data-id-product="17" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_17" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="18"></div>
                                                                                <a class="product_img_link"	href="home/18-donec-tellus-purus.html" title="Ligula ullamcorper" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus41.jpg')}}" alt="Ligula ullamcorper" title="Ligula ullamcorper" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="18"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/18-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/18-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																														<span class="new-box">
																																															<span class="new-label product-label">New</span>
																																														</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/18-donec-tellus-purus.html" title="Ligula ullamcorper" itemprop="url" >
                                                                                        Ligula ullamcorper
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																															<span itemprop="price" class="price product-price">
																																																$223.25						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />

																																																<span class="old-price product-price">
																																																	$235.00
																																																</span>
                                                                                    <span class="price-percent-reduction">-5%</span>


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="discount label label-danger">Reduced price!</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																																<span class="available-now">
																																																	<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">


                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="order1518.html?add=1&amp;id_product=18&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="18">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>


                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/18-donec-tellus-purus.html" data-id-product="18" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>



                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_18" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '18', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>

                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="19"></div>
                                                                                <a class="product_img_link"	href="home/19-donec-tellus-purus.html" title="Mattis augue" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus42.jpg')}}" alt="Mattis augue" title="Mattis augue" itemprop="image" />
                                                                                    <span class="product-additional" data-idproduct="19"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="home/19-donec-tellus-purus.html" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/19-donec-tellus-purus.html" title="Quick view" >
                                                                                </a>
																																																<span class="new-box">
																																																	<span class="new-label product-label">New</span>
																																																</span>
                                                                            </div>


                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="home/19-donec-tellus-purus.html" title="Mattis augue" itemprop="url" >
                                                                                        Mattis augue
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus
                                                                                </p>


                                                                                <div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                                                                    <div class="star_content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <meta itemprop="worstRating" content = "0" />
                                                                                        <meta itemprop="ratingValue" content = "0" />
                                                                                        <meta itemprop="bestRating" content = "5" />
                                                                                    </div>
                                                                                    <span class="nb-comments"><span itemprop="reviewCount">0</span> Review(s)</span>
                                                                                </div>

                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
																																																	<span itemprop="price" class="price product-price">
																																																		$223.25						</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />

																																																		<span class="old-price product-price">
																																																			$235.00
																																																		</span>
                                                                                    <span class="price-percent-reduction">-5%</span>


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="discount label label-danger">Reduced price!</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
																																																		<span class="available-now">
																																																			<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">
                                                                                    <a class="cart button ajax_add_to_cart_button btn btn-default" href="orderb1da.html?add=1&amp;id_product=19&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="19">
                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </a>
                                                                                    <a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="home/19-donec-tellus-purus.html" data-id-product="19" title="Add to compare" >
                                                                                        <i class="fa fa-retweet"></i>
                                                                                        <span>Add to compare</span>
                                                                                    </a>
                                                                                    <a class="wishlist btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_19" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;" data-toggle="tooltip" title="Add to Wishlist">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection