@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{$error}}</div>
                    @endforeach

                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message}}</p>
                        </div>
                    @endif

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <form method="POST" action="{{ route('register') }}">
                        
                    @csrf

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">No Tlp</label>
                            <input type="text" name="phone" id="phone" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-4">Register</button>
                            <p>Sudah punya akun? Login <a href="{{route('login') }}" class="text-decoration-none">disini</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection