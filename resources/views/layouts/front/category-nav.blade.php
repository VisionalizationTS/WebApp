<div class="container">
    <nav class="my-nav navbar navbar-default ml-auto category">
        <button class="my-button"><i class="fa fa-list-ul"></i> {{trans('main.categorynav.Departments')}}</button>
        <div class="departments">
            <a href="#">{{trans('main.sidebarfront.Categories')}} 1</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 2</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 3</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 4</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 5</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 6</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 7</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 8</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 9</a>
            <a href="#">{{trans('main.sidebarfront.Categories')}} 10</a>
            {{-- @foreach ($categories as $category)
            <a href="{{route('front.category.slug', $category->slug)}}">{{$category->name}}</a>
            @endforeach --}}
            {{-- <ul class="list-unstyled list-inline nav navbar-nav">
                @foreach($categories as $category)
                <li>
                    @if (app()->getLocale() == 'ar')
                    @if($category->children()->count() > 0)
                    @include('layouts.front.category-sub', ['subs' => $category->children])
                    @else
                    <a @if(request()->segment(2) == $category->slug) class="active" @endif
                        href="{{route('front.category.slug', $category->slug)}}">{{$category->name_ar}} </a>
                    @endif
                    @else
                    @if($category->children()->count() > 0)
                    @include('layouts.front.category-sub', ['subs' => $category->children])
                    @else
                    <a @if(request()->segment(2) == $category->slug) class="active" @endif
                        href="{{route('front.category.slug', $category->slug)}}">{{$category->name}} </a>
                    @endif
                    @endif
                </li>
                @endforeach
            </ul> --}}
        </div>
        <div class="dropdown">
            <button class="button-s dropbtn">Super Deals <i class="fa fa-sort-down"></i></button>
            <div class="dropdown-content animated slideInUp">
                <div class="row">
                    <div class="container">
                        <div class="sub-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="title">Home & Static Pages</span>
                                    <ul class="nav-group">
                                        <li><a href="index.html" class="nav-link">Home v1</a></li>
                                        <li><a href="home-v2.html" class="nav-link">Home v2</a></li>
                                        <li><a href="home-v3.html" class="nav-link">Home v3</a></li>
                                        <li><a href="home-v3-full-color-bg.html" class="nav-link">Home
                                                v3.1</a></li>
                                        <li><a href="home-v4.html" class="nav-link">Home v4</a></li>
                                        <li><a href="home-v5.html" class="nav-link">Home v5</a></li>
                                        <li><a href="home-v6.html" class="nav-link">Home v6</a></li>
                                        <li><a href="home-v7.html" class="nav-link">Home v7</a></li>
                                        <li><a href="about.html" class="nav-link">About</a></li>
                                        <li><a href="contact-v1.html" class="nav-link">Contact v1</a></li>
                                        <li><a href="contact-v2.html" class="nav-link">Contact v2</a></li>
                                        <li><a href="faq.html" class="nav-link">FAQ</a></li>
                                        <li><a href="store-directory.html" class="nav-link">Store
                                                Directory</a></li>
                                        <li><a href="terms-and-conditions.html" class="nav-link">Terms and
                                                Conditions</a></li>
                                        <li><a href="404.html" class="nav-link">404</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="title">Shop Pages</span>
                                    <ul class="nav-group mb-3">
                                        <li><a href="../shop/shop-grid.html" class="nav-link">Shop Grid</a>
                                        </li>
                                        <li><a href="../shop/shop-grid-extended.html" class="nav-link">Shop
                                                Grid Extended</a></li>
                                        <li><a href="../shop/shop-list-view.html" class="nav-link">Shop List
                                                View</a></li>
                                        <li><a href="../shop/shop-list-view-small.html" class="nav-link">Shop
                                                List View Small</a></li>
                                        <li><a href="../shop/shop-left-sidebar.html" class="nav-link">Shop
                                                Left Sidebar</a></li>
                                        <li><a href="../shop/shop-full-width.html" class="nav-link">Shop Full
                                                width</a></li>
                                        <li><a href="../shop/shop-right-sidebar.html" class="nav-link">Shop
                                                Right Sidebar</a></li>
                                    </ul>
                                    <span class="title">Product Categories</span>
                                    <ul class="nav-group">
                                        <li><a href="../shop/product-categories-4-column-sidebar.html"
                                                class="nav-link">4 Column
                                                Sidebar</a></li>
                                        <li><a href="../shop/product-categories-5-column-sidebar.html"
                                                class="nav-link">5 Column
                                                Sidebar</a></li>
                                        <li><a href="../shop/product-categories-6-column-full-width.html"
                                                class="nav-link">6 Column Full
                                                width</a></li>
                                        <li><a href="../shop/product-categories-7-column-full-width.html"
                                                class="nav-link">7 Column Full
                                                width</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="title">Single Product Pages</span>
                                    <ul class="nav-group mb-3">
                                        <li><a href="../shop/single-product-extended.html" class="nav-link">Single
                                                Product Extended</a>
                                        </li>
                                        <li><a href="../shop/single-product-fullwidth.html" class="nav-link">Single
                                                Product Fullwidth</a>
                                        </li>
                                        <li><a href="../shop/single-product-sidebar.html" class="nav-link">Single
                                                Product Sidebar</a></li>
                                    </ul>
                                    <span class="title">Ecommerce Pages</span>
                                    <ul class="nav-group">
                                        <li><a href="../shop/shop.html" class="nav-link">Shop</a></li>
                                        <li><a href="../shop/cart.html" class="nav-link">Cart</a></li>
                                        <li><a href="../shop/checkout.html" class="nav-link">Checkout</a></li>
                                        <li><a href="../shop/my-account.html" class="nav-link">My Account</a>
                                        </li>
                                        <li><a href="../shop/track-your-order.html" class="nav-link">Track
                                                your Order</a></li>
                                        <li><a href="../shop/compare.html" class="nav-link">Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="nav-link" href="#">Featured Brands</a>
        <a class="nav-link" href="#">Trending Styles</a>
        <a class="nav-link" href="#">Gift Cards</a>
    </nav>
</div>