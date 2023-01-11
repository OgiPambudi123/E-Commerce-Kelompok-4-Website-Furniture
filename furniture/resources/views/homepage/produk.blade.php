@extends('layouts.template')
@section('content')
<div class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Etalase <strong class="black">Product</strong></h2>

                            </div>
                        </div>
                    </div>
<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3" ">
      <!-- product -->
      @foreach($itemproduk as $produk)
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
          
          @if($produk->foto != null)
            <div class="center"> <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}"/>
              @else
              <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
              @endif
              
              <div class="overlay_hover"> <a class="add-bt" href="{{ URL::to('produk/'.$produk->slug_produk) }}">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">Rp. {{ number_format($produk->harga, 2) }} </p>
            <p class="product_descr">{{ $produk->nama_produk }}</p>
          </div>
        </div>
      </div>
      @endforeach
      <div class="row">
        <div class="col">
          {{ $itemproduk->links() }}
        </div>
      </div>
      <!-- end product -->
    </div>
  </div>
</div>
@endsection