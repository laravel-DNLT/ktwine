@extends('layouts.frontend')
@section('title', '')
@section('content')


	<div id="breadcrumb" class="clearfix">
		<div class="container">

			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
				<span class="navigation-pipe" >&gt;</span>
				<a href="{{ url('blog') }}">Blog</a>
				<span class="navigation-pipe">></span>
				<a href="{{ url('blog/blog-category-2') }}">Sub Category 1</a>
				<span class="navigation-pipe">></span>Nullam ullamcorper nisl quis ornare molestie
			</div>
			<!-- /Breadcrumb -->
		</div>
	</div>
	<!-- Content -->
	<div id="columns" class="columns-container">
		<div class="container">
			<div class="row">
				<div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12">

				</div>
			</div>
			<div class="row">


				<!-- Left -->
				<div id="left_column" class="column sidebar col-md-3" role="navigation">
					<!-- Block categories module -->
					<div id="categories_block_left" class="block nopadding">
						<h4 class="title_block">
							Categories
						</h4>
						<div class="block_content">
							<ul class="list-block bullet tree dhtml">

								<li >
									<a href="../champagne.html" title="Champagne">
										Champagne
										<span id="leo-cat-13" style="display:none" class="leo-qty badge"></span>
									</a>
								</li>


								<li >
									<a href="../kosher.html" title="Kosher">
										Kosher
										<span id="leo-cat-14" style="display:none" class="leo-qty badge"></span>
									</a>
								</li>


								<li >
									<a href="../15-organic.html" title="Organic">
										Organic
										<span id="leo-cat-15" style="display:none" class="leo-qty badge"></span>
									</a>
								</li>


								<li >
									<a href="../rose.html" title="Rose">
										Rose
										<span id="leo-cat-16" style="display:none" class="leo-qty badge"></span>
									</a>
									<ul>

										<li >
											<a href="../22-boxwine-.html" title="Boxwine ">
												Boxwine
												<span id="leo-cat-22" style="display:none" class="leo-qty badge"></span>
											</a>
										</li>


										<li >
											<a href="../23-broadbent.html" title="Broadbent">
												Broadbent
												<span id="leo-cat-23" style="display:none" class="leo-qty badge"></span>
											</a>
										</li>


										<li >
											<a href="../24-finca-las-nubes.html" title="Finca Las Nubes">
												Finca Las Nubes
												<span id="leo-cat-24" style="display:none" class="leo-qty badge"></span>
											</a>
										</li>


										<li class="last">
											<a href="../25-ichanka.html" title="Ichanka">
												Ichanka
												<span id="leo-cat-25" style="display:none" class="leo-qty badge"></span>
											</a>
										</li>

									</ul>
								</li>


								<li >
									<a href="../17-sparkling.html" title="Sparkling">
										Sparkling
										<span id="leo-cat-17" style="display:none" class="leo-qty badge"></span>
									</a>
								</li>


								<li class="last">
									<a href="../18-blush.html" title="Blush">
										Blush
										<span id="leo-cat-18" style="display:none" class="leo-qty badge"></span>
									</a>
									<ul>

										<li >
											<a href="../19-anoro.html" title="Anoro">
												Anoro
												<span id="leo-cat-19" style="display:none" class="leo-qty badge"></span>
											</a>
										</li>


										<li class="last">
											<a href="../21-altivo.html" title="Altivo">
												Altivo
												<span id="leo-cat-21" style="display:none" class="leo-qty badge"></span>
											</a>
										</li>

									</ul>
								</li>

							</ul>
						</div>
					</div>
					<!-- /Block categories module -->
					<!-- Block CMS module -->
					<section id="informations_block_left_1" class="block informations_block_left nopadding">
						<h4 class="title_block">
							<a href="../category/1-home.html">
								Information				</a>
						</h4>
						<div class="block_content list-block">
							<ul class="bullet">
								<li>
									<a href="../delivery.html" title="Delivery">
										Delivery
									</a>
								</li>
								<li>
									<a href="../legal-notice.html" title="Legal Notice">
										Legal Notice
									</a>
								</li>
								<li>
									<a href="../terms-and-conditions-of-use.html" title="Terms and conditions of use">
										Terms and conditions of use
									</a>
								</li>
								<li>
									<a href="../about-us.html" title="About us">
										About us
									</a>
								</li>
								<li>
									<a href="../secure-payment.html" title="Secure payment">
										Secure payment
									</a>
								</li>
								<li>
									<a href="../stores.html" title="Our stores">
										Our stores
									</a>
								</li>
							</ul>
						</div>
					</section>
					<!-- /Block CMS module -->
					<!-- Block manufacturers module -->
					<div id="manufacturers_block_left" class="block blockmanufacturer nopadding">
						<h4 class="title_block">
							<a href="../manufacturers.html" title="Manufacturers">
								Manufacturers
							</a>
						</h4>
						<div class="block_content">
							<ul class="list-block bullet">
								<li class="first_item">
									<a
											href="../3_tellus-purus.html" title="More about  tellus purus">
										tellus purus
									</a>
								</li>
								<li class="item">
									<a
											href="../2_dg.html" title="More about d&amp;g">
										d&amp;g
									</a>
								</li>
								<li class="item">
									<a
											href="../1_fashion-manufacturer.html" title="More about Fashion Manufacturer">
										Fashion Manufacturer
									</a>
								</li>
								<li class="item">
									<a
											href="../4_praesent-cursus.html" title="More about Praesent cursus">
										Praesent cursus
									</a>
								</li>
								<li class="last_item">
									<a
											href="../5_praesent-cursus.html" title="More about Praesent cursus">
										Praesent cursus
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Block manufacturers module -->
					<!-- MODULE Block specials -->
					<div id="special_block_right" class="block nopadding">
						<h4 class="title_block">
							<a href="../prices-drop.html" title="Specials">
								Specials
							</a>
						</h4>
						<div class="block_content products-block">

							<ul class="products products-block">
								<li class="clearfix media">

									<div class="product-block">

										<div class="product-container media" itemscope itemtype="http://schema.org/Product">
											<a class="products-block-image img pull-left" href="../home/9-donec-tellus-purus.html" title="Donec tellus purus"><img class="replace-2x img-responsive" src="{{ theme('frontend/img/products/donec-tellus-purus31small.jpg') }}" alt="Fusce a congue" />
											</a>

											<div class="media-body">
												<div class="product-content">
													<h5 class="name media-heading">
														<a class="product-name" href="../home/9-donec-tellus-purus.html" title="Fusce a congue">
															Fusce a congue</a>
													</h5>
													<div class="content_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                                                <span class="old-price product-price">
                                        $193.00
                                    </span>
                                                                <span itemprop="price" class="product-price">
                                    $167.91                                </span>
														<meta itemprop="priceCurrency" content="1" />
													</div>


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


												</div>
											</div>
										</div>


									</div>
								</li>
							</ul>
							<div class="lnk">
								<a
										class="btn btn-default button button-small btn-sm"
										href="../prices-drop.html"
										title="All specials">
									<span>All specials</span>
								</a>
							</div>
						</div>
					</div>
					<!-- /MODULE Block specials --><!-- Block stores module -->
					<div id="stores_block_left" class="block">
						<h4 class="title_block">
							<a href="../stores.html" title="Our stores">
								Our stores
							</a>
						</h4>
						<div class="block_content blockstore">
							<p class="store_image">
								<a href="../stores.html" title="Our stores">
									<img class="img-responsive" src="{{ theme('frontend/img/modules/blockstore/store.jpg') }}" alt="Our stores" />
								</a>
							</p>
							<div>
								<a
										class="btn btn-default button button-small btn-sm"
										href="../stores.html"
										title="Our stores">
									<span>Discover our stores</span>
								</a>
							</div>
						</div>
					</div>
					<!-- /Block stores module -->
					<!-- Block suppliers module -->
					<div id="suppliers_block_left" class="block blocksupplier nopadding">
						<h4 class="title_block">
							<a href="../supplier.html" title="Suppliers">
								Suppliers
							</a>
						</h4>
						<div class="block_content">
							<ul class="list-block bullet">
								<li class="first_item">
									<a
											href="../4__tristique-at-nulla.html"
											title="More about  tristique at nulla ">
										tristique at nulla
									</a>
								</li>
								<li class="item">
									<a
											href="../2__donec-tellus-purus.html"
											title="More about Donec tellus purus">
										Donec tellus purus
									</a>
								</li>
								<li class="item">
									<a
											href="../1__fashion-supplier.html"
											title="More about Fashion Supplier">
										Fashion Supplier
									</a>
								</li>
								<li class="last_item">
									<a
											href="../3__praesent-cursus.html"
											title="More about Praesent cursus">
										Praesent cursus
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Block suppliers module -->

					<!-- Block Viewed products -->
					<div id="viewed-products_block_left" class="block block-info nopadding">
						<h4 class="title_block">Viewed products</h4>
						<div class="block_content">
							<ul class="products products-block">
								<li class="clearfix media">

									<div class="product-block">

										<div class="product-container media" itemscope itemtype="http://schema.org/Product">
											<a class="products-block-image img pull-left" href="../home/15-donec-tellus-purus.html" title="Fusce vestibulum"><img class="replace-2x img-responsive" src="../38-small_default/donec-tellus-purus.jpg" alt="Fusce vestibulum" />
											</a>

											<div class="media-body">
												<div class="product-content">
													<h5 class="name media-heading">
														<a class="product-name" href="../home/15-donec-tellus-purus.html" title="Fusce vestibulum">
															Fusce vestibulum</a>
													</h5>


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


												</div>
											</div>
										</div>


									</div>
								</li>
								<li class="clearfix media">

									<div class="product-block">

										<div class="product-container media" itemscope itemtype="http://schema.org/Product">
											<a class="products-block-image img pull-left" href="../home/14-donec-tellus-purus.html" title="Lorem ipsum dolor"><img class="replace-2x img-responsive" src="../37-small_default/donec-tellus-purus.jpg" alt="Fusce vestibulum" />
											</a>

											<div class="media-body">
												<div class="product-content">
													<h5 class="name media-heading">
														<a class="product-name" href="../home/14-donec-tellus-purus.html" title="Fusce vestibulum">
															Fusce vestibulum</a>
													</h5>


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


												</div>
											</div>
										</div>


									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- Block categories module -->
					<div id="categories_blog_menu" class="block blog-menu nopadding">
						<h4 class="title_block">Blog Categories</h4>
						<div class="block_content">
							<ul class="level1 tree dhtml ">
								<li id="list_3" class=" ">
									<a href="{{ url('blog/blog-category-1') }}" title="Category 1"><span>Category 1</span></a>
									<ul class="level2 ">
										<li id="list_4" class=" ">
											<a href="{{ url('blog/blog-category-2') }}" title="Sub Category 1"><span>Sub Category 1</span></a>
										</li>
										<li id="list_5" class=" ">
											<a href="{{ url('blog/blog-category-3') }}" title="Sub Category 2"><span>Sub Category 2</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Block categories module -->

				</div>
				<!-- Center -->
				<div id="center_column" class="col-md-9">
					<div class="inner block clearfix">


						<div id="blogpage" class="blog-detail blog-container">

							<h1 class="blog-title">Nullam ullamcorper nisl quis ornare molestie</h1>
							<div class="blog-meta">
								<span class="blog-author">
					<span class="icon-user"> Posted By: </span>
					<a href="../blogcd64.html?author=1" title="Demo Demo">Demo Demo</a>
				</span>
				
								<span class="blog-cat"> 
					<span class="icon-list"> In: </span> 
					<a href="sub-category-1-c4.html" title="Sub Category 1">Sub Category 1</a>
				</span>
				
								<span class="blog-created">
					<span class="icon-calendar"> On: </span> 
					Wednesday, December 18, 2013
				</span>
								
								<span class="blog-ctncomment">
					<span class="icon-comment"> Comment:</span> 
					0
				</span>
												<span class="blog-hit">
					<span class="icon-heart"> Hit:</span>
					822
				</span>
							</div>

							<div class="blog-image">
								<img src="{{ theme('frontend/img/leoblog/b/lg-b-blog-7.jpg') }}" title="Nullam ullamcorper nisl quis ornare molestie"/>
							</div>



							<div class="blog-description">
								<p>Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo. Ut bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie</p>
							</div>

							<div class="blog-content">
								<div class="description clearfix">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quas.</p>
								</div>
								<div class="blog-content clearfix">
									<div class="content-wrap clearfix">
										<p>Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum ligula lorem non nisl. Ut vitae nibh id massa vulputate euismod ut quis justo. Ut bibendum sem at massa lacinia, eget elementum ante consectetur. Nulla id pharetra dui, at rhoncus urna. Maecenas non porttitor purus. Nullam ullamcorper nisl quis ornare molestie.</p>
										<p>Etiam eget erat est. Phasellus elit justo, mattis non lorem non, aliquam aliquam leo. Sed fermentum consectetur magna, eget semper ante. Aliquam scelerisque justo velit. Fusce cursus blandit dolor, in sodales urna vulputate lobortis. Nulla ut tellus turpis. Nullam lacus sem, volutpat id odio sed, cursus tristique eros. Duis at pellentesque magna. Donec magna nisi, vulputate ac nulla eu, ultricies tincidunt tellus. Nunc tincidunt sem urna, nec venenatis libero vehicula ut.</p>
										<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur faucibus aliquam pulvinar. Vivamus mattis volutpat erat, et congue nisi semper quis. Cras vehicula dignissim libero in elementum. Mauris sit amet dolor justo. Morbi consequat velit vel est fermentum euismod. Curabitur in magna augue.</p>
									</div>
								</div>
							</div>

							<div class="social-share">
								<div class="blog-social clearfix">
									<div class="social-wrap">
										<div class="social-heading"> <b>Like This</b> </div>
										<!-- Twitter Button -->
										<div class="itemTwitterButton">
											<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" >
												Twitter
											</a>
											<script type="text/javascript" src="../../../platform.twitter.com/widgets.js"></script>
										</div>


										<!-- Facebook Button -->
										<div class="itemFacebookButton">
											<div id="fb-root"></div>
											<script type="text/javascript">
												(function(d, s, id) {
													var js, fjs = d.getElementsByTagName(s)[0];
													if (d.getElementById(id)) return;
													js = d.createElement(s); js.id = id;
													js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
													fjs.parentNode.insertBefore(js, fjs);
												}(document, 'script', 'facebook-jssdk'));
											</script>
											<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
										</div>


										<!-- Google +1 Button -->
										<div class="itemGooglePlusOneButton">
											<:plusone annotation="inline" width="120"></:plusone>
											<script type="text/javascript">
												(function() {
													window.___gcfg = { lang: 'en' }; // Define button default language here
													var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
													po.src = '../../../apis.google.com/js/plusone.js';
													var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
												})();
											</script>
										</div>
									</div>
								</div>





							</div>
							<div class="blog-tags">
								<span>Tags:</span>

								<a href="../blog4a11.html?tag=opencart" title="opencart"><span>opencart</span></a>
								<a href="../blogb063.html?tag=theme" title="theme"><span>theme</span></a>

							</div>

							<div class="extra-blogs row">
								<div class="col-lg-6">
									<h4>In Same Category</h4>
									<ul>
										<li><a href="urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a></li>
										<li><a href="morbi-condimentum-molestie-nam-enim-odio-sodales-b7.html">Morbi condimentum molestie Nam enim odio sodales</a></li>
										<li><a href="turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a></li>
										<li><a href="urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b5.html">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a></li>
										<li><a href="ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html">Ipsum cursus vestibulum at interdum Vivamus</a></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<h4>Related by Tags</h4>
									<ul>
										<li><a href="urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a></li>
										<li><a href="morbi-condimentum-molestie-nam-enim-odio-sodales-b7.html">Morbi condimentum molestie Nam enim odio sodales</a></li>
										<li><a href="turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a></li>
										<li><a href="nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html">Nullam ullamcorper nisl quis ornare molestie</a></li>
										<li><a href="ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html">Ipsum cursus vestibulum at interdum Vivamus</a></li>
									</ul>
								</div>
							</div>

							<div class="blog-comment-block">
								<div id="blog-localengine">
									<h3>Comments</h3>

									<div class="comments">
									</div>

									<h3>Leave your comment</h3>
									<form class="form-horizontal" method="post" id="comment-form" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html" onsubmit="return false;">
										<div class="form-group">
											<label class="col-lg-3 control-label" for="inputFullName">Full Name</label>
											<div class="col-lg-9">
												<input type="text" name="user" placeholder="Enter your full name" id="inputFullName" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label" for="inputEmail">Email</label>
											<div class="col-lg-9">
												<input type="text" name="email"  placeholder="Enter your email" id="inputEmail" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label" for="inputComment">Comment</label>
											<div class="col-lg-9">
												<textarea type="text" name="comment" rows="6"  placeholder="Enter your comment" id="inputComment" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-3 control-label" for="inputEmail">Captcha</label>
											<div class="col-lg-8 col-md-8 ipts-captcha">
												<img src="{{ theme('frontend/img/captcha/captcha-4.jpg') }}" class="comment-capcha-image" align="left"/>
												<input class="form-control" type="text" name="captcha" value="" size="10"  />
											</div>
										</div>
										<input type="hidden" name="id_leoblog_blog" value="9">
										<div class="form-group">
											<div class="col-lg-9 col-lg-offset-3"><button class="btn btn-default" name="submitcomment" type="submit">Submit</button></div>
										</div>
									</form>
								</div>
							</div>


						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
@endsection