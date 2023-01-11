@extends('layouts.template')
@section('content')
<div class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
        <h3>About us</h3>
        <p>Sebagai toko dengan konsep "one stop shopping" untuk semua produk furnishings, PIPA.ORA Furnishing menyediakan berbagai koleksi berkualitas untuk hunian, kantor, aksesoris, sampai ruang komersial. PIPA.ORA Furnishing menyediakan beragam gaya dan desain terbaru untuk memenuhi kebutuhan pelanggan terhadap furnitur idaman.

Mengutamakan kebutuhan dan selera customer, INFORMA Furnishing mengembangkan konsep terbaru "desain inovatif dan tahan lama dengan harga terjangkau".</p>
        <a href="#">Read More</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
        <figure><img src="{{ asset('front/images/about.png') }}"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection