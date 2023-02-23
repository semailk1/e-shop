@extends('layouts.main')
@section('content')
    <style>
        .favorites {
            cursor: pointer;
        }
    </style>
    <!-- START PAGE-CONTENT -->
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="page-menu">
                        {{ Breadcrumbs::render('/') }}
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
                                    <li class="arrow-plus">
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
                                                <a href="#"><img src="img/megamenu/vmega_blog1.jpg" alt="Product"></a>
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
                    <!-- shop-filter start -->
                    <div class="shop-filter">
                        <div class="area-title">
                            <h3 class="title-group gfont-1">Filters Products</h3>
                        </div>
                        <h4 class="shop-price-title">Price</h4>
                        <div class="info_widget">
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <form action="{{ route('product.filter') }}" method="GET">
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                        <input type="submit" value="Filter"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-filter start -->
                    <!-- filter-by start -->
                    <div class="accordion_one">
                        <h4><a class="accordion-trigger" data-toggle="collapse" href="#divone">BRAND</a></h4>
                        <div id="divone" class="collapse in">
                            <div class="filter-menu">
                                <ul>
                                    @foreach($brands as $brand)
                                        <li><a href="{{ $brand->id }}">{{ $brand->name }} ({{$brand->products->count()}}
                                                )</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- filter-by end -->
                </div>
                <div class="col-md-9 col-xs-12">
                    <!-- START PRODUCT-BANNER -->
                    <div class="product-banner">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="banner">
                                    <a href="#"><img src="img/banner/12.jpg" alt="Product Banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT-BANNER -->
                    <!-- START PRODUCT-AREA -->
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-3 gfont-1">cameras & photography</h3>
                                    </div>
                                </div>
                                <div class="product-filter">
                                    <ul role="tablist">
                                        <li role="presentation" class="list">
                                            <a href="#display-1-1" role="tab" data-toggle="tab"></a>
                                        </li>
                                        <li role="presentation" class="grid active">
                                            <a href="#display-1-2" role="tab" data-toggle="tab"></a>
                                        </li>
                                    </ul>
                                    <div class="sort">
                                        <label>Sort By:</label>
                                        <select>
                                            <option value="#">Default</option>
                                            <option value="#">Name (A - Z)</option>
                                            <option value="#">Name (Z - A)</option>
                                            <option value="#">Price (Low > High)</option>
                                            <option value="#">Rating (Highest)</option>
                                            <option value="#">Rating (Lowest)</option>
                                            <option value="#">Name (A - Z)</option>
                                            <option value="#">Model (Z - A))</option>
                                            <option value="#">Model (A - Z)</option>
                                        </select>
                                    </div>
                                    <div class="limit">
                                        <label>Show:</label>
                                        <select>
                                            <option value="#">8</option>
                                            <option value="#">16</option>
                                            <option value="#">24</option>
                                            <option value="#">40</option>
                                            <option value="#">80</option>
                                            <option value="#">100</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- End Product-Menu -->
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product -->
                                <div class="product">
                                    <div class="tab-content">
                                        <!-- Product -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-1-1">
                                            <div class="row">
                                                <div class="listview">
                                                    <!-- Start Single-Product -->
                                                    <div class="single-product">
                                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                         src="img/product/mediam/10.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                         src="img/product/mediam/10bg.jpg"
                                                                         alt="Product">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 col-sm-8 col-xs-12">
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
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
                                                                <p class="description">Nunc facilisis sagittis
                                                                    ullamcorper. Proin lectus ipsum, gravida et mattis
                                                                    vulputate, tristique ut lectus. Sed et lorem nunc.
                                                                    Vestibulum ante ipsum primis in faucibus orci luctus
                                                                    et ultrices posuere cubilia Curae; Aenean eleifend
                                                                    laoreet congue. Viva..</p>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart
                                                                            </button>
                                                                        </div>
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                               title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                               title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                            <a href="#" class="modal-view"
                                                                               data-toggle="modal"
                                                                               data-target="#productModal"
                                                                               title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="single-product">
                                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                         src="img/product/mediam/3.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                         src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 col-sm-8 col-xs-12">
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
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
                                                                <p class="description">Nunc facilisis sagittis
                                                                    ullamcorper. Proin lectus ipsum, gravida et mattis
                                                                    vulputate, tristique ut lectus. Sed et lorem nunc.
                                                                    Vestibulum ante ipsum primis in faucibus orci luctus
                                                                    et ultrices posuere cubilia Curae; Aenean eleifend
                                                                    laoreet congue. Viva..</p>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart
                                                                            </button>
                                                                        </div>
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                               title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                               title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                            <a href="#" class="modal-view"
                                                                               data-toggle="modal"
                                                                               data-target="#productModal"
                                                                               title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->

                                                </div>
                                            </div>
                                            <!-- Start Pagination Area -->
                                            <div class="pagination-area">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <div class="pagination">
                                                            <ul>
                                                                <li class="active"><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">></a></li>
                                                                <li><a href="#">>|</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <div class="product-result">
                                                            <span>Showing 1 to 16 of 19 (2 Pages)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Pagination Area -->
                                        </div>
                                        <!-- End Product -->
                                        <!-- Start Product-->
                                        <div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
                                            <div class="row">

                                                <!-- Start Single-Product -->
                                                @foreach($products as $product)
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="single-product">
                                                            {{--                                                            <div class="sale-off">--}}
                                                            {{--                                                                <span class="sale-percent">-25%</span>--}}
                                                            {{--                                                            </div>--}}
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        style="height: 300px; width: 230px" src="{{ asset($product->images[0]) }}"
                                                                         alt="Product">
                                                                    <img class="secondary-img"
                                                                        style="height: 300px; width: 230px" src="{{ asset($product->images[1]) }}"
                                                                         alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">{{ $product->title }}</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">m {{ $product->price }}</span>
                                                                    <span
                                                                        class="old-price">m {{$product->discount}}</span>
                                                                </div>
                                                                <span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button class="add-cart"
                                                                                    data-id="{{ $product->id }}"><i
                                                                                    class="fa fa-shopping-cart"></i>
                                                                                Add
                                                                                to Cart
                                                                            </button>
                                                                        </div>
                                                                        <div class="product-button-2">
                                                                            <a class="favorites"
                                                                               data-id="{{ $product->id }}"
                                                                               data-toggle="tooltip"
                                                                               title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                               title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                            <a href="{{ route('product.show', $product->id) }}"
                                                                               {{--                                                                               class="modal-view"--}}
                                                                               {{--                                                                               data-toggle="modal"--}}
                                                                               {{--                                                                               data-target="#productModal"--}}
                                                                               title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            Quantity: {{ $product->quantity }}
                                                        </div>
                                                    </div>
                                            @endforeach
                                            <!-- End Single-Product -->
                                            </div>
                                            <!-- Start Pagination Area -->
                                            <div class="pagination-area">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <div class="pagination">
                                                            <ul>
                                                                {{ $products->links() }}

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <div class="product-result">
                                                            <span>Showing 1 to 16 of 19 (2 Pages)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Pagination Area -->
                                        </div>
                                        <!-- End Product = TV -->
                                    </div>
                                </div>
                                <!-- End Product -->
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT-AREA -->
                </div>
            </div>
        </div>
@endsection
