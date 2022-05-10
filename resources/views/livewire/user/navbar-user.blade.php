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
                    <h1 class="font-bold text-white text-right">dr Tanjung Subrata</h1>
                    <h1 class="text-sm font-semibold text-gray-500 text-right">tanjung.subrata@gmail.com</h1>
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
                        <a href="/userProfile" class="block py-2 px-4 text-sm text-white hover:bg-gray-100 text-center">My Profile</a>
                    </li>
                    <li>
                        <button type="button" class="block py-2 px-4 text-sm text-white hover:bg-gray-100 w-full" data-modal-toggle="logout">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- begin::modal -->
<!-- begin::modalLogout -->

<div id="logout" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="logout">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
            </button>
            <div class="p-6 text-center">
                <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure you want to logout?</h3>
                <button data-modal-toggle="logout" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </button>
                <button data-modal-toggle="logout" type="button" class="text-white bg-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- end::modalLogout -->
<!-- end::modal -->