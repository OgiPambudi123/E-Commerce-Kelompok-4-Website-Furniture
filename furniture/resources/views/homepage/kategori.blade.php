@extends('layouts.template')
@section('content')
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
      <!-- end product -->
    </div>
  </div>
</div>
            @endsection