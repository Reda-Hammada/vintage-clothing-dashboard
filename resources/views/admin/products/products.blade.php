@extends('layouts.app')


@section('title', 'vintage clothing dashboard')

@section('content')

<div class="flex flex-row   w-full justify-start ">
   {{-- sidebar component --}}
   <x-dashboard-sidebar   />
   <section class="mt-10 flex w-full justify-between">
      <div>
          <h1 class="text-3xl font-bold ml-2">Products :</h1>
      </div>
      <div class="mr-20 w-36 h-10 bg-main-color  rounded text-white text-center">
          <button class="pt-2"
                  id='addBtn'>Add Product </button>
      </div>
   </section>
   
</div>
<section class="w-full ">
      <div class="w-[60%] ml-auto mr-auto">
                <!--Add product Popup-->    
            <div id='parent_popup' class="absolute  hidden   w-full h-full bottom-0  opacity-75  left-0 bg-black "></div>
            <section class="hidden"
                    id='form' >
                <div 
                    class="bg-white rounded mt-[7%] absolute top-0  w-[75%]   h-fit  mr-auto ml-auto mt-12">
                    <div class="w-full " >
                        <div class="pl-[95%] pt-2 cursor-pointer hover:text-main-color" id='closeForm' >X</div>
                    </div>
                    <form class="pt-6 pb-22" 
                            method="POST"
                            action=" {{ route('createproduct') }}"
                            enctype="multipart/form-data">
                        @csrf
                        <div class="flex w-full ml-7  justify-start">
                            <!--Product name -->
                            <div class="w-[60%] ">
                                <label class="block mb-2  font-bold">Product name :</label>
                                <input  class=" border w-[70%] h-[29px] pl-2  rounded border-main-color outline-main-color"
                                        type='text'
                                        value='{{ old('productname') }}'
                                        name='productname'
                                        placeholder="Enter product name"
                                />
                                @error('productname')<div class="text-red-500">{{ $message }}</div>@enderror
                            </div>
                            <!--Product price -->
                            <div class="  w-[35%] ">
                                <label class="block   mb-2 font-bold">Product Price :</label>

                                <input  class="w-full h-[29px] pl-2 border rounded border-main-color"
                                        type='text'
                                        value="{{ old('price') }}"
                                        name='price' />

                                @error('price')<div class="text-red-500">{{ $message }}</div>@enderror

                            </div>
                        </div>
                        <!-- Category -->
                        <div class="flex w-full justifty-start">
                            <div class="ml-7 w-[65%] mt-3 w-full">
                                <label class="block mt-2 mb-2 font-bold" >Category:</label>
                                <select name='category'  class="w-[35%] h-[26px]  border rounded border-main-color">
                                    <option value="">
                                    </option>
                                    @foreach ($categories as $category )
                                        <option value="{{$category['category_name']}}">{{ $category['category_name'] }}</option>
                                    @endforeach
                                </select>
                                @error('category')<div class="text-red-500">{{ $message }}</div>@enderror

                            </div>
                            <!-- Size -->
                            <div class="w-[40%] mt-3 ">
                                <label class="block mb-2  font-bold">Size :</label>
                                <input  class=" border w-[70%] h-[29px] pl-2  rounded border-main-color outline-main-color"
                                        type='text'
                                        value="{{ old('size') }}"
                                        name='size'
                                        placeholder="Enter product size"
                                />
                                @error('size')<div class="text-red-500">{{ $message }}</div>@enderror

                            </div>

                        </div>
                        <!--product description -->
                        <div class="ml-7 mt-4  w-full ">
                            <label class="block  mb-3 font-bold">Product description :</label>

                            <textarea class="resize-none border border-main-color rounded h-[150px] w-1/2" 
                                        name="description"
                                        >
                                    {{ old('description') }}
                            </textarea>
                            @error('description')<div class="text-red-500">{{ $message }}</div>@enderror

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
                                @error('images')<div class="text-red-500">{{ $message }}</div>@enderror
                        </div>
                        <!-- add project button -->
                        <div class="w-full pb-8">
                            <div class="text-center ">
                                <button  class="bg-main-color cursor-pointer w-[120px] rounded h-[34px] text-white"
                                        type='submit'
                                        >
                                        Add project
                                    </button>
                            </div>
                        <div>
                    </form>
                </div>
            </section>
      </div>
</section>



@endsection
