<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fonet</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl/owlnav.css')}}">
        <link rel="stylesheet" href="{{asset('css/lightbox/lightbox.min.css')}}">
        

        <!-- Fontawesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!-- Alpine JS CDN -->
        <script defer src="https://unpkg.com/alpinejs@3.6.1/dist/cdn.min.js"></script>

        <style>
            
            .moveup{
                transition: all .3s ease-in-out; 
            }
            .moveup:hover{
                transform: translateY(-3px);
            }
            .info-block{
                visibility: hidden;
                transition: all .1s ease-in-out;
            }
            .info:hover .info-block{
                visibility: visible;
            }
            .fill{
                transition: all .3s ease-in-out;
            }
            .fillColor{
                color:#EC008C;
            }
            .fill:hover .fillColor{
                background-color: #EC008C;
                color:white
            }
        </style>
        
    </head>
    <body class="antialiased" style="font-family: 'Poppins', sans-serif;">
        <div class="w-11/12 mx-auto" x-data="{isNav: false}">
            <nav class="py-2">
                <div class="inline-block">
                    <img src="{{asset('images/logo.jpeg')}}" class="w-10">
                </div>
                {{-- Navbar for screen greater than medium screen --}}
                <div class=" float-right mt-3 hidden md:inline-block">
                    <ul class="inline-block">
                        <li class="inline-block px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a>Home</a>
                        </li>
                        <li class="inline-block px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#aboutus">About Us</a>
                        </li>
                        <li class="inline-block px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#teams">Teams</a>
                        </li>
                        <li class="inline-block px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#services">Services</a>
                        </li>
                        <li class="inline-block px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a>Rate List</a>
                        </li>
                        <li class="inline-block px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#gallery">Gallery</a>
                        </li>
                        <li class="inline-block px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>
                    <template x-if="isNav == true">
                        <button class="float-right mt-3 md:hidden" @click="isNav=false">
                            <i class="fas fa-times text-3xl"></i>
                        </button>
                    </template>
                    <template x-if="isNav == false">
                        <button class="float-right mt-3 md:hidden" @click="isNav=true">
                            <i class="fas fa-bars text-3xl"></i>

                        </button>
                    </template>

                <div x-show="isNav" class="md:hidden" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90">
                    <ul>
                        <li class=" py-3 px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a>Home</a>
                        </li>
                        <li class=" py-3 px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#aboutus">About Us</a>
                        </li>
                        <li class=" py-3 px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#teams">Teams</a>
                        </li>
                        <li class=" py-3 px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#services">Services</a>
                        </li>
                        <li class=" py-3 px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a>Rate List</a>
                        </li>
                        <li class=" py-3 px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a href="#gallery">Gallery</a>
                        </li>
                        <li class=" py-3 px-2 text-m hover:opacity-100 opacity-80 cursor-pointer">
                            <a  href="#contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="w-full pb-36 bg-c clip" id="home">
            <div class="w-11/12 mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="flex justify-center mt-24 md:mt-56 px-4">
                        <div>
                            <p class="text-white text-4xl md:text-5xl font-extrabold tracking-wide mb-5">
                                A  
                            </p>
                            <p class="text-white text-4xl md:text-5xl font-extrabold tracking-wide mb-5">
                                Complete  
                            </p>
                            <p class="text-white text-4xl md:text-5xl font-extrabold tracking-wide mb-5">
                                Computer Solution.  
                            </p>

                            <a class="px-5 py-2 inline-block border-m border-2 rounded-full hover:bg-m text-white shadow-md hover:shadow-sm cursor-pointer transition-all delay-100 ease-in-out" href="#aboutus">
                                Get Started
                            </a>
                            <a class="ml-6 px-5 py-2 inline-block bg-m border-2 border-m rounded-full hover:bg-c text-white shadow-md hover:shadow-sm cursor-pointer transition-all delay-100 ease-in-out" href="#services">
                                Our Services
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/intro.svg') }}" class="mt-20 md:mt-28 w-96 md:w-full md:h-96">
                    </div>
                </div>
            </div>
        </div>

    <!-- About Us Start -->
        <div class="w-11/12 mx-auto mt-5 py-10" id="aboutus">
            <div class="flex justify-center">
                <div>
                    <h2 class="text-center text-4xl"> About Us </h2>
                    <p class="text-center font-light text-sm mt-3 md:max-w-md">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi aliquid deleniti nihil libero neque voluptate et recusandae non facilis, eveniet consequatur animi ipsam facere cupiditate ex vero error cumque molestias.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 mt-5">
                <div class="py-5 order-2 md:order-1">
                    <p>
                        We provide strategic brand ideas, integrated communications, TVC, print media, event management, business research, digital solutions and much more for brands.
                    </p>
                    <p class="py-5">
                        We bring brands to life with ingenious ideas based on insight.
                    </p>
                    <p>
                        At BITS we provides all the services related to IT fields.
                    </p>
                    <ul>

                        <li class="py-3">
                            <div class="grid grid-cols-7 fill">
                                <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                    <div class="flex justify-center">
                                        <i class="fas fa-book text-3xl mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <p class=" text-xl font-semibold">Stationary Items</p>
                                    <p class="text-sm">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis odio totam impedit deserunt dolorib
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="py-3">
                            <div class="grid grid-cols-7 fill">
                                <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                    <div class="flex justify-center">
                                        <i class="fas fa-print text-3xl mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <p class=" text-xl font-semibold">Printing Services</p>
                                    <p class="text-sm">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis odio totam impedit deserunt dolorib
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-3">
                            <div class="grid grid-cols-7 fill">
                                <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                    <div class="flex justify-center">
                                        <i class="fas fa-book text-3xl mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <p class=" text-xl font-semibold">Binding Services</p>
                                    <p class="text-sm">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis odio totam impedit deserunt dolorib
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="order-1 md:order-2">
                    <img src="{{ asset('images/printing.svg') }}">
                </div>
            
            </div>
        </div>
    <!-- About Us End -->

    <!--Service Block Start -->
        <div class="bg-m bg-opacity-100 " id="services">
            <div class="w-11/12 mx-auto py-10">
                <div class="text-white">
                    <h2 class="flex justify-center text-4xl"> Services </h2>
                    <p class="flex justify-center font-light text-xl mt-3">
                        We provide the following Services as per the need of the clients
                    </p>
                </div>
                <div class="w-9/12 mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 my-8">
                        <div class="px-10 ">
                            <div class="bg-white shadow-xl rounded-xl h-20 moveup hover:shadow-lg">
                                <div class="grid grid-cols-7 px-3 fill">
                                    <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                        <div class="flex justify-center">
                                            <i class="fas fa-print text-3xl mt-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <p class=" text-xl px-5 mt-6 ml-2 font-semibold">Printing Services</p>
 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-10 mt-8 md:mt-0">
                            <div class="bg-white shadow-xl rounded-xl h-20 moveup hover:shadow-lg">
                                <div class="grid grid-cols-7 px-3 fill">
                                    <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                        <div class="flex justify-center">
                                            <i class="fas fa-print text-3xl mt-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <p class=" text-xl px-5 mt-6 ml-2 font-semibold">Printing Services</p>
 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 my-8">
                        <div class="px-10 ">
                            <div class="bg-white shadow-xl rounded-xl h-20 moveup hover:shadow-lg">
                                <div class="grid grid-cols-7 px-3 fill">
                                    <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                        <div class="flex justify-center">
                                            <i class="fas fa-book text-3xl mt-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <p class=" text-xl px-5 mt-6 ml-2 font-semibold">Printing Services</p>
 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-10 mt-8 md:mt-0">
                            <div class="bg-white shadow-xl rounded-xl h-20 moveup hover:shadow-lg">
                                <div class="grid grid-cols-7 px-3 fill">
                                    <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                        <div class="flex justify-center">
                                            <i class="fas fa-print text-3xl mt-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <p class=" text-xl px-5 mt-6 ml-2 font-semibold">Printing Services</p>
 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 my-8">
                        <div class="px-10 ">
                            <div class="bg-white shadow-xl rounded-xl h-20 moveup hover:shadow-lg">
                                <div class="grid grid-cols-7 px-3 fill">
                                    <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                        <div class="flex justify-center">
                                            <i class="fas fa-print text-3xl mt-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <p class=" text-xl px-5 mt-6 ml-2 font-semibold">Printing Services</p>
 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-10 mt-8 md:mt-0">
                            <div class="bg-white shadow-xl rounded-xl h-20 moveup hover:shadow-lg">
                                <div class="grid grid-cols-7 px-3 fill">
                                    <div class="border-m border-2 rounded-full fillColor w-16 h-16 my-2" style="clip-path: circle(50% at 50% 50%);">
                                        <div class="flex justify-center">
                                            <i class="fas fa-book text-3xl mt-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <p class=" text-xl px-5 mt-6 ml-2 font-semibold">Printing Services</p>
 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    <!--Service Block end -->
    
    <!-- Teams Block Start -->
        <div class="bg-y" id="teams">
            <div class="w-11/12 mx-auto py-10">
                <div class="text-black">
                    <h2 class="flex justify-center text-4xl"> Our Teams </h2>
                    <p class="flex justify-center font-light text-xl mt-3">
                        Meet our team members
                    </p>
                </div>

                <div class="owl-carousel mt-16">
                    <div> 
                        <div class="h-60 w-60 shadow-md relative info" style="clip-path: circle(50% at 50% 50%);">
                            <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60">
                            <div class="bg-c absolute top-0 h-full w-full bg-opacity-70 info-block ">
                                <p class="font-bold text-xl text-white text-center mt-28">
                                    Ram Parasd Acharya <br>
                                    <a class="cursor-pointer" href="www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div> 
                        <div class="h-60 w-60 shadow-md relative info" style="clip-path: circle(50% at 50% 50%);">
                            <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60">
                            <div class="bg-c absolute top-0 h-full w-full bg-opacity-70 info-block ">
                                <p class="font-bold text-xl text-white text-center mt-28">
                                    Demo <br>
                                    <a class="cursor-pointer" href="www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md relative info" style="clip-path: circle(50% at 50% 50%);">
                            <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60">
                            <div class="bg-c absolute top-0 h-full w-full bg-opacity-70 info-block ">
                                <p class="font-bold text-xl text-white text-center mt-28">
                                    Demo <br>
                                    <a class="cursor-pointer" href="www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md relative info" style="clip-path: circle(50% at 50% 50%);">
                            <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60">
                            <div class="bg-c absolute top-0 h-full w-full bg-opacity-70 info-block ">
                                <p class="font-bold text-xl text-white text-center mt-28">
                                    Demo <br>
                                    <a class="cursor-pointer" href="www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md relative info" style="clip-path: circle(50% at 50% 50%);">
                            <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60">
                            <div class="bg-c absolute top-0 h-full w-full bg-opacity-70 info-block ">
                                <p class="font-bold text-xl text-white text-center mt-28">
                                    Demo <br>
                                    <a class="cursor-pointer" href="www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md relative info" style="clip-path: circle(50% at 50% 50%);">
                            <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60">
                            <div class="bg-c absolute top-0 h-full w-full bg-opacity-70 info-block ">
                                <p class="font-bold text-xl text-white text-center mt-28">
                                    Demo <br>
                                    <a class="cursor-pointer" href="www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md relative info" style="clip-path: circle(50% at 50% 50%);">
                            <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60">
                            <div class="bg-c absolute top-0 h-full w-full bg-opacity-70 info-block ">
                                <p class="font-bold text-xl text-white text-center mt-28">
                                    Demo <br>
                                    <a class="cursor-pointer" href="www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Teams Block End -->

    <!--Why us Block Start -->
        <div class="bg-c ">
            <div class="w-11/12 mx-auto py-10">
                <div class="text-white">
                    <h2 class="flex justify-center text-4xl"> Why Choose Us? </h2>
                    <p class="flex justify-center font-light text-xl mt-3">
                        We provide the following Services as per the need of the clients
                    </p>
                </div>
                <div class="w-11/12 mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-3 my-8">
                        <div class="px-10 ">
                            <div class="bg-white shadow-xl rounded-xl  moveup hover:shadow-lg">
                                <p class="py-5 px-3 text-center text-xl font-semibold">PhotoCopy Services</p>
                                <p class="px-5 text-center pb-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis modi dolores doloremque suscipit earum officiis veritatis iste quis!
                                </p>
                            </div>
                        </div>
                        <div class="px-10 mt-8 md:mt-0">
                            <div class="bg-white shadow-xl rounded-xl hover:shadow-lg moveup">
                                <p class="py-5 px-3 text-center text-xl font-semibold">Lamination Services</p>
                                <p class="px-5 text-center pb-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis modi dolores doloremque suscipit earum officiis veritatis iste quis!
                                </p>
                            </div>
                        </div>

                        <div class="px-10 mt-8 md:mt-0">
                            <div class="bg-white shadow-xl rounded-xl  hover:shadow-lg moveup">
                                <p class="py-5 px-3 text-center text-xl font-semibold">Lamination Services</p>
                                <p class="px-5 text-center pb-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis modi dolores doloremque suscipit earum officiis veritatis iste quis!
                                </p>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    <!--Why us Block end -->

    <!-- Gallery Block Start -->
        <div class="bg-m bg-opacity-100" id="gallery">
            <div class="w-11/12 mx-auto py-10">
                <div class="text-white">
                    <h2 class="flex justify-center text-4xl"> Gallery </h2>
                    <p class="flex justify-center font-light text-xl mt-3">
                        Watch our galleries
                    </p>
                </div>

                <div class="owl-carousel mt-16">
                    <div> 
                        <div class="h-60 w-60 shadow-md rounded-md moveup" >
                            <a href="{{ asset('images/sample.jpeg') }}" data-lightbox="mygallery" data-title="Demo">
                                <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60 rounded shadow-xl cursor-pointer img" >
                            </a>
                        </div>
                    </div>
                    <div> 
                        <div class="h-60 w-60 shadow-md rounded-md moveup" >
                            <a href="{{ asset('images/sample.jpeg') }}" data-lightbox="mygallery" data-title="Demo">
                                <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60 rounded shadow-xl cursor-pointer img" >
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md rounded-md moveup" >
                            <a href="{{ asset('images/sample.jpeg') }}" data-lightbox="mygallery" data-title="Demo">
                                <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60 rounded shadow-xl cursor-pointer img" >
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md rounded-md moveup" >
                            <a href="{{ asset('images/sample.jpeg') }}" data-lightbox="mygallery" data-title="Demo">
                                <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60 rounded shadow-xl cursor-pointer img" >
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md rounded-md moveup" >
                            <a href="{{ asset('images/sample.jpeg') }}" data-lightbox="mygallery" data-title="Demo">
                                <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60 rounded shadow-xl cursor-pointer img" >
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md rounded-md moveup" >
                            <a href="{{ asset('images/sample.jpeg') }}" data-lightbox="mygallery" data-title="Demo">
                                <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60 rounded shadow-xl cursor-pointer img" >
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="h-60 w-60 shadow-md rounded-md moveup" >
                            <a href="{{ asset('images/sample.jpeg') }}" data-lightbox="mygallery" data-title="Demo">
                                <img src="{{ asset('images/sample.jpeg') }}" class="h-60 w-60 rounded shadow-xl cursor-pointer img" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Gallery Block End -->

    <!-- Contact Us Start -->
        <div class="bg-white" id="contactus">
            <div class="w-11/12 mx-auto py-10">
                <h2 class="flex justify-center text-4xl"> Contact Us </h2>
                <div class="grid  grid-cols-1 md:grid-cols-3 mt-3">
                    <div class="col-span-2">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4441.159899521803!2d84.43171996406453!3d27.68317005197031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb2dee56a405%3A0xb667aee3e27ececa!2sFonet%20Stationery%20Center%20(FCI)!5e0!3m2!1sen!2snp!4v1638426683863!5m2!1sen!2snp"  height="450" style="border:0;" allowfullscreen="" loading="lazy" class="w-full px-10"></iframe>
                        </div>
                        
                    </div>
                    <div>
                        <p class="py-2">
                            <i class="fas fa-map-marker-alt text-c"></i> <span class="pl-1">Belchowk,Chitwan</span>
                        </p>
                        <p class="py-2">
                            <i class="fas fa-globe text-c"></i> <span class="pl-1">+9771234567889</span>
                        </p>
                        <p class="py-2">
                            <i class="fas fa-envelope text-c"></i> <span class="pl-1">info@bitmap.com</span>
                        </p>
                        <form>
                            <div>
                                <input type="text" name="name" id="name" class="rounded-md shadow-sm border-c focus:ring-y focus:border-m hover:border-m my-2" placeholder="Your Name" required>
                                <input type="email" name="email" id="email" class="rounded-md shadow-sm border-c focus:ring-y focus:border-m hover:border-m my-2" placeholder="Your Email Address" required>
                                <input type="text" name="subject" id="subject" class="rounded-md shadow-sm border-c focus:ring-y focus:border-m hover:border-m my-2" placeholder="Subject" required>
                                <textarea  name="message" id="message" class="rounded-md shadow-sm border-c focus:ring-y focus:border-m hover:border-m my-2"  placeholder="Message" required>  </textarea>
                                <input type="submit" value="submit" class="rounded-md px-4 py-2 bg-y block shadow-md hover:shadow-lg cursor-pointer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Contact Us End -->

    <!-- Footer Section Start -->
        <div class="bg-k">
            <div class="w-11/12 mx-auto">
                <div class="grid grid-cols-4">
                    <div class="py-5">
                        <h2 class="text-2xl text-white font-semibold">FONET</h2>
                        <p class="text-white text-justify pt-2 px-1 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptatum magnam ea blanditiis asperiores doloremque expedita adipisci voluptas neque dignissimos ratione mollitia odio nobis ut, aperiam aliquam, quam error ad.
                        </p>
                    </div>

                    <div class="py-5 flex justify-center">
                        <div >
                            <h2 class="text-2xl text-white font-semibold">Useful Links</h2>
                            <ul class="text-white pt-2">
                                <li class="py-1">
                                    <a href="#home">Home</a>
                                </li>

                                <li class="py-1">
                                    <a href="#teams">Teams</a>
                                </li>

                                <li class="py-1">
                                    <a href="#services">Services</a>
                                </li>

                                <li class="py-1">
                                    <a href="#price">Price List</a>
                                </li>

                                
                            </ul>
                        </div>
                    </div>

                    <div class="py-5 flex justify-center">
                        <div >
                            <h2 class="text-2xl text-white font-semibold">Contact Us</h2>
                            <ul class="text-white pt-2">
                                <li class="pt-1">
                                    <a>Bharatpur-3,</a>
                                </li>

                                <li class="pt-1">
                                    <a>Belchowk,</a>
                                </li>
                                <li class="pt-1">
                                    <a>Narayanghat,Nepal</a>
                                </li>
                                <li class="pt-1">
                                    <a>9815000930,078-087811</a>
                                </li>
                                <li class="pt-1">
                                    <a>info@demo.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="py-5 flex justify-center">
                        <div >
                            <h2 class="text-2xl text-white font-semibold">Facebook Page</h2>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffcichitwan&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1480488948989338" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
                <p class="text-white  py-4 inline-block">
                    Copyright &copy; 2021. Fonet Stationary Center
                </p>
                <p class="text-white float-right py-4 inline-block">
                    Developed By: <a href="https://www.bitmapitsolution.com" class="text-white hover:text-m">Bitmap IT Solution PVT. LTD.</a>
                </p>

            </div>
        </div>
    <!-- Footer Section End -->

    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
            ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                scrollTop: target.offset().top
                }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
                });
            }
            }
        });
    </script>
    <!--OWL -->
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"> </script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                nav:false,
                // autoWidth:true,
                autoplayTimeout:1500,
                autoplay:true,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:2,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:4,
                    },
                    1200:{
                        items:4,
                    }
                }

            });
        });
    </script>
    
    {{-- //lightbox --}}
    <script src="{{ asset('js/lightbox/lightbox.min.js') }}"> </script>
    <script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })
    </script>
</html>
