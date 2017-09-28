@php $activePosts = $activeProducts = $activeImages = $activeSettings = $activeLanguages = $activeLoggedUser = ""; if(isset($activeMenu)) { if($activeMenu == "Posts") $activePosts = "active"; if($activeMenu == "Settings") $activeSettings = "active"; if($activeMenu == "Products") $activeProducts = "active"; if($activeMenu == "Images") $activeImages = "active"; if($activeMenu == "Languages") $activeLanguages = "active"; if($activeMenu == "Users") $activeLoggedUser = "active"; } @endphp
<nav class="navbar navbar-default navbar-static-top {{ session('currentLanguage') }}">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/home">
                <div class="logo-container">
                    <div class="logo">
                        <img src="/img/logo_light.png" alt="WebTree Admin" rel="tooltip" title="Custom CMS Built by WebTree for our Valued Customers" data-placement="bottom" data-html="true">
                    </div>
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar">
            <ul class="nav navbar-nav">
                <li class="dropdown <?= $activeSettings; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">settings_applications</i> @lang('labels.settings')
                            <b class="caret"></b>
                        </a>
                    <ul class="dropdown-menu dropdown-menu">
                        
                        <li class="dropdown-header">@lang('labels.site_menu')</li>
                        @php
                            $menus = explode(',', $currentUSER->site->menus);
                            //dd($menus);
                        @endphp
                        @if($menus)
                        @foreach($menus as $menu)
                            @php
                                $menu_icon = "more_vert";
                                if($menu == "Top" || $menu =="Main") $menu_icon = "more_horiz";
                            @endphp
                            <li><a href="/menus/{{ trim($menu) }}"><i class="material-icons">{{ $menu_icon }}</i> {{ trim($menu) }}</a></li>
                        @endforeach
                        @endif
                        <li class="divider"></li>
                        <li class="dropdown-header">@lang('labels.site_settings')</li>
                        <li><a href="/siteinfo"><i class="material-icons">turned_in</i> @lang('labels.site_info')</a></li>
                        <li><a href="/generalsettings"><i class="material-icons">turned_in_not</i> @lang('labels.general_settings')</a></li>
                        <li><a href="/socialsettings"><i class="material-icons">group</i> @lang('labels.social_settings')</a></li>
                        <li><a href="/analytics"><i class="material-icons">show_chart</i> @lang('labels.google_analytics')</a></li>
                        <li><a href="/sharingcode"><i class="material-icons">share</i> @lang('labels.sharing_code')</a></li>
                        <li><a href="/googlemap"><i class="material-icons">room</i> @lang('labels.google_map')</a></li>
                    </ul>
                </li>
                <li id="post-li" class="dropdown <?= $activePosts; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">description</i> @lang('labels.posts')
                            <b class="caret"></b>
                        </a>
                    <ul class="dropdown-menu dropdown-menu">
                        <li class="dropdown-header">Categories</li>
                        <li><a href="/categories"><i class="material-icons">view_list</i> &nbsp;@lang('labels.categories')</a></li>
                        <li><a href="/categorybanner"><i class="material-icons">art_track</i> &nbsp;@lang('labels.category_banner')</a></li>
                        <li><a href="/customfields"><i class="material-icons">playlist_add</i> &nbsp;@lang('labels.custom_fields')</a></li>
                        <li class="divider"></li>
                        <li><a href="/posts"><i class="material-icons">library_books</i> @lang('labels.manage_posts')</a></li>
                        <li><a href="/featuredposts"><i class="material-icons">star</i> @lang('labels.featured_posts')</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header"> @lang('labels.add_new_post')</li>
                        <li><a href="/posts/create"><i class="material-icons">note_add</i>Add New Post</a></li>
                        
                    </ul>
                </li>
                <li class="dropdown <?= $activeProducts; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">add_shopping_cart</i> @lang('labels.shop')
                            <b class="caret"></b>
                        </a>
                    <ul class="dropdown-menu dropdown-menu">
                        <li class="dropdown-header">Product Categories</li>
                        <li><a href="/productcategories"><i class="material-icons">view_list</i> &nbsp;@lang('labels.categories')</a></li>
                        <li><a href="/productcategorybanner"><i class="material-icons">art_track</i> &nbsp;@lang('labels.category_banner')</a></li>
                        <li class="divider"></li>
                        <li><a href="/products"><i class="material-icons">library_books</i> @lang('labels.manage_products')</a></li>
                        <li><a href="/featuredproducts"><i class="material-icons">star</i> @lang('labels.featured_products')</a></li>
                        <li class="divider"></li>
                        <li><a href="/products/create"><i class="material-icons">note_add</i> @lang('labels.add_new_product')</a></li>
                        <li class="divider"></li>
                        <li><a href="/currencyexchange"><i class="material-icons">attach_money</i> @lang('labels.currency')</a></li>
                        <li class="divider"></li>
                        <li><a href="/orders"><i class="material-icons">card_giftcard</i> @lang('labels.order')</a></li>
                        <li class="divider"></li>
                        <li><a href="/productsettings"><i class="material-icons">settings_applications</i> @lang('labels.productsettings')</a></li>
                    </ul>
                </li>
                <li class="dropdown <?= $activeImages; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">image</i> @lang('labels.images')
                            <b class="caret"></b>
                        </a>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a href="/galleries"><i class="material-icons">collections</i> @lang('labels.photo_gallery')</a></li>
                        <li><a href="/ads/0"><i class="material-icons">panorama</i> @lang('labels.ad_banner')</a></li>
                        <li><a href="#"><i class="material-icons">filter</i> @lang('labels.manage_images')</a></li>
                        <li><a href="#"><i class="material-icons">attachment</i> @lang('labels.manage_files')</a></li>
                    </ul>
                </li>
                
            </ul>
            @include('partials.toprightmenu')
        </div>
    </div>
</nav>
