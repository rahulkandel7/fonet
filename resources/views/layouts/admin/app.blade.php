<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Alpine --}}
        <script src="//unpkg.com/alpinejs" defer></script>

        <link rel="shortcut icon" type="image/jpg" href="/favicon.jpg"/>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <style>
            [x-cloak] { 
      display: none !important;
   }
        </style>

        @yield('css')
    </head>
    <body class="font-sans antialiased dark:bg-white dark:text-slate-300">

            {{-- For Mobile Nav --}}

                <div class="w-full md:hidden shadow-gray-300 dark:shadow-gray-800 bg-c shadow-md" x-data="{ isNav: false }">
                    <div class="flex justify-between items-center">
                    <a href="/dashboard"><img src="{{ asset('images/logo.png') }}" width="200" alt="" class="p-5"></a>
                        <a  class="mr-8" @click="isNav=true" ><i class="fa fa-bars text-lg text-blue-400"></i></a>
                    </div>

                    <div class="w-full px-8" x-show="isNav" @click.away ="isNav=false">
                        <ul class="my-2">

                           
                            <a href="{{ route('dashboard') }}" class="block mt-1">
                                <li class="pl-4 text-lg py-2 font-semibold hover:bg-m hover:text-white
                                {{(request()->routeIs('dashboard'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                                transition-colors ease-in-out delay-100">
                                    <i class="fa fa-tachometer"></i> &nbsp; Dashboard
                                </li>
                             </a>
                             <a href="" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-m hover:text-white 
                                 transition-colors ease-in-out delay-100">
                                     <i class="fa fa-newspaper"></i> &nbsp;  Teams
                                 </li>
                              </a>
             
                              <a href="" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-m hover:text-gray-700  
                                 transition-colors ease-in-out delay-100">
                                     <i class="fas fa-copy"></i> &nbsp;  Gallery
                                 </li>
                              </a>
             
                              <a href="" class="block mt-1 ">
                                 <li class="pl-4 text-lg py-2   hover:bg-m hover:text-gray-700 
                                 
                                 transition-colors ease-in-out delay-100">
                                     <i class="fas fa-tasks"></i> &nbsp;  Services
                                 </li>
                              </a>
             
                              
                             
                              <form method="POST" action="{{ route('logout')}}">
                                @csrf
                             <button type="submit" class="block mt-4 w-full ">
                                <li class="pl-4 text-left text-lg py-2 text-slate-300 hover:bg-m hover:text-gray-700 transition-colors ease-in-out delay-100">
                                    <i class="fa fa-sign-out"></i> &nbsp; Logout
                                </li>
                            </button>
                            </form>


                           </ul>
                    </div>

                </div>


       <div class="w-full flex">
            <div class="w-64  hidden md:flex h-screen ">
                <div class="w-64 h-full  bg-c shadow-lg ">
                <a href="/dashboard" >
                    <div class="flex justify-center">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="" class="py-5 px-5 w-40">
                    </div>
                </a>
               <ul class="my-2">

                <a href="{{ route('dashboard') }}" class="block mt-1">
                   <li class="pl-4 text-lg py-2 font-semibold hover:bg-m hover:text-gray-700
                   {{(request()->routeIs('dashboard'))? "bg-m text-white " :""}} 
                   transition-colors ease-in-out delay-100">
                       <i class="fa fa-tachometer"></i> &nbsp; Dashboard
                   </li>
                </a>
                <a href="" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-m hover:text-white 
                    transition-colors ease-in-out delay-100">
                        <i class="fa fa-newspaper"></i> &nbsp;  Teams
                    </li>
                 </a>

                 <a href="" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-m hover:text-white 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-copy"></i> &nbsp;  Gallery
                    </li>
                 </a>

                 <a href="" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-m hover:text-white 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-tasks"></i> &nbsp;  Services
                    </li>
                 </a>

                 
                 {{-- <a href="{{route('admin.users.edit',Auth::id())}}" class="block mt-1 ">
                    <li class="pl-4 text-lg py-2   hover:bg-m hover:text-white 
                    {{(request()->routeIs('admin.users.*'))? "bg-blue-600 text-white " : "text-slate-300"}} 
                    transition-colors ease-in-out delay-100">
                        <i class="fas fa-user"></i> &nbsp;  Change Password
                    </li>
                 </a> --}}

                

                <form method="POST" action="{{ route('logout')}}">
                    @csrf
                 <button type="submit" class="block mt-4 w-full ">
                    <li class="pl-4 text-left text-lg py-2 text-slate-300 hover:bg-m hover:text-white transition-colors ease-in-out delay-100">
                        <i class="fa fa-sign-out"></i> &nbsp; Logout
                    </li>
                </button>
                </form>


                 
                 
               </ul>

            </div>  

            </div>
            @yield('main')
       </div>
       @yield('js')

     
    </body>
</html>
