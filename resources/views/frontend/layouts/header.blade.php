<header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-3">
    <nav class=" max-w-[85rem] sm:w-full px-4 sm:flex sm:items-center sm:justify-between sm:mx-auto  ">
        <div class="flex items-center justify-between bg-red-500 w-full">

            <img class="flex-none text-xl font-semibold focus:outline-none focus:opacity-80 sm:w-40 w-24"
                src="{{ asset('frontend/images/logo.png') }}" alt="">

            <div class="lg:hidden">
                <button type="button "
                    class=" bg-pink-600 hs-collapse-toggle relative size-7 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
        </div>

        <div id="hs-navbar-example"
            class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow lg:block bg-yellow-400 "
            aria-labelledby="hs-navbar-example-collapse ">
            <div
                class=" md:gap-5 hidden md:flex sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5 hover:text-[#ee3e08] ">
                <a class="md:font-semibold text-base text-black focus:outline-none" href="#"
                    aria-current="page">Home</a>
                <a class="md:font-semibold text-base text-black hover:text-[#ee3e08]  focus:outline-none focus:text-gray-400"
                    href="#">About Us</a>

                <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] ">
                    <button id="hs-navbar-example-dropdown" type="button"
                        class="hs-dropdown-toggle flex items-center w-full md:font-semibold text-base text-black hover:text-[#ee3e08] focus:outline-none focus:text-gray-400 "
                        aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                        Services
                        <svg class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:rotate-0 duration-300 ms-1 shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] ease-in-out duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-1 space-y-1 sm: before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5 hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="hs-navbar-example-dropdown">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="#">
                            About
                        </a>
                        <div
                            class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] relative">
                            <button id="hs-navbar-example-dropdown-sub" type="button"
                                class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg py-2 px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                Sub Menu
                                <svg class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:-rotate-90 sm:-rotate-90 duration-300 ms-2 shrink-0 size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] ease-in-out duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg sm: before:absolute sm:border before:-end-5 before:top-0 before:h-full before:w-5 sm:!mx-[10px] top-0 end-full"
                                role="menu" aria-orientation="vertical"
                                aria-labelledby="hs-navbar-example-dropdown-sub">
                                <div class="p-1 space-y-1">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                        href="#">
                                        About
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                        href="#">
                                        Downloads
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                        href="#">
                                        Team Account
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="#">
                            Downloads
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-[] focus:outline-none focus:bg-gray-100"
                            href="#">
                            Team Account
                        </a>
                    </div>
                </div>


                <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] ">
                    <button id="hs-navbar-example-dropdown" type="button"
                        class="hs-dropdown-toggle flex items-center w-full md:font-semibold text-base text-black hover:text-[#ee3e08] focus:outline-none focus:text-gray-400 "
                        aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                        Courses
                        <svg class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:rotate-0 duration-300 ms-1 shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] ease-in-out duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-1 space-y-1 sm: before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5 hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="hs-navbar-example-dropdown">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="#">
                            About
                        </a>
                        <div
                            class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] relative">
                            <button id="hs-navbar-example-dropdown-sub" type="button"
                                class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg py-2 px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                Sub Menu
                                <svg class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:-rotate-90 sm:-rotate-90 duration-300 ms-2 shrink-0 size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] ease-in-out duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg sm: before:absolute sm:border before:-end-5 before:top-0 before:h-full before:w-5 sm:!mx-[10px] top-0 end-full"
                                role="menu" aria-orientation="vertical"
                                aria-labelledby="hs-navbar-example-dropdown-sub">
                                <div class="p-1 space-y-1">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800  hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                        href="#">
                                        About
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                        href="#">
                                        Downloads
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                        href="#">
                                        Team Account
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="#">
                            Downloads
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="#">
                            Team Account
                        </a>
                    </div>
                </div>


                <a class="md:font-semibold text-base text-black focus:outline-none focus:text-gray-400 hover:text-[#ee3e08]"
                    href="#">Scholorship</a>
                <a class="md:font-semibold text-base text-black hover:text-[#ee3e08] focus:outline-none focus:text-gray-400"
                    href="#">Blogs</a>
                <a class="md:font-semibold text-base text-black hover:text-[#ee3e08] focus:outline-none focus:text-gray-400"
                    href="#">Success Stories</a>

                <button class="bg-[#f51D05] text-white p-2 md:p-3 md:px-7 rounded-md  ">Contact Us</button>
            </div>
        </div>
    </nav>
</header>
