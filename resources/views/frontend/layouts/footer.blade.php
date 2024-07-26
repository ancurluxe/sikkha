<footer class="relative">
    <section class="grid md:grid-cols-4 space-x-8 space-y-8 bg-blue-900 container px-12 py-12 pt-28">
        <div class="text-white flex flex-col">
            <img class="py-5 w-32" src="{{ asset('frontend/images/logo.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repellat eaque, deserunt
                exercitationem,
                doloremque laborum. Sequi.</p>
            <div class=" pl-5 py-5">
                <p class="font-bold">Follow Us :</p>
                <i class="ri-facebook-circle-fill"></i>
                <i class="ri-twitter-fill"></i>
                <i class="ri-pinterest-fill"></i>
                <i class="ri-instagram-fill"></i>
            </div>
        </div>

        {{-- Quick links --}}
        <div class=" flex flex-col lg:text-center leading-9">
            <p class="text-lg font-bold  text-yellow-500 ">Quick links</p>
            <a class="text-white" href="">Home</a>
            <a class="text-white" href="">About</a>
            <a class="text-white" href="">Contact</a>
            <a class="text-white" href="">Privacy Policy</a>
            <a class="text-white" href="">Recent posts</a>
        </div>
        {{--  inks --}}
        <div class=" flex flex-col lg:text-center  leading-9">
            <p class="text-lg font-bold  text-yellow-500 ">Text</p>
            <a class="text-white" href="">Condition</a>
            <a class="text-white" href="">Consultation</a>
            <a class="text-white" href="">Our services</a>
            <a class="text-white" href="">Contact Us</a>
            <a class="text-white" href="">Get a Quote</a>
            <a class="text-white" href="">Who We Are</a>
        </div>
        {{-- Recent posts --}}
        <div class=" space-y-4">
            <p class="text-lg font-bold  text-yellow-500 ">Recent Posts</p>

            <div class="flex gap-3">
                <img class="w-20" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                <div>
                    <p class="text-white">Lorem ipsum dolor, sit amets.</p>
                    <div class="flex gap-1">
                        <i class="ri-time-fill text-yellow-500"></i>
                        <p class="text-white">5 May,2024 </p>
                    </div>

                </div>
            </div>
            <div class=" ">
                <div class="flex gap-3">
                    <img class="w-20" src="{{ asset('frontend/images/main.jpg') }}" alt="">
                    <div>
                        <p class="text-white">Lorem ipsum dolor, sit amets.</p>
                        <div class="flex gap-1">
                            <i class="ri-time-fill text-yellow-500"></i>
                            <p class="text-white">5 May,2024 </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Contact us --}}
        <div class=" flex flex-col  leading-9">
            <p class="text-lg font-bold  text-yellow-500 ">Contact Us </p>
            <div class="flex gap-1">
                <i class="ri-headphone-fill text-yellow-500"></i>
                <p class="text-white"> +977 9887665334</p>
            </div>
            <div class="flex gap-1">
                <i class="ri-map-pin-fill text-yellow-500"></i>
                <p class="text-white"> 123 floor New Road</p>
            </div>
            <div class="flex gap-1">
                <i class="ri-mail-fill text-yellow-500"></i>
                <p class="text-white"> Support@gmail.com</p>
            </div>

            <div class="pt-2 pl-4">
                <p class="text-lg font-bold text-white">Opening Hours</p>
                <p class="text-white">Sun-Sat : 10:00 AM - 05:00 PM</p>
            </div>
        </div>
    </section>


    <div class="bg-yellow-500 flex justify-center  gap-10 p-8  absolute -top-10  container mx-auto">
        <div class="text-center">
        <p class="text-xl font-bold">SUBSCRIBE</p>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptates sim</p>
        </div>
        <div>
            <input class="rounded-xl" type="email" placeholder="enter email" id="">
        </div>
        
    </div>
</footer>
