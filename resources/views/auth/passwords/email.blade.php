@extends('layouts.app')

@section('title' , 'reset password page')
@section('content')
<header>
    <nav class="w-full flex  bg-nav-color">
       <div class="mt-1 mb-1 mr-auto ml-auto">
        <a class="cursor-pointer"
           href='{{ route('/dashboard') }}'>
            <img src='{{ asset('./images/logo.jpg') }}' 
                 alt='logo' 
                 class="w-20 rounded-full"
            />
        </a>
       </div>
       
    </nav>
</header>
<div class="container h-full w-full">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="bg-white w-1/2 ml-auto mr-auto mt-20 h-64 text-center">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="pt-8">
                            <label for="email" class="font-bold">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="w-80 h-8 pl-3 mt-3  rounded border border-nav-color @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >

                            </div>
                            <div class="mt-5 mb-3">
                                @error('email')
                                    <span class="text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div >
                                <button type="submit" class="bg-nav-color text-md rounded pl-2 pr-2 text-white">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                <div>
</div>
@endsection
