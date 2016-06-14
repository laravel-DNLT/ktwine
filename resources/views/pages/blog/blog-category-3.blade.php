@extends('layouts.frontend')
@section('title', '')
@section('content')


	<div id="breadcrumb" class="clearfix">
		<div class="container">

			<!-- Breadcrumb -->
			<div class="breadcrumb clearfix">
				<a class="home" href="http://demo4leotheme.com/prestashop/leo_wine_store/" title="Return to Home">Home</a>
				<span class="navigation-pipe" >&gt;</span>
				<a href="{{ url('blog') }}">Blog</a>
				<span class="navigation-pipe">></span>
				<a href="{{ url('blog/blog-category-1') }}">Category 1</a>
				<span class="navigation-pipe">></span>Sub Category 2
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
											<a class="products-block-image img pull-left" href="../home/17-donec-tellus-purus.html" title="Donec tellus purus"><img class="replace-2x img-responsive" src="{{ theme('frontend/img/products/donec-tellus-purus40small.jpg') }}" alt="Ligula ullamcorper" />
											</a>

											<div class="media-body">
												<div class="product-content">
													<h5 class="name media-heading">
														<a class="product-name" href="../home/17-donec-tellus-purus.html" title="Ligula ullamcorper">
															Ligula ullamcorper</a>
													</h5>
													<div class="content_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                                                <span class="old-price product-price">
                                        $235.00
                                    </span>
                                                                <span itemprop="price" class="product-price">
                                    $223.25                                </span>
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
											<a class="products-block-image img pull-left" href="../home/17-donec-tellus-purus.html" title="Donec tellus purus"><img class="replace-2x img-responsive" src="{{ theme('frontend/img/products/donec-tellus-purus40small.jpg') }}" alt="Ligula ullamcorper" />
											</a>

											<div class="media-body">
												<div class="product-content">
													<h5 class="name media-heading">
														<a class="product-name" href="../home/17-donec-tellus-purus.html" title="Ligula ullamcorper">
															Ligula ullamcorper</a>
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
											<a class="products-block-image img pull-left" href="../home/16-donec-tellus-purus.html" title="Fusce vestibulum"><img class="replace-2x img-responsive" src="../39-small_default/donec-tellus-purus.jpg" alt="Donec tellus purus" />
											</a>

											<div class="media-body">
												<div class="product-content">
													<h5 class="name media-heading">
														<a class="product-name" href="../home/16-donec-tellus-purus.html" title="Donec tellus purus">
															Donec tellus purus</a>
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

						<div id="blog-category" class="blogs-container">


							<div class="panel panel-default">
								<div class="panel-body">
									<div class="row">
										<div class="category-image col-xs-12 col-sm-12 col-lg-4 text-center">
											<img src="../modules/leoblog/img/c/category-1.jpg" class="img-responsive" alt="" />
										</div>
										<div class="col-xs-12 col-sm-12 col-lg-8 category-info caption">
											<p>Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique auctor. At risus pretium urna tortor metus fringilla interdum mauris tempor congue</p>
										</div>
									</div>

								</div>
							</div>


							<div class="clearfix"></div>

							<div class="alert alert-warning">Sorry, We are updating data, please come back late!!!!</div>


						</div>

					</div>
				</div>


			</div>
		</div>
	</div>
@endsection