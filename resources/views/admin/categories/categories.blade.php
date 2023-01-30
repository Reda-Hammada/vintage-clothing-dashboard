@extends('layouts.app')


@section('title', 'Categories')


@section('content')

<div class="flex flex-row   w-full justify-start ">
    {{-- sidebar component --}}
    <x-dashboard-sidebar   />
    <section class="mt-10 flex w-full justify-between">
       <div>
           <h1 class="text-3xl font-bold ml-2">Categories :</h1>
       </div>
       <div class="mr-20 w-36 h-10 bg-main-color  rounded text-white text-center">
           <button class="pt-2"
                   id='addBtn'>Add Category </button>
       </div>
    </section>

    @php $isError = false @endphp 

    @if($errors->hasAny())

       @php 

         $isError = true;

       @endphp

    @endif
    <div id='parent_popup'
       class="absolute {{ $isError ? 'flex' : 'hidden' }} w-full top-0 h-full bottom-0 bg-black opacity-50 "></div>

    <section id='form'  
         class="bg-white {{ $isError ? 'flex' : 'hidden' }} ml-[25%] mt-[5%] hidden w-[50%] text-center rounded mt-[7%] absolute top-0  w-[70%]   h-fit  mr-auto ml-auto mt-12">
        
         <div class=" mb-12" >
             <div class=" pt-2 cursor-pointer hover:text-main-color" id='closeForm' >X</div>
         </div>
         <div class="w-[90%] mr-auto " >
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
             <div class="w-full pb-8 mt-9">
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
