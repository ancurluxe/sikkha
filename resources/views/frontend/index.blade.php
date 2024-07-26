@extends('frontend.layouts.master')

@section('content')
    {{-- top-header --}}
    <section class="sm:flex  justify-between p-2 w-full bg-blue-900 space-y-2 container px-12">
        <div class="flex space-x-6">
            <div class="flex space-x-2">
                <i class="ri-customer-service-fill text-yellow-400"></i>
                <p class="text-white">+977 987654321</p>
                <p class="text-white">|</p>
            </div>
            <div class="flex space-x-2 ">
                <i class="ri-mail-fill text-yellow-400"></i>
                <P class="text-white">mmmmm@gmail.com</P>
            </div>
        </div>
        <div class="flex space-x-2 text-yellow-400">
            <i class="ri-twitter-fill"></i>
            <p>|</p>
            <i class="ri-facebook-circle-fill"></i>
            <p>|</p>
            <i class="ri-pinterest-fill"></i>
            <p>|</p>
            <i class="ri-instagram-fill"></i>

        </div>
    </section>
    {{-- navbar --}}
    <nav class="bg-white p-2  items-center md:flex justify-between hidden container px-12">
        <div>
            <img class="w-24" src="{{ asset('frontend/images/logo.png') }}" alt="">
        </div>
        <div class="flex space-x-5">
            <a class="text-blue-900" href="#">Home</a>
            <a class="text-blue-900" href="#">Pages</a>
            <a class="text-blue-900" href="#">Elements</a>
            <a class="text-blue-900" href="#">Courses</a>
            <a class="text-blue-900" href="#">News</a>
            <a class="text-blue-900" href="#">Contact</a>
            <p class="text-blue-900">|</p>
            <i class="ri-search-line text-blue-900"></i>
            <i class="ri-shopping-cart-fill text-blue-900"></i>
        </div>
    </nav>

    <!-- mobile-nav -->
    <section>
        <nav class="sidebar bg-white w-[200px] px-9 z-10 fixed hidden flex-col py-3 shadow-md">

            <img class="w-24" src="{{ asset('frontend/images/logo.png') }}" alt="" /></li>
            <a class="text-blue-900" href="#">Home</a>
            <a class="text-blue-900" href="#">Pages</a>
            <a class="text-blue-900" href="#">Elements</a>
            <a class="text-blue-900" href="#">Courses</a>
            <a class="text-blue-900" href="#">News</a>
            <a class="text-blue-900" href="#">Contact</a>

        </nav>
        <div class="flex lg:hidden justify-between bg-white mx-3 rounded-xl top-3 p-2">
            <img class="xl:w-[120px] w-20 md:w-24" src="./images/logo.png" alt="" />
            <div class="menu lg:hidden" onclick="toggleSidebar()">
                <a href="#" class="nav-toggle hover-link">
                    <i class="ri-menu-line" id="icon"></i></a>
            </div>
        </div>

        <script>
            function toggleSidebar() {
                var icon = document.getElementById("icon");
                const sidebar = document.querySelector(".sidebar");
                if (sidebar.style.display === "flex") {
                    icon.classList.add("ri-menu-line");
                    sidebar.style.display = "none";
                } else {
                    icon.classList.remove("ri-menu-line");
                    icon.classList.add("ri-close-line");
                    sidebar.style.display = "flex";
                }
            }
        </script>
    </section>

    <!-- about us banner -->
    <section class="mt-16 md:mt-0 container ">
        <div class="bg-gradient-to-r from-[#f5f5ff] to-[#f5f5ff] p-44 relative overflow-hidden">
            <h1 class="text-4xl font-bold"></h1>
            <p class="mt-4 text-xl"></p>

            <div class="gradient-1 hidden sm:block size-44 rounded-full absolute -bottom-24 left-20 overflow-hidden"></div>

            <div class="blob size-[600px] -top-10 md:size-[700px] absolute -right-28 s_md:-top-44"></div>

            <div class="gradient-1 size-44 rounded-full absolute -top-20 right-[500px] overflow-hidden"></div>

            <img class="w-[600px] absolute right-1 2xl:-right-32 bottom-0"
                src="{{ asset('frontend/images/young-woman-casual-wearing-pink-background.png') }}" alt="" />

            <di
                class="absolute text-center text-3xl left-12 top-1 md:top-28 xl:text-5xl 2xl:top-32 xl:space-y-7 2xl:left-[30%]">
                <p class="font-bold text-[#303392] 2xl:text-7xl">
                    Navigate Your Future
                </p>
                <p class="text-blue-900 text-xl 2xl:text-3xl">
                    Your Future Global Education
                </p>
                <button class="bg-blue-900 relative text-white w-32 h-10 font-semibold text-sm px-5">ADMIT NOW<div
                        class="w-32 h-10 absolute -right-2 top-2  outline outline-blue-900"></div></button>

        </div>
    </section>

    {{-- welcome to our sikkha --}}
    <section class="container px-12">
        <div class="flex justify-center align-center">
            <div class="py-10 grid md:grid-cols-2 items-center">
                <div>
                    <p class="font-bold text-lg ">Welcome To Our Sikkha</p>
                    <p class="text-wrap  leading-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias,
                        dolores a quaerat error corrupti doloremque
                        incidunt iure repudiandae ipsa officia, optio enim ex voluptate! Eum ipsam reiciendis odio cumque
                        dignissimos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi nisi ipsum ipsam
                        corporis
                        explicabo deleniti, labore accusantium reprehenderit rerum tenetur, minus, dolor modi? Molestias nam
                        ducimus, dolore architecto nulla dolorem.</p>
                    <button class="bg-blue-900 relative text-white w-32 h-10 font-semibold text-sm px-5 my-10">ADMIT NOW<div
                            class="w-32 h-10 absolute -right-2 top-2  outline outline-blue-900"></div></button>
                </div>


                <div class="flex justify-center align-center">
                    <img class="rounded-tl-[300px] rounded-tr-[300px] rounded-b-[100px] w-[500px]  "
                        src="{{ asset('frontend/images/main.jpg') }}" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- scholorship- cards --}}
    <section class="container px-12">
        <div class="grid md:grid-cols-2 gap-4 ">
            {{-- cards-1 --}}
            <div class="shadow-md border-l-2 border-yellow-400 px-2 outline outline-gray-200">
                <div class="flex justify-between ">
                    <p class="text-lg font-semibold">Scholorship Facility</p>
                    <p class="text-gray-500 font-bold">01</p>
                </div>
                <div class="">
                    <p class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ?.</p>
                </div>
            </div>

            {{-- cards-2 --}}
            <div class="shadow-md border-l-2 border-yellow-400 px-2 outline outline-gray-200">
                <div class="flex justify-between">
                    <p class="text-lg font-semibold">Scholorship Facility</p>
                    <p class="text-gray-500 font-bold">01</p>
                </div>
                <div class="">
                    <p class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ?.</p>
                </div>
            </div>

            {{-- cards-3 --}}
            <div class="shadow-md border-l-2 border-yellow-400 px-2 outline outline-gray-200">
                <div class="flex justify-between">
                    <p class="text-lg font-semibold">Scholorship Facility</p>
                    <p class="text-gray-500 font-bold">01</p>
                </div>
                <div class="">
                    <p class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ?.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Our latest course --}}
    <section class="bg-blue-900 my-10 py-8 container px-12">

        <div class="text-center py-4">
            <p class="text-xl text-center font-bold text-white">Our Latest Course</p>
            <p class="text-lg text-center  text-white"> Our Latest Course Our Latest Course </p>
        </div>
        {{-- cards --}}
        <div class="grid md:grid-cols-3 gap-8  ">

            {{-- card-1 --}}
            <div class="bg-white ">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                    <img class="w-20 rounded-full absolute right-1 -bottom-4 outline outline-white outline-4"
                        src="{{ asset('frontend/images/tauko.png') }}" alt="">
                </div>

                <div class="px-2 py-2">
                    <button class="font-bold text-xl bg-yellow-400 p-2 my-2">BUSINESS</button>
                    <p class="text-blue-900 my-2 text-xl font-bold ">Business Studies</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>

                    <div class="flex justify-between border-t-2 border-gray-200 ">

                        <div class="text-blue-900 flex space-x-2">
                            <i class="ri-user-fill"> 35</i>
                            <p>|</p>
                            <i class="ri-heart-fill "> 35</i>
                        </div>

                        <div>
                            <p class="text-blue-900">View Details</p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- card-2 --}}
            <div class="bg-white ">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                    <img class="w-20 rounded-full absolute right-1 -bottom-4 outline outline-white outline-4"
                        src="{{ asset('frontend/images/tauko.png') }}" alt="">
                </div>
                <div class="px-2 py-2">

                    <button class="font-bold text-xl bg-yellow-400 p-2 my-2">BUSINESS</button>
                    <p class="text-blue-900 my-2 text-xl font-bold ">Business Studies</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur
                        error
                        voluptatum neque velit accusamus blanditiis quod.</p>

                    <div class="flex justify-between border-t-2 border-gray-200 ">

                        <div class="text-blue-900 flex space-x-2">
                            <i class="ri-user-fill"> 35</i>
                            <p>|</p>
                            <i class="ri-heart-fill "> 35</i>
                        </div>

                        <div>
                            <p class="text-blue-900">View Details</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- card-3 --}}
            <div class="bg-white">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                    <img class="w-20 rounded-full absolute right-1 -bottom-4 outline outline-white outline-4"
                        src="{{ asset('frontend/images/tauko.png') }}" alt="">
                </div>

                <div class="px-2 py-2">
                    <button class="font-bold text-xl bg-yellow-400 p-2 my-2">BUSINESS</button>
                    <p class="text-blue-900 my-2 text-xl font-bold ">Business Studies</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur
                        error
                        voluptatum neque velit accusamus blanditiis quod.</p>

                    <div class="flex justify-between border-t-2 border-gray-200 ">

                        <div class="text-blue-900 flex space-x-2">
                            <i class="ri-user-fill"> 35</i>
                            <p>|</p>
                            <i class="ri-heart-fill "> 35</i>
                        </div>

                        <div>
                            <p class="text-blue-900">View Details</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Our Experienced Advisors --}}
    <section class="container px-12">

        <div class=" py-4">
            <p class="text-xl text-center font-bold text-blue-900">Our Experienced Advisors</p>
            <p class="text-lg text-center text-blue-900"> Our Experienced Advisors Our Experienced Advisors Our Experienced
                Advisors
            </p>
        </div>
        {{-- cards --}}
        <div class=" ">
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-10 ">
                {{-- card-1 --}}
                <div class="  p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/pp-2.jpg') }}" alt="">
                    <div>
                        <p class="font-bold text-right px-2">Harish Pandey</p>
                        <p class="text-gray-600 text-right px-2">Senior Developer</p>
                    </div>

                    <div class="outline outline-yellow-400 mt-2 "></div>
                </div>
                {{-- card-2 --}}
                <div class="  p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/pp-2.jpg') }}" alt="">
                    <div>
                        <p class="font-bold text-right px-2">Harish Pandey</p>
                        <p class="text-gray-600 text-right px-2">Senior Developer</p>
                    </div>

                    <div class="outline outline-yellow-400 mt-2 "></div>
                </div>
                {{-- card-3 --}}
                <div class="  p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/pp-2.jpg') }}" alt="">
                    <div>
                        <p class="font-bold text-right px-2">Harish Pandey</p>
                        <p class="text-gray-600 text-right px-2">Senior Developer</p>
                    </div>

                    <div class="outline outline-yellow-400 mt-2 "></div>
                </div>
                {{-- card-4 --}}
                <div class=" p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/pp-2.jpg') }}" alt="">
                    <div>
                        <p class="font-bold text-right px-2">Harish Pandey</p>
                        <p class="text-gray-600 text-right px-2">Senior Developer</p>
                    </div>

                    <div class="outline outline-yellow-400 mt-2 "></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Upcoming-events --}}
    <section class="bg-blue-900 my-10 py-8 container px-12">

        <div class="text-center py-4">
            <p class="text-xl text-center font-bold text-white">Our Upcoming events</p>
            <p class="text-lg text-center  text-white"> Our Latest Course Our Latest Course </p>
        </div>
        {{-- cards --}}
        <div class="grid md:grid-cols-2 space-x-4 space-y-4">
            {{-- card-1 --}}
            <div class=" grid md:grid-cols-10  ">
                <div class="col-span-4">
                    <img class="h-full w-full " src="{{ asset('frontend/images/pp-3.jpg') }}" alt="">
                </div>
                <div class="bg-white p-2 py-2 col-span-6">
                    <div class=" flex justify-between">
                        <button class="bg-yellow-400 rounded-md p-2  ">25 <p>SEP,2018</p></button>
                        <div>
                            <p>Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>
                        <p>Speaker:Alexander</p>
                    </div>
                </div>
            </div>
            {{-- card-2 --}}
            <div class=" grid md:grid-cols-10  ">
                <div class="col-span-4">
                    <img class="h-full " src="{{ asset('frontend/images/pp-3.jpg') }}" alt="">
                </div>
                <div class="bg-white p-2 py-2 col-span-6">
                    <div class=" flex justify-between">
                        <button class="bg-yellow-400 rounded-md p-2  ">25 <p>SEP,2018</p></button>
                        <div>
                            <p>Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>
                        <p>Speaker:Alexander</p>
                    </div>
                </div>
            </div>
            {{-- card-3 --}}
            <div class=" grid md:grid-cols-10  ">
                <div class="col-span-4">
                    <img class="h-full " src="{{ asset('frontend/images/pp-3.jpg') }}" alt="">
                </div>
                <div class="bg-white p-2 py-2 col-span-6">
                    <div class=" flex justify-between">
                        <button class="bg-yellow-400 rounded-md p-2  ">25 <p>SEP,2018</p></button>
                        <div>
                            <p>Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>
                        <p>Speaker:Alexander</p>
                    </div>
                </div>
            </div>
            {{-- card-4 --}}
            <div class=" grid md:grid-cols-10  ">
                <div class="col-span-4">
                    <img class="h-full " src="{{ asset('frontend/images/pp-3.jpg') }}" alt="">
                </div>
                <div class="bg-white p-2 py-2 col-span-6">
                    <div class=" flex justify-between">
                        <button class="bg-yellow-400 rounded-md p-2  ">25 <p>SEP,2018</p></button>
                        <div>
                            <p>Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>
                        <p>Speaker:Alexander</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-white pt-6 text-center">view all events <i class="ri-arrow-right-line"></i></p>
    </section>

    {{-- what our students --}}
    <section class="container px-12 py-10">
        <div class="text-center">
            <p class="text-xl text-center font-bold">What Our Students</p>
            <p class="text-lg text-center"> Our Latest Course What Our Student Our Latest Course </p>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-10">
                {{-- Card-1 --}}
                <div class=" swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p>Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>
                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                </div>

                {{-- Card-2 --}}
                <div class="swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p>Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>

                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                </div>

                {{-- Card-3 --}}
                <div class="swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p>Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>

                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                </div>

                {{-- Card-4 --}}
                <div class="swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p>Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>

                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                    <i class="ri-star-s-fill text-yellow-400"></i>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    {{-- latest news --}}
    <section class="container px-12 bg-gray-300 py-10 ">
        <div class="text-center">
            <p class="text-xl text-center font-bold">Latest News</p>
            <p class="text-lg text-center"> Our Latest news What Our Student Our Latest news </p>
        </div>
        {{-- cards --}}
        <div class="grid md:grid-cols-3 gap-8 pt-5  ">

            {{-- card-1 --}}
            <div class="bg-white  shadow-md">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-2 py-2">
                    <p class="text-gray-500 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>


            {{-- card-2 --}}
            <div class="bg-white shadow-md ">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-2 py-2">
                    <p class="text-gray-500 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>

            {{-- card-3 --}}
            <div class="bg-white shadow-md ">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-2 py-2">
                    <p class="text-gray-500 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </section>

{{-- Marqueee --}}
    <section class="marquee grid grid-cols-5 container">
      <img src="{{asset('frontend/images/rotary.png')}}" alt="">
      <img src="{{asset('frontend/images/rotary.png')}}" alt="">
      <img src="{{asset('frontend/images/rotary.png')}}" alt="">
      <img src="{{asset('frontend/images/rotary.png')}}" alt="">
      <img src="{{asset('frontend/images/rotary.png')}}" alt="">    
    </section>
  

@endsection
