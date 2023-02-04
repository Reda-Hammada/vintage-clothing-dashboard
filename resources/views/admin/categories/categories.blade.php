@extends('layouts.app')


@section('title', 'Categories')


@section('content')

<div class="flex flex-row   w-full justify-start ">
    {{-- sidebar component --}}
    <x-dashboard-sidebar   />
    <div class="flex flex-col	w-full">
        <section class="mt-10 flex w-full justify-between">
            <div>
                <h1 class="text-3xl font-bold ml-2">Categories :</h1>
            </div>
            <div class="mr-20 w-36 h-10 bg-main-color  rounded text-white text-center">
                <button class="pt-2"
                        id='addBtn'>Add Category </button>
            </div>
        </section>
        {{-- success message after adding a category --}}
        @if(session('success'))
        <section id='successMessage' class="w-[100%] mt-6 mb-6 block">
            <div class="w-[40%]  mr-auto ml-auto">
               
                 
                 <div class="bg-green-500 rounded pt-1 pb-2 h-[90px] text-center text-white font-bold">
                    <div class=""  >
                        <div class="ml-[90%]   cursor-pointer hover:text-green-300" id='closeForm' >X</div>
                      </div>
                    {{ session('success') }}
                 </div>
             
            </div>
        </section>
        @endif
        {{-- category listings --}}
        <section class="w-[80%] mr-auto ml-auto mt-32">
            <div class="flex justify-start  flex-wrap">
                @foreach($categories as $category)
                <div class="bg-white ml-[7%] w-[15%] h-[80px]  text-center rounded mt-6 font-bold ">
                    <div class="pl-[86%] pt-1 cursor-pointer">
                        <img  src="{{ asset('./images/dotsetting.png') }}" />
                    </div>
                    <div class="cursor-pointer">
                        <p>{{ $category['category_name'] }}</p>
                    </div>
                </div>
                <div class='bg-gray-300 w-[10%] absolute h-[90px] text-center block rounded'>
                  <div class="w-[50%] mr-auto ml-auto">
                    <button class="bg-main-color w-[120px] rounded mt-3 mb-3 text-white block font-bold">edit</button>
                        <form method="POST" action={{ route('category.delete',$category['id']) }}>
                            @method('delete')
                            @csrf
                           <input class="bg-red-500 w-[120px] rounded  mt-3  block text-white font-bold" type='submit' value='delete' />
                        </form>
                     
                  </div>
                </div>
                @endforeach

            </div>
        </section>
    </div>
    @php $isError = false @endphp 

    @if($errors->any())

       @php 

         $isError = true;

       @endphp

    @endif
    <div id='parent_popup'
       class="absolute {{ $isError ? 'flex': 'hidden'}} w-full top-0 h-full bottom-0 bg-black opacity-50 "></div>
    <section id='form'  
         class="  {{ $isError ? 'flex': 'hidden'}} bg-white ml-[25%] mt-[5%] hidden w-[50%] text-center rounded mt-[7%] absolute top-0  w-[70%]   h-fit  mr-auto ml-auto mt-12">
        
         <div class=" mb-12"  >
             <div class=" pt-2 cursor-pointer hover:text-main-color" id='closeForm' >X</div>
         </div>
         <div class="w-[90%] mr-auto   " >
            <form class="pt-6 pb-22" 
               method="POST"
               action=" {{ route('createcategory') }}" >
              @csrf
            <div class=" w-full ml-7  justify-start">
                 <!--Category  name -->
                 <div class="w-full ">
                     <label class="block mb-2  font-bold">Category name :</label>
                     <input  class=" border w-[70%] h-[29px] pl-2  rounded border-main-color outline-main-color"
                             type='text'
                             value='{{ old('categoryname') }}'
                             name='categoryname'
                             placeholder="Enter category name"
                     />
                     @error('categoryname')<div class="text-red-500">{{ $message }}</div>@enderror
                 </div>
             
             <!-- add project button -->
             <div class="w-full pb-8 mt-7">
                 <div class="text-center ">
                     <button  class="bg-main-color cursor-pointer w-[120px] rounded h-[34px] text-white"
                            type='submit'
                            >
                            Add Category
                         </button>
                 </div>
             <div>
         </form>
         </div>
    </section>

</div>


@endsection
