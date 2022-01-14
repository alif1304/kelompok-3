@extends('layouts.auth')

@section('title')
Log In | {{ config('settings.name') }}
@endsection

@section('content')

<div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center row-login">
                <div class="col-lg-6 text-center">
                    <img src="/images/nel.jpg"  alt="" class="w-500 mb-4 mb-lg-none rounded" />
                </div>
                <div class="col-lg-5">
                    <h2 class="font-weight-bold">
                        Belanja kebutuhan <br />
                        Seafood dari nelayan lokal<br />
                        lebih mudah 😊
                    </h2>
                    <form class="mt-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>E-mail Address</label>
                            <input id="email" type="email"
                                class="form-control w-75 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password"
                                class="form-control w-75 @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-block w-75 mt-4">
                            <i class="fas fa-sign-in-alt"></i> Log In to My Account
                        </button>
                        <a href="{{ route('register') }}" class="btn btn-signup btn-block w-75 mt-2">
                            <i class="far fa-registered"></i> Register
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection