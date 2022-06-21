<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    <livewire:user.navbar-user />

    <div class="bg-zinc-800 py-10 h-screen">
        <div class="flex flex-row py-5 items-center container mx-auto">
            <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
            <i class="las la-angle-right text-white text-sm px-1"></i>
            <a href="/userProfile" class="text-white text-sm hover:text-yellow-300">My Profile</a>
        </div>
        <div class="container mx-auto">
            <div class="flex flex-row bg-yellow-300 justify-between items-center rounded-t-lg p-3">
                <h1 class="font-semibold">My Profile</h1>
                <a href="/editUser" class="bg-zinc-800 text-yellow-300 items-center rounded-lg p-2">
                    <i class="las la-user-edit text-yellow-300"></i>
                    Edit Profile
                </a>
            </div>
            <div class="bg-black">
                <div class="flex flex-col md:flex-row justify-between p-5">
                    <div class="flex flex-col md:flex-row">
                        <img src="{{asset(Auth::user()->image)}}" class="w-52 self-center md:justify-items-start" alt="">
                        <div class="flex flex-col py-5 md:py-0 md:px-5">
                            <h1 class="text-xl text-white font-bold">{{Auth::user()->name ?? null}}</h1>
                            <h1 class="text-lg text-gray-500 font-semibold flex items-center py-3">
                                <i class="las la-envelope text-lg pr-2"></i>
                                {{Auth::user()->email ?? null}}
                            </h1>
                            <h1 class="text-lg text-gray-500 font-semibold flex items-center">
                                <i class="las la-phone text-lg pr-2"></i>
                                {{Auth::user()->phone ?? null}}
                            </h1>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-row items-center gap-2">
                            <i class="las la-user-shield text-gray-500"></i>
                            <button type="button" data-modal-toggle="changePWD" class="text-gray-500 underline">Change Password</a>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Gender</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{Auth::user()->gender ?? null}}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Age</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{Auth::user()->age ?? null}}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Work</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{Auth::user()->work ?? null}}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Last Education </h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{Auth::user()->education ?? null}}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Identity Number (NIK)</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{Auth::user()->nik ?? null}}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Address</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{Auth::user()->address ?? null}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin::modal -->
    <!-- begin::modalChangePWD -->
    <div id="changePWD" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full">
        <div class="relative p-4 w-full max-w-sm  h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-zinc-800 rounded-xl shadow">
                <!-- Modal body -->
                <div class="rounded-r-xl">
                    <div class="flex flex-col">
                        <div class="self-end p-2">
                            <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="changePWD">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        <div class="p-5">
                            <h1 class="text-4xl text-white font-bold py-2">Change Password</h1>
                            <h1 class="text-white text-sm font-light">Input your new password</h1>
                        </div>
                        <div class="p-5">
                            <form action="{{route('newpassword')}}" method="POST">
                                @csrf
                                <div class="mb-6">
                                    <div class="py-2" x-data="{ show: true }">
                                        <div class="relative">
                                            <input name="current_password" placeholder="Current Password" :type="show ? 'password' : 'text'" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white  focus:border-gray-600 focus:outline-none">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                    </path>
                                                </svg>

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                                    <path fill="currentColor"
                                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="py-2" x-data="{ show: true }">
                                        <div class="relative">
                                            <input name="new_password" placeholder="New Password" :type="show ? 'password' : 'text'" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white  focus:border-gray-600 focus:outline-none">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                    </path>
                                                </svg>

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                                    <path fill="currentColor"
                                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full px-5 py-2.5 text-center">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modalChangePWD -->
    <!-- end::modal -->

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</body>
</html>
