@extends('layouts.app')



@section('content')
<div class="flex flex-row   w-full justify-start ">
    <header>
        <nav>
            <div class="bg-stone-300 h-screen pt-2.5 pl-4 w-full">
                <div class="w-full">
                    <img class='rounded-full w-6/12 mr-auto ml-auto' src="{{ asset('images/logo.jpg') }} " alt='shop logo' />
                </div>
                <div class=" mt-8">
                   
                    <div class="flex  justify-start p-1 mr-2  hover:bg-fuchsia-600" >
                        @if (route('dashboard'))
                         <div class="w-7
                         ">
                            <img  class=" font-extrabold cursor-pointer	" src='{{ asset('images/dashboard.png') }}'  alt='dashboard-icon' />
                         </div>
                         <div class="w-1/2
                         ">
                            <a href="{{ route('dashboard') }}"><p class="ml-4 cursor-pointer" >Dashboard</p></a>
                         </div>

                        @endif
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <section class="  mt-2.5  w-4/5">
            <h1 class=" text-3xl">Dashboard</h1>
            <p>@php echo date('Y-m-d')@endphp</p> 
        </section>
    </main>
</div>


@endsection