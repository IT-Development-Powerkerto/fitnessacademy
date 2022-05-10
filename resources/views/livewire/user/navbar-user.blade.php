<nav class="bg-zinc-800 px-2 sm:px-4 py-2.5 dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/dashboard" class="flex items-center">
            <img src="assets/img/logo.png" class="mr-3 h-6 sm:h-9" alt="Fitness Plus Academy" />
            <span class="self-center text-sm font-semibold">
                <h1 class="text-white">FITNESS PLUS</h1>
                <h1 class="text-white">ACADEMY</h1>
            </span>
        </a>
        <div class="flex items-center md:order-2">
            <div class="flex flex-row">
                <div class="flex flex-col px-3">
                    <h1 class="font-bold text-white text-right">Zall</h1>
                    <h1 class="text-sm font-semibold text-gray-500 text-right">zall@zall.com</h1>
                </div>
                <button type="button" class="flex mr-3 text-sm rounded md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                    <img class="w-11 h-11 rounded" src="assets/img/Choaches/Tanjung.png" alt="user photo">
                </button>
            </div>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 text-base list-none w-44 rounded divide-y divide-gray-100 shadow" id="dropdown">
                <div class="py-3 px-4 bg-yellow-300 ">
                    <span class="block text-sm text-black font-semibold">Profile</span>
                </div>
                <ul class="py-1 bg-black" aria-labelledby="dropdown">
                    <li>
                        <a href="/userProfile" class="block py-2 px-4 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>