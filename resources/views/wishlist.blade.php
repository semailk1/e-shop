@extends('layouts.main')
@section('content')
    <!-- START PAGE-CONTENT -->
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="page-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="#">Wish List</a></li>
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
                    <div class="Wishlist-area">
                        <h2>My Wish List</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td class="text-center">Image</td>
                                    <td class="text-left">Product Name</td>
                                    <td class="text-left">Category</td>
                                    <td class="text-left">Brand</td>
                                    <td class="text-right">Article</td>
                                    <td class="text-right">Price</td>
                                    <td class="text-right">Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @if($favorites->isEmpty())
                                    <tr>
                                        <td class="text-center" colspan="7">
                                            Нету избранных
                                        </td>
                                    </tr>
                                @else
                                    @foreach($favorites as $favorite)
                                    <tr>
                                        <td class="text-center">
                                            <a href="#"><img src="{{ asset($favorite->images[0]) }}" width="24" alt="#"/></a>
                                        </td>
                                        <td class="text-left">
                                            <a href="#">{{ $favorite->title }}</a>
                                        </td>
                                        <td class="text-left">{{ $favorite->category->name }}</td>
                                        <td class="text-right">{{ $favorite->brand->name }}</td>
                                        <td class="text-right">{{ $favorite->article }}</td>
                                        <td class="text-right">
                                            <div class="price-box">
                                                <span class="price">m {{ $favorite->price }}</span>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-primary add-cart" data-id="{{ $favorite->id }}" data-toggle="tooltip" title="Add to Cart"
                                                    type="button">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <a data-id="{{ $favorite->id }}" class="btn btn-danger favorite-remove" data-toggle="tooltip" title="Remove">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="buttons clearfix pull-right">
                            <a href="#" class="btn btn-primary">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
