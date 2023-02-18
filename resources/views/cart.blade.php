@extends('layouts.main')
@section('content')
    <!-- START PAGE-CONTENT -->
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="page-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="#">Shopping Cart</a></li>
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
                    <!-- START SMALL-PRODUCT-AREA -->
                    <div class="small-product-area carosel-navigation  hidden-sm hidden-xs">
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
                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="#">Trid Palm</a></h5>
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
                                                <img class="primary-img" src="img/product/small/2.jpg" alt="Product">
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
                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="#">Trid Palm</a></h5>
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
                                                <img class="primary-img" src="img/product/small/4.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="#">Established Fact</a></h5>
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
                                </div>
                                <div class="col-xs-12">
                                    <!-- Start Single-Product -->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="#">Trid Palm</a></h5>
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
                                                <img class="primary-img" src="img/product/small/6.jpg" alt="Product">
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
                                                <img class="primary-img" src="img/product/small/7.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="#">Trid Palm</a></h5>
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
                                                <img class="primary-img" src="img/product/small/8.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="#">Established Fact</a></h5>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SMALL-PRODUCT-AREA -->
                </div>
                <div class="col-md-9">
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
                    <!-- Start Shopping-Cart -->
                    <div class="shopping-cart">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-title">
                                    <h2 class="entry-title">Shopping Cart</h2>
                                </div>
                                <!-- Start Table -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Image</td>
                                            <td class="text-left">Product Name</td>
                                            <td class="text-left">Quantity</td>
                                            <td class="text-right">Unit Price</td>
                                            <td class="text-right">Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cart as $product)
                                            <tr>
                                                <td class="text-center">
                                                    <a href="#"><img class="img-thumbnail" width="60"
                                                                     src="{{ $product->images[0] }}"
                                                                     alt="#"/></a>
                                                </td>
                                                <td class="text-left">
                                                    <a href="#">More-Or-Less</a>
                                                </td>
                                                <td class="text-left">
                                                    <div class="btn-block cart-put d-flex">
                                                        <input min="0" data-price="{{ $product->price }}" class="form-control"
                                                               type="number" placeholder="1"/>
                                                        <div class="input-group-btn cart-buttons">
                                                            <button data-id="{{ $product->id }}" class="btn btn-danger cart-remove" data-toggle="tooltip"
                                                                    title="Remove">
                                                                <i class="fa fa-times-circle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right product-price">{{ $product->price }}</td>
                                                <td class="text-right total-price">{{ $product->price }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table -->
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-8">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right">
                                                    <strong>Total:</strong>
                                                </td>
                                                <td class="text-right total-final"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="shopping-checkout">
                                    <a href="#" class="btn btn-default pull-left">Continue Shopping</a>
                                    <a href="#" class="btn btn-primary pull-right">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Shopping-Cart -->
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.cart-remove').click(function () {
                    let id = $(this).data('id');
                    $.ajax({
                        url: "{{ route('cart.remove') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id
                        },
                        success: function () {
                            location.reload()
                        }
                    })
                })

                let total = 0;
                $('.total-price').each(function (i, v) {
                    total = total + parseInt(v.innerText);
                })
                $('.total-final').text(total);

                $('.form-control').on('change', function () {
                    $(this).parent().parent().parent().find('.total-price').text($(this).val() * $(this).data('price'));
                    let total = 0;
                    $('.total-price').each(function (i, v) {
                    total = total + parseInt(v.innerText);
                    })
                    $('.total-final').text(total);
                })

            });
        </script>
@endsection

