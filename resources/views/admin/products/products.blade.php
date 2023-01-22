@extends('layouts.app')


@section('title', 'vintage clothing dashboard')

@section('content')

<div class="flex flex-row   w-full justify-start ">
   {{-- sidebar component --}}
   <x-dashboard-sidebar   />
   <h1>Products page</h1>

</div>



@endsection
