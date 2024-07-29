    {{-- top-header --}}
    <section class="sm:flex hidden  justify-between p-2 w-full bg-blue-900 space-y-2  px-12">
        <div class="flex space-x-2">
            <div class="flex space-x-2">
                <i class="ri-customer-service-fill text-yellow-400"></i>
                <p class="text-white">+977 987654321</p>
            </div>
            <p class="text-white">|</p>

            <div class="flex space-x-2 ">
                <i class="ri-mail-fill text-yellow-400"></i>
                <P class="text-white">mmmmm@gmail.com</P>
            </div>
        </div>
        <div class="flex space-x-4 text-yellow-400">
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
    <nav class="bg-white p-2  items-center flex justify-between  mx-auto px-12">
        <div class="flex justify-between w-full">
            <div class="flex gap-2 items-center"> <i class="ri-book-open-fill text-yellow-400 text-4xl"></i>
                <p class="text-blue-900 text-2xl font-extrabold">Sikkha</p>
            </div>
            <div class="flex lg:hidden justify-between bg-white  rounded-xl top-3 pt-1">
                <img class="xl:w-[120px] w-20 md:w-24" src="./images/logo.png" alt="" />
                <div class="menu lg:hidden" onclick="toggleSidebar()">
                    <a href="#" class="nav-toggle hover-link">
                        <i class="ri-menu-line" id="icon"></i></a>
                </div>
            </div>
        </div>
        <div class="lg:flex space-x-5 hidden">
            <a class="text-blue-900" href="#">Home</a>
            <a class="text-blue-900" href="#">Pages</a>
            <a class="text-blue-900" href={{ route('elements') }}>Elements</a>
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

            <div class="flex gap-2 items-center"> <i class="ri-book-open-fill text-yellow-400 text-4xl"></i>
                <p class="text-blue-900 text-2xl font-extrabold">Sikkha</p>
            </div>
            <a class="text-blue-900" href="#">Home</a>
            <a class="text-blue-900" href="#">Pages</a>
            <a class="text-blue-900" href="#">Elements</a>
            <a class="text-blue-900" href="#">Courses</a>
            <a class="text-blue-900" href="#">News</a>
            <a class="text-blue-900" href="#">Contact</a>

        </nav>


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
