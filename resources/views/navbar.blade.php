
<!---second navigation bar ---->
<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700" style="background-color: #054979">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto px-4 py-2.5">
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 ml-3 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col justify-item-center font-medium p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm  md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                style="background-color: #054979">
                <li class="w-52 text-center ">
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-white  rounded hover:bg-[#005a92]"
                        style="font-family: 'trebuchet MS', sans-serif"
                        aria-current="page">
                        Home
                    </a>
                </li>
                <li class="w-52 text-center">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    style="font-family: 'trebuchet MS', sans-serif"
                        class="flex items-center justify-center w-full py-2 pl-3 pr-4  text-white rounded hover:bg-[#005a92]">
                        Menu

                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">

                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Main
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Kota
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Burgers
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Sandwhiches
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Burgers
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Sides/Extras
                                    </a>
                                </li>
                            </ul>
                            <!--- <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                out</a>
                        </div>--->
                        </div>
                </li>
                <li class="w-52 text-center">
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-white rounded hover:bg-[#005a92]"
                        style="font-family: 'trebuchet MS', sans-serif">
                        Find Us
                    </a>
                </li>
                <li class="w-52 text-center">
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-white rounded hover:bg-[#005a92]"
                        style="font-family: 'trebuchet MS', sans-serif">
                        Explore
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
