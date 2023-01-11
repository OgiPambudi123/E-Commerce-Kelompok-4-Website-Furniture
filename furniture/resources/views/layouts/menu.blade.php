        <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li> <a href="{{ URL::to('/') }}">Beranda</a></li>
                <li> <a href="{{ URL::to('produk') }}">Product</a></li>
                <li> <a href="{{ URL::to('kategori') }}">Category</a></li>
                <li> <a href="{{ URL::to('about') }}">About</a></li>
                <li> <a href="{{ URL::to('contact') }}">Contact us</a></li>
                <li> <a href="{{ URL::to('login') }}">Login</a></li>

            </ul>

        </nav>
      </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="{{ URL::to('/') }}"><img src="{{ asset('front/images/Logo.PNG') }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to('login') }}"><img style="margin-right: 15px;" src="{{ asset('front/icon/1.png') }}" alt="#" /></a>
                                        </li>
                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="{{ asset('front/icon/2.png') }}" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="{{ asset('front/icon/3.png') }}" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="{{ asset('front/images/menu_icon.png') }}" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>
            <!-- end header -->