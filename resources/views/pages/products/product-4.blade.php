@extends('layouts.frontend')
@section('title','')
@section('content')



	<div id="breadcrumb" class="clearfix">
		<div class="container">
			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
				<span class="navigation-pipe" >&gt;</span>
				<a href="{{ url('champagne') }}" title="Champagne">Champagne</a>
				<span class="navigation-pipe">></span>Donec tellus purus

			</div>
			<!-- /Breadcrumb -->
		</div>
	</div>
	<!-- Content -->
	<div id="columns" class="columns-container">
		<div class="container">
			<div class="row">
				<div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12"></div>
			</div>
			<div class="row">
				<!-- Center -->
				<div id="center_column" class="col-md-12">
					<div class="clearfix">
						<div itemscope itemtype="http://schema.org/Product">
							<div class="primary_block">
								<div class="container">
									<div class="top-hr"></div>
								</div>
								<div class="row">
									<!-- left infos-->
									<div class="pb-left-column col-xs-12 col-sm-5 col-md-5">
										<!-- product img-->
										<div id="image-block" class="clearfix">
                                        <span class="new-box">
                                            <span class="new-label product-label">New</span>
                                        </span>
                                        <span id="view_full_size">
                                            <a class="jqzoom" title="Donec tellus purus" rel="gal1" href="../34-thickbox_default/donec-tellus-purus.jpg" itemprop="url">
												<img itemprop="image" src="{{ theme('frontend/') }}34-large_default/donec-tellus-purus.jpg" title="Donec tellus purus" alt="Donec tellus purus"/>
											</a>
                                        </span>
										</div>
										<!-- end image-block -->
										<!-- thumbnails -->
										<div id="views_block" class="clearfix ">
											<div id="thumbs_list">
												<ul id="thumbs_list_frame">
													<li id="thumbnail_34">
														<a href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: 'http://demo4leotheme.com/prestashop/leo_wine_store/34-large_default/donec-tellus-purus.jpg',largeimage: 'http://demo4leotheme.com/prestashop/leo_wine_store/34-thickbox_default/donec-tellus-purus.jpg'}" title="Donec tellus purus">
															<img class="img-responsive" id="thumb_34" src="{{ theme('frontend/') }}34-cart_default/donec-tellus-purus.jpg" alt="Donec tellus purus" title="Donec tellus purus" height="112" width="81" itemprop="image" />
														</a>
													</li>
													<li id="thumbnail_49" class="last">
														<a href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: 'http://demo4leotheme.com/prestashop/leo_wine_store/49-large_default/donec-tellus-purus.jpg',largeimage: 'http://demo4leotheme.com/prestashop/leo_wine_store/49-thickbox_default/donec-tellus-purus.jpg'}" title="Donec tellus purus">
															<img class="img-responsive" id="thumb_49" src="{{ theme('frontend/') }}49-cart_default/donec-tellus-purus.jpg" alt="Donec tellus purus" title="Donec tellus purus" height="112" width="81" itemprop="image" />
														</a>
													</li>
												</ul>
											</div>
											<!-- end thumbs_list -->
										</div>
										<!-- end views-block -->
										<!-- end thumbnails -->
										<p class="resetimg clear no-print">
                                        <span id="wrapResetImages" style="display: none;">
                                            <a href="11-donec-tellus-purus.html" name="resetImages">
												<i class="fa fa-repeat"></i>
												Display all pictures

											</a>
                                        </span>
										</p>
									</div>
									<!-- end pb-left-column -->
									<!-- end left infos-->
									<!-- center infos -->
									<div class="pb-center-column col-xs-12 col-sm-7 col-md-7">
										<h1 itemprop="name">Donec tellus purus</h1>
										<p class="socialsharing_product no-print">
											<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Donec%20tellus%20purus%20http_/demo4leotheme.com/prestashop/leo_wine_store/en/champagne/11-donec-tellus-purus.html');">
												<i class="fa fa-twitter"></i> Tweet

												<!-- <img src="http://demo4leotheme.com/prestashop/leo_wine_store/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
											</button>
											<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
												<i class="fa fa-facebook"></i> Share

												<!-- <img src="http://demo4leotheme.com/prestashop/leo_wine_store/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
											</button>
											<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
												<i class="fa fa-google-plus"></i> Google+

												<!-- <img src="http://demo4leotheme.com/prestashop/leo_wine_store/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
											</button>
											<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click();">
												<i class="fa fa-pinterest"></i> Pinterest

												<!-- <img src="http://demo4leotheme.com/prestashop/leo_wine_store/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
											</button>
										</p>
										<!--  /Module ProductComments -->
										<!-- usefull links-->
										<ul id="usefull_link_block" class="clearfix no-print">
											<li class="sendtofriend">
												<a id="send_friend_button" href="#send_friend_form">
													Send to a friend
												</a>
												<div style="display: none;">
													<div id="send_friend_form">
														<h2  class="page-subheading">
															Send to a friend
														</h2>
														<div class="row">
															<div class="product clearfix col-xs-12 col-sm-6">
																<img src="{{ theme('frontend/img/products/donec-tellus-purus34.jpg') }}" alt="Donec tellus purus" />
																<div class="product_desc">
																	<p class="product_name">
																		<strong>Donec tellus purus</strong>
																	</p>
																	<p>Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus</p>
																</div>
															</div>
															<!-- .product -->
															<div class="send_friend_form_content col-xs-12 col-sm-6" id="send_friend_form_content">
																<div id="send_friend_form_error"></div>
																<div id="send_friend_form_success"></div>
																<div class="form_container">
																	<p class="intro_form">
																		Recipient :
																	</p>
																	<p class="text">
																		<label for="friend_name">
																			Name of your friend
																			<sup class="required">*</sup> :

																		</label>
																		<input id="friend_name" name="friend_name" type="text" value=""/>
																	</p>
																	<p class="text">
																		<label for="friend_email">
																			E-mail address of your friend
																			<sup class="required">*</sup> :

																		</label>
																		<input id="friend_email" name="friend_email" type="text" value=""/>
																	</p>
																	<p class="txt_required">
																		<sup class="required">*</sup> Required fields

																	</p>
																</div>
																<p class="submit">
																	<button id="sendEmail" class="btn button button-small btn-sm" name="sendEmail" type="submit">
																		<span>Send</span>
																	</button>&nbsp;
																	or&nbsp;

																	<a class="closefb" href="#">
																		Cancel
																	</a>
																</p>
															</div>
															<!-- .send_friend_form_content -->
														</div>
													</div>
												</div>
											</li>
											<li class="print">
												<a href="javascript:print();">
													Print
												</a>
											</li>
										</ul>
										<p id="product_reference">
											<label>Model </label>
											<span class="editable" itemprop="sku">demo_11</span>
										</p>
										<p id="product_condition">
											<label>Condition </label>
											<link itemprop="itemCondition" href="http://schema.org/NewCondition"/>
											<span class="editable">New</span>
										</p>
										<div id="short_description_block">
											<div id="short_description_content" class="rte align_justify" itemprop="description">
												<p>Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus</p>
											</div>
											<p class="buttons_bottom_block">
												<a href="javascript:{}" class="button btn btn-default">
													More details
												</a>
											</p>
											<!---->
										</div>
										<!-- end short_description_block -->
										<!-- number of item in stock -->
										<p id="pQuantityAvailable">
											<span id="quantityAvailable">558</span>
											<span  style="display: none;" id="quantityAvailableTxt">Item</span>
											<span  id="quantityAvailableTxtMultiple">Items</span>
										</p>
										<!-- availability -->
										<p id="availability_statut">
											<span id="availability_value">In stock</span>
										</p>
										<p class="warning_inline" id="last_quantities" style="display: none" >Warning: Last items in stock!</p>
										<p id="availability_date" style="display: none;">
											<span id="availability_date_label">Availability date:</span>
											<span id="availability_date_value">0000-00-00</span>
										</p>
										<!-- Out of stock hook -->
										<div id="oosHook" style="display: none;"></div>
										<!-- pb-right-column-->
										<div class="pb-right-column">
											<!-- add to cart form-->
											<form id="buy_block" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/cart" method="post">
												<!-- hidden datas -->
												<p class="hidden">
													<input type="hidden" name="token" value="66b14ad074dd0871d55f1279b13e5cbd" />
													<input type="hidden" name="id_product" value="11" id="product_page_product_id" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="id_product_attribute" id="idCombination" value="" />
												</p>
												<div class="box-info-product">
													<div class="content_prices clearfix">
														<!-- prices -->
														<div class="price">
															<p class="our_price_display" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
																<link itemprop="availability" href="http://schema.org/InStock"/>
																<span id="our_price_display" itemprop="price">$243.00</span>
																<!---->
																<meta itemprop="priceCurrency" content="USD" />
															</p>
															<p id="reduction_percent"  style="display:none;">
																<span id="reduction_percent_display"></span>
															</p>
															<p id="reduction_amount"  style="display:none">
																<span id="reduction_amount_display"></span>
															</p>
															<p id="old_price" class="hidden">
																<span id="old_price_display"></span>
																<!--  -->
															</p>
														</div>
														<!-- end prices -->
														<div class="clear"></div>
													</div>
													<!-- end content_prices -->
													<div class="product_attributes clearfix">
														<!-- quantity wanted -->
														<div class="box-quantity">
															<p id="quantity_wanted_p">
																<input type="text" name="qty" id="quantity_wanted" class="text form-control" value="1" />
																<a href="#" data-field-qty="qty" class="btn btn-default button-minus product_quantity_down">
                                                                <span>
                                                                    <i class="fa fa-minus"></i>
                                                                </span>
																</a>
																<a href="#" data-field-qty="qty" class="btn btn-default button-plus product_quantity_up ">
                                                                <span>
                                                                    <i class="fa fa-plus"></i>
                                                                </span>
																</a>
																<span class="clearfix"></span>
															</p>
														</div>
														<div class="box-cart-bottom">
															<div >
																<p id="add_to_cart" class="buttons_bottom_block no-print">
																	<button type="submit" name="Submit" class="exclusive btn btn-default">
																		<i class="fa fa-shopping-cart"></i>
																		<span>Add to cart</span>
																	</button>
																</p>
															</div>
														</div>
														<!-- end box-cart-bottom -->
														<!-- minimal quantity wanted -->
														<p id="minimal_quantity_wanted_p" style="display: none;">
															This product is not sold individually. You must select at least
															<b id="minimal_quantity_label">1</b> quantity for this product.

														</p>
													</div>
													<!-- end product_attributes -->
													<p class="buttons_bottom_block no-print">
														<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '11', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="Add to my wishlist">
															Add to my wishlist
														</a>
													</p>
													<!-- Productpaymentlogos module -->
													<div id="product_payment_logos">
														<div class="box-security">
															<h5 class="product-heading-h5"></h5>
															<img src="{{ theme('frontend/img/modules/productpaymentlogos/img/payment-logo.png') }}" alt="" class="img-responsive" />
														</div>
													</div>
													<!-- /Productpaymentlogos module -->
													<strong></strong>
												</div>
												<!-- end box-info-product -->
											</form>
										</div>
										<!-- end pb-right-column-->
									</div>
									<!-- end center infos-->
								</div>
							</div>
							<!-- end primary_block -->
							<div class="tab_product block">
								<ul class="nav nav-tabs tab-info page-product-heading">
									<li>
										<a href="#tab2" data-toggle="tab">More info</a>
									</li>
									<li>
										<a href="#idTab5" data-toggle="tab">Reviews</a>
									</li>
								</ul>
								<div class="tab-content">
									<!-- More info -->
									<section id="tab2" class="tab-pane page-product-box active">
										<!-- full description -->
										<div  class="rte">
											<p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
										</div>
									</section>
									<!--end  More info -->
									<!--HOOK_PRODUCT_TAB -->
									<session id="idTab5" class="tab-pane page-product-box">
										<div id="product_comments_block_tab">
											<p class="align_center">No customer comments for the moment.</p>
										</div>
										<!-- #product_comments_block_tab -->
									</session>
									<!-- Fancybox -->
									<div style="display: none;">
										<div id="new_comment_form">
											<form id="id_new_comment_form" action="#">
												<h2 class="page-subheading">
													Write a review
												</h2>
												<div class="row">
													<div class="product clearfix  col-xs-12 col-sm-6">
														<img src="{{ theme('frontend/') }}34-medium_default/donec-tellus-purus.jpg" height="178" width="125" alt="Donec tellus purus" />
														<div class="product_desc">
															<p class="product_name">
																<strong>Donec tellus purus</strong>
															</p>
															<p>Donec tellus purus, tristique at nulla id, mollis eleifend risus. Praesent cursus, leo et feugiat iaculis, risus orci venenatis tellus, sit amet iaculis libero ante nec metus</p>
														</div>
													</div>
													<div class="new_comment_form_content col-xs-12 col-sm-6">
														<h2>Write a review</h2>
														<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
															<ul></ul>
														</div>
														<ul id="criterions_list">
															<li>
																<label>Quality:</label>
																<div class="star_content">
																	<input class="star" type="radio" name="criterion[1]" value="1" />
																	<input class="star" type="radio" name="criterion[1]" value="2" />
																	<input class="star" type="radio" name="criterion[1]" value="3" checked="checked" />
																	<input class="star" type="radio" name="criterion[1]" value="4" />
																	<input class="star" type="radio" name="criterion[1]" value="5" />
																</div>
																<div class="clearfix"></div>
															</li>
														</ul>
														<label for="comment_title">
															Title:
															<sup class="required">*</sup>
														</label>
														<input id="comment_title" name="title" type="text" value=""/>
														<label for="content">
															Comment:
															<sup class="required">*</sup>
														</label>
														<textarea id="content" name="content"></textarea>
														<div id="new_comment_form_footer">
															<input id="id_product_comment_send" name="id_product" type="hidden" value='11' />
															<p class="fl required">
																<sup>*</sup> Required fields
															</p>
															<p class="fr">
																<button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-small btn-sm">
																	<span>Send</span>
																</button>&nbsp;
																or&nbsp;

																<a class="closefb" href="#">
																	Cancel
																</a>
															</p>
															<div class="clearfix"></div>
														</div>
														<!-- #new_comment_form_footer -->
													</div>
												</div>
											</form>
											<!-- /end new_comment_form_content -->
										</div>
									</div>
									<!-- End fancybox -->
									<!--end HOOK_PRODUCT_TAB -->
									<!-- description & features -->
								</div>
							</div>
							<section class="blockproductscategory products_block block nopadding nobackground text-center">
								<h3 class="page-heading">Related Products</h3>
								<div id="productscategory_list" class="clearfix block_content text-left">
									<div class=" carousel slide" id="blockproductscategory">
										<div class="carousel-inner">
											<div class="item active">
												<div class="row clearfix ">
													<div class="col-sm-3 col-xs-12 product_block ajax_block_product">
														<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
															<div class="left-block">
																<div class="product-image-container image">
																	<div class="leo-more-info" data-idproduct="8"></div>
																	<a class="product_img_link"	href="{{ url('product-1') }}" title="Donec tellus purus" itemprop="url">
																		<img class="replace-2x img-responsive" src="{{ theme('frontend/img/products/donec-tellus-purus27.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
																		<span class="product-additional" data-idproduct="8"></span>
																	</a>
																	<a class="quick-view btn-outline btn" href="{{ url('product-1') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/{{ url('product-1') }}" title="Quick view" ></a>
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
																		<a class="product-name" href="{{ url('product-1') }}" title="Donec tellus purus" itemprop="url" >
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
                                                                    <span class="nb-comments">
                                                                        <span itemprop="reviewCount">0</span> Review(s)
                                                                    </span>
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
                                                                        <link itemprop="availability" href="http://schema.org/InStock" />In stock
                                                                    </span>
																	</div>
																	<!--  -->
																	<div class="functional-buttons clearfix">
																		<a class="cart button ajax_add_to_cart_button btn btn-default" href="../orderc4c4.html?add=1&amp;id_product=8&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="8">
																			<i class="fa fa-shopping-cart"></i>
																			<span>Add to cart</span>
																		</a>
																		<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="{{ url('product-1') }}" data-id-product="8" title="Add to compare" >
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
													<div class="col-sm-3 col-xs-12 product_block ajax_block_product">
														<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
															<div class="left-block">
																<div class="product-image-container image">
																	<div class="leo-more-info" data-idproduct="9"></div>
																	<a class="product_img_link"	href="{{ url('product-2') }}" title="Fusce a congue" itemprop="url">
																		<img class="replace-2x img-responsive" src="{{ theme('frontend/img/products/donec-tellus-purus31.jpg') }}" alt="Fusce a congue" title="Fusce a congue" itemprop="image" />
																		<span class="product-additional" data-idproduct="9"></span>
																	</a>
																	<a class="quick-view btn-outline btn" href="{{ url('product-2') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/{{ url('product-2') }}" title="Quick view" ></a>
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
																		<a class="product-name" href="{{ url('product-2') }}" title="Fusce a congue" itemprop="url" >
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
                                                                    <span class="nb-comments">
                                                                        <span itemprop="reviewCount">0</span> Review(s)
                                                                    </span>
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
																	<div class="product-flags"></div>
																	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
                                                                    <span class="available-now">
                                                                        <link itemprop="availability" href="http://schema.org/InStock" />In stock
                                                                    </span>
																	</div>
																	<!--  -->
																	<div class="functional-buttons clearfix">
																		<a class="cart button ajax_add_to_cart_button btn btn-default" href="../ordere04f.html?add=1&amp;id_product=9&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="9">
																			<i class="fa fa-shopping-cart"></i>
																			<span>Add to cart</span>
																		</a>
																		<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="{{ url('product-2') }}" data-id-product="9" title="Add to compare" >
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
													<div class="col-sm-3 col-xs-12 product_block ajax_block_product">
														<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
															<div class="left-block">
																<div class="product-image-container image">
																	<div class="leo-more-info" data-idproduct="10"></div>
																	<a class="product_img_link"	href="{{ url('product-3') }}" title="Donec tellus purus" itemprop="url">
																		<img class="replace-2x img-responsive" src="{{ theme('frontend/img/products/donec-tellus-purus33.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
																		<span class="product-additional" data-idproduct="10"></span>
																	</a>
																	<a class="quick-view btn-outline btn" href="{{ url('product-3') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/{{ url('product-3') }}" title="Quick view" ></a>
                                                                <span class="new-box">
                                                                    <span class="new-label product-label">New</span>
                                                                </span>
																</div>
															</div>
															<div class="right-block">
																<div class="product-meta">
																	<h5 itemprop="name" class="name">
																		<a class="product-name" href="{{ url('product-3') }}" title="Donec tellus purus" itemprop="url" >
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
                                                                    <span class="nb-comments">
                                                                        <span itemprop="reviewCount">1</span> Review(s)
                                                                    </span>
																	</div>
																	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                                                    <span itemprop="price" class="price product-price">
							$323.00						</span>
																		<meta itemprop="priceCurrency" content="USD" />
																	</div>
																	<div class="product-flags"></div>
																	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
                                                                    <span class="available-now">
                                                                        <link itemprop="availability" href="http://schema.org/InStock" />In stock
                                                                    </span>
																	</div>
																	<!--  -->
																	<div class="functional-buttons clearfix">
																		<a class="cart button ajax_add_to_cart_button btn btn-default" href="../ordera5cc.html?add=1&amp;id_product=10&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="10">
																			<i class="fa fa-shopping-cart"></i>
																			<span>Add to cart</span>
																		</a>
																		<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="{{ url('product-3') }}" data-id-product="10" title="Add to compare" >
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
													<div class="col-sm-3 col-xs-12 product_block ajax_block_product">
														<div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
															<div class="left-block">
																<div class="product-image-container image">
																	<div class="leo-more-info" data-idproduct="12"></div>
																	<a class="product_img_link"	href="{{ url('product-5') }}" title="Morbi ullamcorper" itemprop="url">
																		<img class="replace-2x img-responsive" src="{{ theme('frontend/img/products/donec-tellus-purus35.jpg') }}" alt="Donec tellus purus" title="Donec tellus purus" itemprop="image" />
																		<span class="product-additional" data-idproduct="12"></span>
																	</a>
																	<a class="quick-view btn-outline btn" href="{{ url('product-5') }}" rel="http://demo4leotheme.com/prestashop/leo_wine_store/en/champagne/12-donec-tellus-purus.html" title="Quick view" ></a>
                                                                <span class="new-box">
                                                                    <span class="new-label product-label">New</span>
                                                                </span>
																</div>
															</div>
															<div class="right-block">
																<div class="product-meta">
																	<h5 itemprop="name" class="name">
																		<a class="product-name" href="{{ url('product-5') }}" title="Morbi ullamcorper" itemprop="url" >
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
                                                                    <span class="nb-comments">
                                                                        <span itemprop="reviewCount">0</span> Review(s)
                                                                    </span>
																	</div>
																	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                                                    <span itemprop="price" class="price product-price">
							$238.00						</span>
																		<meta itemprop="priceCurrency" content="USD" />
																	</div>
																	<div class="product-flags"></div>
																	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
                                                                    <span class="available-now">
                                                                        <link itemprop="availability" href="http://schema.org/InStock" />In stock
                                                                    </span>
																	</div>
																	<!--  -->
																	<div class="functional-buttons clearfix">
																		<a class="cart button ajax_add_to_cart_button btn btn-default" href="../order9543.html?add=1&amp;id_product=12&amp;token=66b14ad074dd0871d55f1279b13e5cbd" rel="nofollow" title="Add to cart" data-id-product="12">
																			<i class="fa fa-shopping-cart"></i>
																			<span>Add to cart</span>
																		</a>
																		<a class="compare add_to_compare compare btn btn-default btn-outline-inverse" href="{{ url('product-5') }}" data-id-product="12" title="Add to compare" >
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
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

						</div>
						<!-- itemscope product wrapper -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection