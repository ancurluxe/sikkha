@extends('frontend.layouts.master')

@section('content')
    <!--  banner -->
    <section class="relative">
        <img src="{{ asset('frontend/images/banner.jpg') }}" alt="">
        <div class="absolute md:pt-14 lg:pt-0 top-4 lg:top-40 sm:px-12 px-6 space-y-2 sm:space-y-4 md:w-[800px] w-96">
            <p class=" text-xl lg:text-6xl font-bold text-pink-500">Admission Going On Edura University</p>
            <p class="text-6xl font-extrabold text-pink-500"></p>
            <p class="text-white">Lorem ab at explicabo
                eum reprehenderitkjsiuha jsjadhauid jdsjkadiu
                e.</p>
            <button class="bg-yellow-500 relative md:w-32 sm:h-10 sm:font-bold sm:text-md px-2 ">ADMIT NOW<div
                    class="md:w-32 w-24 h-6 sm:h-10 absolute -right-2 top-2  outline outline-yellow-500"></div>
            </button>
        </div>

    </section>


    {{-- welcome to our sikkha --}}
    <section class="container px-12">
        <div class="flex justify-center align-center">
            <div class="py-10 grid md:grid-cols-2 items-center ">
                <div class="space-y-4">
                    <p class="font-bold text-2xl ">Welcome To Our Sikkha</p>
                    <p class="text-wrap  leading-6 text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Alias,
                        dolores a quaerat error corrupti doloremque
                        incidunt iure repudiandae ipsa officia, optio enim ex voluptate! Eum ipsam reiciendis odio cumque
                        dignissimos? Lorem ipsum dolor sit amet consecteturum tenetur, minus, dolor modi? Molestias nam
                        ducimus, dolore architecto nulla dolorem.</p>
                    <button class="bg-yellow-500 relative w-32 h-10 font-bold text-md ">ADMIT NOW<div
                            class="w-32 h-10 absolute -right-2 top-2  outline outline-yellow-500"></div></button>
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
            <div
                class="shadow-lg  border-b-black border-l-4 border-b-2 border-l-yellow-500  px-2 p-3 outline outline-gray-200">
                <div class="flex justify-between ">
                    <p class="text-lg font-semibold">Scholorship Facility</p>
                    <p class="text-gray-500 font-bold">01</p>
                </div>
                <div class="">
                    <p class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ?.</p>
                </div>
            </div>

            {{-- cards-2 --}}
            <div
                class="shadow-md border-b-2  border-b-black border-l-4 border-yellow-400 px-2  p-3 outline outline-gray-200">
                <div class="flex justify-between">
                    <p class="text-lg font-semibold">Scholorship Facility</p>
                    <p class="text-gray-500 font-bold">01</p>
                </div>
                <div class="">
                    <p class="line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ?.</p>
                </div>
            </div>

            {{-- cards-3 --}}
            <div
                class="shadow-md border-b-2 border-b-black border-l-4 border-yellow-400 px-2  p-3 outline outline-gray-200">
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
        <div class="grid md:grid-cols-2 gap-8  ">

            {{-- card-1 --}}
            <div class="bg-white ">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/course (1).jpg') }}" alt="">
                    <img class="w-24 rounded-full absolute right-1 -bottom-7 outline outline-white outline-4"
                        src="{{ asset('frontend/images/tauko.png') }}" alt="">
                </div>

                <div class="px-2  pt-10">
                    <button class="font-bold text-lg bg-yellow-300 px-2 my-2">BUSINESS</button>
                    <p class="text-blue-900 my-2 text-xl font-bold ">Business Studies</p>
                    <p class="line-clamp-3 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
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
                    <img class="w-full" src="{{ asset('frontend/images/course (2).jpg') }}" alt="">
                    <img class="w-20 rounded-full absolute right-4 -bottom-7 "
                        src="{{ asset('frontend/images/tauko.png') }}" alt="">
                </div>
                <div class="px-2 pt-10 ">

                    <button class="font-bold text-lg bg-yellow-300 px-2 my-2">BUSINESS</button>
                    <p class="text-blue-900 my-2 text-lg font-bold ">Computer Engineerig</p>
                    <p class="line-clamp-3 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur
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
                    <img class="w-full" src="{{ asset('frontend/images/course (2).jpg') }}" alt="">
                    <img class="w-20 rounded-full absolute right-4 -bottom-7 "
                        src="{{ asset('frontend/images/tauko.png') }}" alt="">
                </div>

                <div class="px-2 pt-10">
                    <button class="font-bold text-lg bg-yellow-300 px-2 my-2">BUSINESS</button>
                    <p class="text-blue-900 my-2 text-xl font-bold ">English for tomrrow</p>
                    <p class="line-clamp-3 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur
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
                <div class=" w-full p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/pp1.jpg') }}" alt="">
                    <div class=" text-center">
                        <p class="font-bold text-lg ">Harish Pandey</p>
                        <p class="text-gray-600 text- ">Senior Developer</p>
                    </div>

                    <div class="outline outline-yellow-400 mt-2 "></div>
                </div>
                {{-- card-2 --}}
                <div class="  p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/pp2.jpg') }}" alt="">
                    <div>
                        <p class="font-bold text-center text-lg px-2">Harish Pandey</p>
                        <p class="text-gray-600 text-center px-2">Senior Developer</p>
                    </div>

                    <div class="outline outline-yellow-400 mt-2 "></div>
                </div>
                {{-- card-3 --}}
                <div class="  p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/teammember3.jpg') }}" alt="">
                    <div>
                        <p class="font-bold text-center px-2 text-lg">Harish Pandey</p>
                        <p class="text-gray-600 text-center px-2">Senior Developer</p>
                    </div>

                    <div class="outline outline-yellow-400 mt-2 "></div>
                </div>
                {{-- card-4 --}}
                <div class=" p-2">
                    <img class=" rounded-md" src="{{ asset('frontend/images/teammember4.jpg') }}" alt="">
                    <div>
                        <p class="font-bold text-center px-2 text-lg">Harish Pandey</p>
                        <p class="text-gray-600 text-center px-2">Senior Developer</p>
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
        <div class="grid lg:grid-cols-2 space-x-4 space-y-4 ">
            {{-- card-1 --}}
            <div class=" grid md:grid-cols-10 shadow-lg rounded-lg ">
                <div class="col-span-4">
                    <img class="h-full w-full " src="{{ asset('frontend/images/events (1).png') }}" alt="">
                </div>
                <div class="bg-white  px-6 pt-12 col-span-6">
                    <div class=" flex gap-3">
                        <button class="bg-yellow-400 rounded-md p-2 px-4 font-bold ">25
                            <p class="font-normal">SEP,2018</p>
                        </button>
                        <div>
                            <p class="font-semibold">Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="py-2">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>

                    </div>
                    <div class="flex gap-1">
                        <p class="text-gray-600">Speaker:</p>
                        <p class="font-semibold"> Alexander</p>
                    </div>

                </div>
            </div>
            {{-- card-2 --}}
            <div class=" grid md:grid-cols-10 shadow-lg rounded-lg ">
                <div class="col-span-4">
                    <img class="h-full w-full " src="{{ asset('frontend/images/events (2).png') }}" alt="">
                </div>
                <div class="bg-white px-6 pt-10 col-span-6">
                    <div class=" flex gap-3">
                        <button class="bg-yellow-400 rounded-md p-2 px-4 font-bold ">25
                            <p class="font-normal">SEP,2018</p>
                        </button>
                        <div>
                            <p class="font-semibold">Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="py-2">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>

                    </div>
                    <div class="flex gap-1">
                        <p class="text-gray-600">Speaker:</p>
                        <p class="font-semibold"> Alexander</p>
                    </div>

                </div>
            </div>
            {{-- card-3 --}}
            <div class=" grid md:grid-cols-10 shadow-lg rounded ">
                <div class="col-span-4">
                    <img class="h-full w-full " src="{{ asset('frontend/images/events (3).png') }}" alt="">
                </div>
                <div class="bg-white px-6 pt-10 col-span-6">
                    <div class=" flex gap-3">
                        <button class="bg-yellow-400 rounded-md p-2 px-4 font-bold ">25
                            <p class="font-normal">SEP,2018</p>
                        </button>
                        <div>
                            <p class="font-semibold">Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="py-2">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>

                    </div>
                    <div class="flex gap-1">
                        <p class="text-gray-600">Speaker:</p>
                        <p class="font-semibold"> Alexander</p>
                    </div>

                </div>
            </div>
            {{-- card-4 --}}
            <div class=" grid md:grid-cols-10 shadow-lg rounded ">
                <div class="col-span-4">
                    <img class="h-full w-full " src="{{ asset('frontend/images/events (4).png') }}" alt="">
                </div>
                <div class="bg-white px-6 pt-10 col-span-6">
                    <div class=" flex gap-3">
                        <button class="bg-yellow-400 rounded-md p-2 px-4 font-bold ">25
                            <p class="font-normal">SEP,2018</p>
                        </button>
                        <div>
                            <p class="font-semibold">Business Conferences </p>
                            <i class="ri-time-fill"> 05:30 AM - 10:30AM </i>
                        </div>
                    </div>
                    <div class="py-2">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ?</p>

                    </div>
                    <div class="flex gap-1">
                        <p class="text-gray-600">Speaker:</p>
                        <p class="font-semibold"> Alexander</p>
                    </div>

                </div>
            </div>
        </div>
        <p class="text-white pt-6 text-center text-lg">VIEW ALL EVENTS <i class="ri-arrow-right-line"></i></p>
    </section>

    {{-- what our students --}}
    <section class="container px-12 pb-10">
        <div class="text-center">
            <p class="text-3xl text-center font-bold">What Our Students</p>
            <p class="text-lg text-center text-gray-600"> Our Latest Course What Our Student Our Latest Course </p>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-10">
                {{-- Card-1 --}}
                <div class=" swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p class="text-blue-900 font-bold text-lg">Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>
                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>

                </div>

                {{-- Card-2 --}}
                <div class="swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p class="text-blue-900 font-bold text-lg">Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>

                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>


                </div>

                {{-- Card-3 --}}
                <div class="swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p class="text-blue-900 font-bold text-lg">Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>

                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>
                    <i class="ri-star-s-fill text-yellow-400 text-xl"></i>

                </div>

                {{-- Card-4 --}}
                <div class="swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p class="text-blue-900 font-bold text-lg">Ashmita Dhakal</p>
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
                {{-- Card-5 --}}
                <div class="swiper-slide shadow-md px-4 space-y-4">
                    <div class=" flex gap-4 ">
                        <img class="rounded-full w-12" src="{{ asset('frontend/images/pp-4.jpg') }}" alt="">
                        <div>
                            <p class="text-blue-900 font-bold text-lg">Ashmita Dhakal</p>
                            <p class="text-gray-500">DEEDEEEE</p>
                        </div>
                    </div>

                    <p class="">Lorem ipsum dolor, slibero placeat soluta beatae assumenda fuga architecto, id
                        molestias
                        enim sint
                        facilis!</p>
                    <i class="ri-star-s-fill text-yellow-400 "></i>
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
                    <img class="w-full" src="{{ asset('frontend/images/blog_thumb_1.jpg') }}" alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-4 py-2">
                    <p class="text-gray-400 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>


            {{-- card-2 --}}
            <div class="bg-white shadow-md ">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/blog_thumb_2.jpg') }}" alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-4 py-2">
                    <p class="text-gray-400 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>

            {{-- card-3 --}}
            <div class="bg-white shadow-md ">
                <div class="relative ">
                    <img class="w-full" src="{{ asset('frontend/images/blog_thumb_3.jpg') }}" alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-4 py-2">
                    <p class="text-gray-400 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Marqueee --}}
    <section class="marquee grid grid-cols-5 container p-20">
        <img src="{{ asset('frontend/images/rotary.png') }}" alt="">
        <img src="{{ asset('frontend/images/rotary.png') }}" alt="">
        <img src="{{ asset('frontend/images/rotary.png') }}" alt="">
        <img src="{{ asset('frontend/images/rotary.png') }}" alt="">
        <img src="{{ asset('frontend/images/rotary.png') }}" alt="">
    </section>
@endsection
