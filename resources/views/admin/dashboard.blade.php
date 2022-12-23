@extends('layouts.app')



@section('content')
<div class="d-flex w-100  flex-row">
    <header>
        <nav>
        <div class="bg-slate-200 h-screen pt-2.5 pl-4   w-64">
            <div class="w-full">
                <img class='  rounded-full w-6/12 mr-auto ml-auto' src="{{ asset('images/logo.jpg') }} " alt='shop logo' />
            </div>
        </div>
        </nav>

    </header>
    <main>
        <section class="flex-initial basis-9/12 mt-2.5 ml-8 d-flex flex-row 	">
            <h1 class=" text-3xl	">Dashboard</h1>
            <p>@php echo date('Y-m-d')@endphp</p> 
        </section>
    </main>
</div>

@endsection