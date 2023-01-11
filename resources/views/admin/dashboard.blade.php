@extends('layouts.app')


@section('title', 'vintage clothing dashboard')

@section('content')

<div class="flex flex-row   w-full justify-start ">
    <header>

       {{--    side navbar     --}}
        <nav class="text-sm	w-[20vw]	">
            <div class="bg-nav-color text-white h-screen pt-2.5 ">
                <div class="w-full border-b-2  pb-3">
                    <h1 class='text-center mr-3.5 p-1 text-2xl'>Vintage clothing</h1>
                </div>
                <div class=" mt-8">

                    <div class="flex  justify-start p-1 mr-2 focus:bg-hov-color  hover:bg-hov-color" >
                         <div class="w-7
                         ">
                            <img  class="text-gray-50 font-extrabold cursor-pointer	" src='{{ asset('images/dashboard.svg') }}'  alt='dashboard-icon' />
                         </div>
                         <div class="w-1/2
                         ">
                            <a href="{{ route('/dashboard') }}"><p class="ml-4 cursor-pointer" >Dashboard</p></a>
                         </div>
                    </div>
                    <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                        <div class="w-7
                         ">
                            <img src="{{asset('images/products.svg')}}" alt="products icon" />
                        </div>
                        <div class="w-1/2
                         ">
                            <a href="{{ route('/products') }}"><p class="ml-4 cursor-pointer" >Products</p></a>
                        </div>
                    </div>
                    <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                        <div class="w-7
                         ">
                            <img src="{{asset('images/categories.svg')}}" alt="categories icon" />
                        </div>
                        <div class="w-1/2
                         ">
                            <a href="{{ route('/setting') }}"><p class="ml-4 cursor-pointer" >Categories</p></a>
                        </div>
                    </div>
                    <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                        <div class="w-7
                         ">
                            <img src="{{asset('images/orders.svg')}}" alt="orders icon" />
                        </div>
                        <div class="w-1/2
                         ">
                            <a href="{{ route('/setting') }}">
                                <p class="ml-4 cursor-pointer" >Orders</p>
                            </a>
                        </div>
                    </div>
                    <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                        <div class="w-7
                         ">
                            <img src="{{asset('images/admins.svg')}}" alt="team admins icon" />
                        </div>
                        <div class="w-1/2
                         ">
                            <a href="{{ route('register') }}">
                                <p class="ml-4 cursor-pointer" >Team</p>
                            </a>
                        </div>
                    </div>
                    <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                        <div class="w-7
                         ">
                            <img src="{{asset('images/setting.svg')}}" alt="setting icon" />
                        </div>
                        <div class="w-1/2
                         ">
                            <a href="{{ route('/setting') }}"><p class="ml-4 cursor-pointer" >Settings</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{--    side navbar     --}}
    </header>
    <main class="w-full h-12	">

            <div  class=" bg-white">
                <nav class="ml-4 w-full pt-2 pb-5  flex justify-evenly">
                    <div class="w-4/5">
                            <input type="search"  placeholder="search for a product"/>
                    </div>
                    <div class="w-1/5">
                        <p>{{$User['name']}}</p>

                    </div>
                </nav>
            </div>
        <section class="mt-10 flex w-full justify-between">
            <div>
                <h1 class="text-2xl ml-2">Overview</h1>
            </div>
            <div class="mr-20 w-36 h-10 bg-main-color  rounded text-white text-center">
                <button class="pt-2 font-bold">Add Product </button>
            </div>
        </section>

        <!--Add product Popup-->
        <section class="absolute hidden w-full h-full bottom-0 opacity-50  left-0 bg-black ">
            <div class="bg-white rounded h-1/2 pt-12  opacity-100 w-1/2 mr-auto ml-auto mt-32">
                <form method="POST">
                    @csrf
                   <div class="flex w-[80%] ml-7 justify-between">
                     <!--Product name -->
                     <div>
                        <label class="block font-bold">Product name :</label>
                        <input type='text'
                                name='productname'
                                placeholder="Enter product name"
                        />
                     </div>
                     <!--Product price -->
                     <div>
                        <label class="block font-bold">Product Price :</label>

                        <input type='text'
                               name='number' />

                    </div>
                   </div>
                   <div class="">
                    <label class="block font-bold" >Category:</label>
                     <select>
                        <option value='shoes'>
                            shoes
                        </option>
                        <option>

                        </option>
                        <option>

                        </option>
                     </select>


                   </div>
                    <!--product description -->
                    <div>
                        <label class="block font-bold">Product description :</label>

                        <textarea class="resize-none" name='description '>

                        </textarea>
                    </div>
                </form>
            </div>
        </section>
    </main>

</div>



@endsection
