<nav class="border-b border-gray-600 px-2 sm:px-4 py-3 bg-zinc-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto px-10">
        <a href="/" class="flex items-center">
        <img src="assets/img/logo.png" class="mr-3 h-6 sm:h-9" alt="Fitness Plus Academy" />
            <span class="self-center text-sm font-semibold">
                <h1 class="text-white">FITNESS PLUS</h1>
                <h1 class="text-white">ACADEMY</h1>
            </span>
        </a>
        <div class="flex md:order-2">
            <button type="button" class="text-white bg-gray-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0" data-modal-toggle="login">Login</button>
            <button data-collapse-toggle="mobile-menu-4" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="#home" class="block py-2 pr-4 pl-3 text-white border-gray-100 hover:bg-gray-200 md:hover:bg-transparent hover:text-yellow-200 md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#about" class="block py-2 pr-4 pl-3 text-white border-gray-100 hover:bg-gray-200 md:hover:bg-transparent hover:text-yellow-200 md:p-0">About Us</a>
                </li>
                <li>
                    <a href="#course" class="block py-2 pr-4 pl-3 text-white border-gray-100 hover:bg-gray-200 md:hover:bg-transparent hover:text-yellow-200 md:p-0">Course</a>
                </li>
                <li>
                    <a href="#coaches" class="block py-2 pr-4 pl-3 text-white border-gray-100 hover:bg-gray-200 md:hover:bg-transparent hover:text-yellow-200 md:p-0">Coaches</a>
                </li>
                <li>
                    <a href="#gallery" class="block py-2 pr-4 pl-3 text-white border-gray-100 hover:bg-gray-200 md:hover:bg-transparent hover:text-yellow-200 md:p-0">Gallery</a>
                </li>
                <li>
                    <a href="#contact" class="block py-2 pr-4 pl-3 text-white border-gray-100 hover:bg-gray-200 md:hover:bg-transparent hover:text-yellow-200 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- begin::modal -->
    <!-- begin::modalLogin -->
    <div id="login" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full">
        <div class="relative p-4 w-full max-w-sm md:max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-zinc-800 rounded-xl shadow">
                <!-- Modal body -->
                <div class="flex flex-col md:flex-row rounded-r-xl">
                    <img src="assets/img/login.png" class="rounded-l-lg hidden md:block" alt="">
                    <div class="flex flex-col md:w-96 first-letter:md:w-96">
                        <div class="self-end p-2">
                            <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="login">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        <div class="p-5">
                            <h1 class="text-4xl text-white font-bold py-2">Login</h1>
                            <h1 class="text-white text-sm font-light">Input your email and password</h1>
                        </div>
                        <div class="p-5">
                            <form action="{{ route('login.login') }}" method="POST">
                                @csrf
                                <div class="mb-6">
                                    <input type="email" id="email" name="email" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                                </div>
                                <div class="mb-6">
                                    <input type="password" name="password" id="password" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                                </div>
                                <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full px-5 py-2.5 text-center">Submit</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                        <div class="flex flex-col">
                            <button type="button" class="text-sm text-center text-white underline p-5 hover:text-blue-500" data-modal-toggle="ForgetPWD">Forget Password?</button>
                            <div class="flex flex-col py-3">
                                <h1 class="text-sm text-center text-white">Don't have an account yet?</h1>
                                <a href="{{ route('register') }}"  class="text-sm text-center text-white underline hover:text-blue-500">Register Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modalLogin -->

    <!-- begin::modalForgetPWD -->
    <div id="ForgetPWD" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full">
        <div class="relative p-4 w-full max-w-sm md:max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-zinc-800 rounded-xl shadow">
                <!-- Modal body -->
                <div class="flex flex-col md:flex-row rounded-r-xl">
                    <img src="assets/img/login.png" class="rounded-l-lg hidden md:block" alt="">
                    <div class="flex flex-col md:w-96 first-letter:md:w-96">
                        <div class="self-end p-2">
                            <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="ForgetPWD">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        <div class="p-5">
                            <h1 class="text-4xl text-white font-bold py-2">Reset Password</h1>
                            <h1 class="text-white text-sm font-light">Input your email for reset your password</h1>
                        </div>
                        <div class="p-5">
                            <form action="{{ route("forgotPassword") }}" method="POST">
                                @csrf
                                <div class="mb-6">
                                    <input type="email" id="email" name="email" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                                </div>
                                <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full px-5 py-2.5 text-center">Send Password Reset Link</button>
                            </form>
                        </div>
                        <h1 class="font-light text-sm text-center p-5 text-white">We will send reset link password to your email. Please check your email box.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modalForgetPWD -->

<!-- end::modal -->
