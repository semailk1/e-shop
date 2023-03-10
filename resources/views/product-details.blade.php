@extends('layouts.main')
@section('content')
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
                            {{ Breadcrumbs::render('show', $product) }}
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                    <div class="left-category-menu hidden-sm hidden-xs">
	                        <div class="left-product-cat">
	                            <div class="category-heading">
	                                <h2>categories</h2>
	                            </div>
	                            <div class="category-menu-list">
	                                <ul>
	                                    <!-- Single menu start -->
	                                    <li class="arrow-plus active">
	                                        <a href="#">Cameras & Photography</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Handbags</a>
	                                                <ul>
	                                                    <li><a href="#">Blouses And Shirts</a></li>
	                                                    <li><a href="#">Clutches</a></li>
	                                                    <li><a href="#">Cross Body</a></li>
	                                                    <li><a href="#">Satchels</a></li>
	                                                    <li><a href="#">Sholuder</a></li>
	                                                    <li><a href="#">Toter</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Tops</a>
	                                                <ul>
	                                                    <li><a href="#">Evening</a></li>
	                                                    <li><a href="#">Long Sleeved</a></li>
	                                                    <li><a href="#">Short Sleeved</a></li>
	                                                    <li><a href="#">Sleeveless</a></li>
	                                                    <li><a href="#">T-Shirts</a></li>
	                                                    <li><a href="#">Tanks And Camis</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Dresses</a>
	                                                <ul>
	                                                    <li><a href="#">Belts</a></li>
	                                                    <li><a href="#">Cocktail</a></li>
	                                                    <li><a href="#">Day</a></li>
	                                                    <li><a href="#">Evening</a></li>
	                                                    <li><a href="#">Sundresses</a></li>
	                                                    <li><a href="#">Sweater</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Accessories</a>
	                                                <ul>
	                                                    <li><a href="#">Bras</a></li>
	                                                    <li><a href="#">Hair Accessories</a></li>
	                                                    <li><a href="#">Hats And Gloves</a></li>
	                                                    <li><a href="#">Lifestyle</a></li>
	                                                    <li><a href="#">Scarves</a></li>
	                                                    <li><a href="#">Small Leathers</a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
										<!-- Single menu start -->
	                                    <li class="arrow-plus">
	                                        <a href="#">Tv & Audio</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">BAGS</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">CLOTHING</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">LINGERIE</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Shoes</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li class="arrow-plus">
	                                        <a href="#">SmartPhones & Tablets</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu cat-left-drop-menu-photo-contain">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Women</a>
	                                                <ul>
	                                                    <li><a href="#">Belts</a></li>
	                                                    <li><a href="#">Jewelry</a></li>
	                                                    <li><a href="#">Socks</a></li>
	                                                    <li><a href="#">Sunglasses</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">CLOTHING</a>
	                                                <ul>
	                                                    <li><a href="#">Boots</a></li>
	                                                    <li><a href="#">Brands We Love</a></li>
	                                                    <li><a href="#">Casuals</a></li>
	                                                    <li><a href="#">Gifts And Tech</a></li>
	                                                    <li><a href="#">Gifts And Tech</a></li>
	                                                    <li><a href="#">Slippers</a></li>
	                                                    <li><a href="#">Speakers</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left cat-left-drop-menu-photo">
	                                            	<a href="#"><img src="{{ asset('img/megamenu/vmega_blog1.jpg') }}" alt="Product"></a>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li>
	                                        <a href="#">Laptop & Computer</a>
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="#">Sony</a></li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="#">Mobile</a></li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="#">Sports</a></li>
	                                    <!-- Single menu end -->

	                                    <!-- MENU ACCORDION START -->
	                                    <li class=" rx-child">
	                                        <a href="#">Books</a>
	                                    </li>
	                                    <li class=" rx-parent">
	                                        <a class="rx-default">
	                                            More categories <span class="cat-thumb  fa fa-plus"></span>
	                                        </a>
	                                        <a class="rx-show">
	                                            close menu <span class="cat-thumb  fa fa-minus"></span>
	                                        </a>
	                                    </li>
	                                    <!-- MENU ACCORDION END -->
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
						<!-- END CATEGORY-MENU-LIST -->
						<!-- START SMALL-PRODUCT-AREA -->
						<div class="small-product-area carosel-navigation hidden-sm hidden-xs">
							<div class="row">
								<div class="col-md-12">
									<div class="area-title">
										<h3 class="title-group gfont-1">Bestseller</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="active-bestseller sidebar">
									<div class="col-xs-12">
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/1.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Various Versions</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/2.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/3.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Various Versions</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/4.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
									</div>
									<div class="col-xs-12">
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/5.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Various Versions</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/6.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/7.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Various Versions</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="{{ asset('img/product/small/8.jpg') }}" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
									</div>
								</div>
							</div>
						</div>
						<!-- END SMALL-PRODUCT-AREA -->
						<!-- START SIDEBAR-BANNER -->
	                    <div class="sidebar-banner hidden-sm hidden-xs">
	                    	<div class="active-sidebar-banner">
	                    		<div class="single-sidebar-banner">
	                    			<a href="#"><img src="{{ asset('img/banner/1.jpg') }}" alt="Product Banner"></a>
	                    		</div>
	                    		<div class="single-sidebar-banner">
	                    			<a href="#"><img src="{{ asset('img/banner/2.jpg') }}" alt="Product Banner"></a>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- END SIDEBAR-BANNER -->
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12">
						<!-- Start Toch-Prond-Area -->
						<div class="toch-prond-area">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-xs-12">
									<div class="clear"></div>
									<div class="tab-content">
										<!-- Product = display-1-1 -->
                                        @foreach($product->images as $key => $image)
										<div role="tabpanel" class="tab-pane fade in @if($key == 0) active @endif" id="display-{{$key + 1}}">
											<div class="row">
												<div class="col-xs-12">
													<div class="toch-photo">
														<a href="#"><img src="{{ asset($image) }}" style="width: 250px !important; height: 350px !important;" data-imagezoom="true" alt="#" /></a>
													</div>
												</div>
											</div>
										</div>
                                    @endforeach
										<!-- End Product = display-1-1 -->
									</div>
									<!-- Start Toch-prond-Menu -->
									<div class="toch-prond-menu">
										<ul role="tablist">
                                            @foreach($product->images as $key => $image)
											<li role="presentation" @if($key == 0) class="active" @endif><a href="#display-{{$key + 1}}" role="tab" data-toggle="tab"><img style="width: 100px !important; height: 100px !important;" src="{{ asset($image) }}" alt="#" /></a></li>
                                            @endforeach
                                        </ul>
									</div>
									<!-- End Toch-prond-Menu -->
								</div>
								<div class="col-md-7 col-sm-7 col-xs-12">
									<h2 class="title-product"> {{ $product->title }}</h2>
									<div class="about-toch-prond">
										<p>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
											<a href="#">1 reviews</a>
											/
											<a href="#">Write a review</a>
										</p>
										<hr />
										<p class="short-description">{{ $product->description }}</p>
										<hr />
										<span class="current-price">{{ $product->price }} Manat</span>
										<span class="item-stock">Availability: <span class="text-stock">In Stock</span></span>
									</div>

								</div>
							</div>
							<!-- Start Toch-Box -->
							<div class="toch-box">
								<div class="row">
									<div class="col-xs-12">
										<!-- Start Toch-Menu -->
										<div class="toch-menu">
											<ul role="tablist">
												<li role="presentation" class=" active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
												<li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (1)</a></li>
											</ul>
										</div>
										<!-- End Toch-Menu -->
										<div class="tab-content toch-description-review">
											<!-- Start display-description -->
											<div role="tabpanel" class="tab-pane fade in active" id="description">
												<div class="row">
													<div class="col-xs-12">
														<div class="toch-description">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
															Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
															Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
															Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
															Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
															Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
															</p>
														</div>
													</div>
												</div>
											</div>
											<!-- End display-description -->
											<!-- Start display-reviews -->
											<div role="tabpanel" class="tab-pane fade" id="reviews">
												<div class="row">
													<div class="col-xs-12">
														<div class="toch-reviews">
															<div class="toch-table">
																<table class="table table-striped table-bordered">
																	<tbody>
																		<tr>
																			<td><strong>plaza theme</strong></td>
																			<td class="text-right"><strong>16/02/2016</strong></td>
																		</tr>
																		<tr>
																			<td colspan="2">
																				<p>It is part of Australia's network of offshore processing centres for irregular migrants who arrive by boat, and also houses New Zealanders facing deportation from Australia.</p>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star-o"></i></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="toch-review-title">
																<h2>Write a review</h2>
															</div>
															<div class="review-message">
																<div class="col-xs-12">
																	<p><sup>*</sup>Your Name <br>
																		<input type="text" class="form-control" />
																	</p>
																	<p><sup>*</sup>Your Name <br>
																		<textarea class="form-control"></textarea>
																	</p>
																</div>
																<div class="help-block">
																	<span class="note">Note:</span>
																	 HTML is not translated!
																</div>
																<div class="get-rating">
																	<span><sup>*</sup>Rating </span>
																	Bad
																	<input type="radio" value="1" name="rating" />
																	<input type="radio" value="2" name="rating" />
																	<input type="radio" value="3" name="rating" />
																	<input type="radio" value="4" name="rating" />
																	<input type="radio" value="5" name="rating" />
																	Good
																</div>
																<div class="buttons clearfix">
																	<button class="btn btn-primary pull-right">Continue</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- End Product = display-reviews -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Toch-Box -->
							<!-- START PRODUCT-AREA -->
							<div class="product-area">
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<!-- Start Product-Menu -->
										<div class="product-menu">
											<div class="product-title">
												<h3 class="title-group-2 gfont-1">Related Products</h3>
											</div>
										</div>
									</div>
								</div>
								<!-- End Product-Menu -->
								<div class="clear"></div>
								<!-- Start Product -->
								<div class="product carosel-navigation">
									<div class="row">
										<div class="active-product-carosel">
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="{{ asset('img/product/mediam/3bg.jpg') }}" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Various Versions</a></h5>
														<div class="price-box">
															<span class="price">$80.00</span>
														</div>
													</div>
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="{{ asset('img/product/mediam/11.jpg') }}" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Trid Palm</a></h5>
														<div class="price-box">
															<span class="price">$79.00</span>
														</div>
													</div>
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="{{ asset('img/product/mediam/1.jpg') }}" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Established Fact</a></h5>
														<div class="price-box">
															<span class="price">$75.00</span>
														</div>
													</div>
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="{{ asset('img/product/mediam/2.jpg') }}" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Trid Palm</a></h5>
														<div class="price-box">
															<span class="price">$95.00</span>
														</div>
													</div>
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="{{ asset('img/product/mediam/13.jpg') }}" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Established Fact</a></h5>
														<div class="price-box">
															<span class="price">$82.00</span>
														</div>
													</div>
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="{{ asset('img/product/mediam/10.jpg') }}" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Trid Palm</a></h5>
														<div class="price-box">
															<span class="price">$99.00</span>
														</div>
													</div>
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="{{ asset('img/product/mediam/10bg.jpg') }}" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Various Versions</a></h5>
														<div class="price-box">
															<span class="price">$95.00</span>
														</div>
													</div>
												</div>
											</div>
											<!-- End Single-Product -->
										</div>
									</div>

								</div>
								<!-- End Product -->
							</div>
							<!-- END PRODUCT-AREA -->
						</div>
						<!-- End Toch-Prond-Area -->
					</div>
				</div>
			</div>
@endsection
