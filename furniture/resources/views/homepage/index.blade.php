@extends('layouts.template')
@section('content')

<section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                                <div class="text-bg">
                                    <h1>The latest <br> <strong class="black_bold">furniture Design</strong><br></h1>
                                    <a href="{{ URL::to('produk') }}">Shop Now <i class='fa fa-angle-right'></i></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="text-img">
                                    <figure><img src="{{ asset('front/images/bg.jpg') }}" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- discount -->
            @foreach($itemslide as $index => $slide )
                        @if($index == 0)
            <div class="container">
                <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>{{ $slide->caption_title }}<br> <strong class="black_nolmal">{{ $slide->caption_content }}</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="{{ \Storage::url($slide->foto) }}" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @else
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>{{ $slide->caption_title }}<br> <strong class="black_nolmal">{{ $slide->caption_content }}</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="{{ \Storage::url($slide->foto) }}" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <!-- end discount -->
           <!-- trending -->
 <div class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Trending <strong class="black">Categories</strong></h2>

                            </div>
                        </div>
                    </div>
<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3" ">
      <!-- product -->
      @foreach($itemkategori as $kategori)
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
          
          @if($kategori->foto != null)
            <div class="center"> <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" />
              @else
              <img src="{{ asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
              @endif
            </div>
          </div>
          <div class="product_detail text_align_center">
          <h3>{{ $kategori->nama_kategori }}</h3>
          </div>
        </div>
      </div>
      @endforeach

                    </div>
                </div>
            </div>
            <!-- end trending -->
@endsection