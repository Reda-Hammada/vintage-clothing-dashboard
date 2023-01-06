@extends('layouts.app')

@section('content')
    {{-- login form --}}
     <section class="flex mt-20  ml-auto mr-auto w-3/4  text-center ">
         <div class="bg-white w-6/12  h-64 rounded-tl-md rounded-bl-md">
            <div class="mt-5 pt-5"> 
                <form method="POST">
                    @csrf
                    <div>
                        <input type='email'
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="Enter your email"
                               class="w-80 h-8 pl-3 mt-3 rounded border border-nav-color" />           
                    </div>
                    @error('email')<span class="text-red-600">{{ $message }}</span>@enderror

                    <div>
                        <input type='password' 
                               name="password"
                               placeholder="Enter your password"
                               class="w-80 h-8 pl-3 mt-3  rounded border border-nav-color"/>
                    </div>
                    @error('password')<span class="text-red-600">{{ $message }}</span>@enderror
                    <div class="mt-2">
                        <input type='checkbox'
                               name="remember"
                               />
                        <span>Remember me</span>
                            
                    </div>
                    <div class=" mt-2">
                        <input class="h-8 w-20 bg-nav-color cursor-pointer rounded text-white" type='submit' 
                               value="Log in" />
                    </div>
                    <div class="mt-3">
                        <a class="text-blue-600" 
                           href='{{ url('password/reset') }}'>
                           Reset password
                        </a>
                    </div>
                   
                </form>
            </div>
         </div>
        <div class="bg-nav-color rounded-tr-md rounded-br-md w-2/5  h-64">
            <h2 class='mt-6 text-white font-bold'>Vintage Clothing Dashboard</h2>
            <p class="mt-2 text-white font-bold">Welcome back admin</p>
            <img  class='rounded-full mr-auto mt-3 w-1/3 mb-4 ml-auto 'src='{{ asset('./images/logo.jpg') }}' />
        </div>
     </section>
    

@endsection
