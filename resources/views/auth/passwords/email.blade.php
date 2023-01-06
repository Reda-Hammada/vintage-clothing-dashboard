@extends('layouts.app')

@section('content')
<div class="container h-full w-full">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="bg-white w-1/2 ml-auto mr-auto mt-20 h-1/6 text-center">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mt-4">
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
                                <button type="submit" class="bg-nav-color rounded pl-2 pr-2 text-white">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                <div>
</div>
@endsection
