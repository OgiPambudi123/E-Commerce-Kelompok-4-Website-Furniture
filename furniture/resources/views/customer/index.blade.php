@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Customer
          </h3>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Tlp</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Ogi</td>
                  <td>201210024@student.mercubuana-yogya.ac.id</td>
                  <td>085852527575</td>
                  <td>
                    Yogyakarta
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 1) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Alphi</td>
                  <td>201210043@student.mercubuana-yogya.ac.id</td>
                  <td>085852846383</td>
                  <td>
                    Kalimantan
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 2) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Pipin</td>
                  <td>201210065@student.mercubuana-yogya.ac.id</td>
                  <td>085864827294</td>
                  <td>
                    Sumatera
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 3) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Rey</td>
                  <td>201210054@student.mercubuana-yogya.ac.id</td>
                  <td>0856493738733</td>
                  <td>
                    Sumatera
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 4) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Anisa</td>
                  <td>201210067@student.mercubuana-yogya.ac.id</td>
                  <td>08585687383733</td>
                  <td>
                    Papua
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 5) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Indira</td>
                  <td>201210556@student.mercubuana-yogya.ac.id</td>
                  <td>08585575848373</td>
                  <td>
                    Madura
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 5) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Putri</td>
                  <td>201210076@student.mercubuana-yogya.ac.id</td>
                  <td>0858585738373</td>
                  <td>
                    Maluku
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 5) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Dewi</td>
                  <td>201210078@student.mercubuana-yogya.ac.id</td>
                  <td>08585659376383</td>
                  <td>
                    Bali
                  </td>
                  <td>
                    Aktif
                  </td>
                  <td>
                    <a href="{{ route('customer.edit', 5) }}" class="btn btn-sm btn-primary">Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection