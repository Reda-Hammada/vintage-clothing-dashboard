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
                <button class="pt-2"
                        id='addProductBtn'>Add Product </button>
            </div>
        </section>

        <!--Add product Popup-->
        <section id='addproduct_btn' 
                class="absolute  w-full h-full bottom-0 opacity-75  left-0 bg-black ">
            <div class="bg-white rounded  w-[70%] opacity-100  h-fit  mr-auto ml-auto mt-12">
                <div class="w-full" >
                    <div class="pl-[95%] pt-2 cursor-pointer hover:text-main-color" id='closeProductForm' >X</div>
                </div>
                <form class="pt-6 pb-22" 
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                   <div class="flex w-full ml-7  justify-start">
                        <!--Product name -->
                        <div class="w-[60%] ">
                            <label class="block mb-2  font-bold">Product name :</label>
                            <input  class=" border w-[70%] h-[29px] pl-2  rounded border-main-color outline-main-color"
                                    type='text'
                                    name='productname'
                                    placeholder="Enter product name"
                            />
                        </div>
                        <!--Product price -->
                        <div class="  w-[35%] ">
                            <label class="block   mb-2 font-bold">Product Price :</label>

                            <input  class="w-full h-[29px] pl-2 border rounded border-main-color"
                                    type='numer'
                                name='price' />

                        </div>
                   </div>
                   <!-- Category -->
                   <div class="flex w-full justifty-start">
                        <div class="ml-7 w-[65%] mt-3 w-full">
                            <label class="block mt-2 mb-2 font-bold" >Category:</label>
                            <select class="w-[35%] h-[26px] border rounded border-main-color">
                                <option value="">
                                </option>
                                <option value='shoes'>
                                    shoes
                                </option>
                                <option>
        
                                </option>
                                <option>
        
                                </option>
                            </select>
        
        
                        </div>
                        <!-- Size -->
                        <div class="w-[40%] mt-3 ">
                            <label class="block mb-2  font-bold">Size :</label>
                            <input  class=" border w-[70%] h-[29px] pl-2  rounded border-main-color outline-main-color"
                                    type='text'
                                    name='size'
                                    placeholder="Enter product size"
                            />
                        </div>

                   </div>
                    <!--product description -->
                    <div class="ml-7 mt-4  w-full ">
                        <label class="block  mb-3 font-bold">Product description :</label>

                        <textarea class="resize-none border border-main-color rounded h-[150px] w-1/2" name='description '>

                        </textarea>
                    </div>
                    <!--Product images -->
                    <div>
                        <label class="block mb-2 ml-7 font-bold">Upload product images:</label>
                            <input  class=" border w-[30%]  ml-7 mb-18  rounded border-main-color outline-main-color"
                                    type='file'
                                    name='images[]'
                                    multiple
                                    placeholder="Enter product size"
                            />
                    </div>
                    <div class="w-full pb-8">
                        <div class="text-center ">
                            <input  class="bg-main-color cursor-pointer w-[120px] rounded h-[34px] text-white"
                                   type='submit'
                                   value="Add project"
                        </div>
                    <div>
                </form>
            </div>
        </section>
    </main>

</div>



@endsection
