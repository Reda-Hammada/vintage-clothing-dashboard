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
                         <a href="{{ route('dashboard') }}"><p class="ml-4 cursor-pointer" >Dashboard</p></a>
                      </div>
                 </div>
                 <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                     <div class="w-7
                      ">
                         <img src="{{asset('images/products.svg')}}" alt="products icon" />
                     </div>
                     <div class="w-1/2
                      ">
                         <a href="{{ route('products') }}"><p class="ml-4 cursor-pointer" >Products</p></a>
                     </div>
                 </div>
                 <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                     <div class="w-7
                      ">
                         <img src="{{asset('images/categories.svg')}}" alt="categories icon" />
                     </div>
                     <div class="w-1/2
                      ">
                         <a href="{{ route('setting') }}"><p class="ml-4 cursor-pointer" >Categories</p></a>
                     </div>
                 </div>
                 <div class="flex  justify-start p-1 mr-2 mt-4 focus:bg-hov-color  hover:bg-hov-color" >
                     <div class="w-7
                      ">
                         <img src="{{asset('images/orders.svg')}}" alt="orders icon" />
                     </div>
                     <div class="w-1/2
                      ">
                         <a href="{{ route('setting') }}">
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
                         <a href="{{ route('setting') }}"><p class="ml-4 cursor-pointer" >Settings</p></a>
                     </div>
                 </div>
             </div>
         </div>
     </nav>
     {{--    side navbar     --}}
 </header>