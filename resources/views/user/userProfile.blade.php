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
    
    <div class="bg-zinc-800 p-10">
        <div class="flex flex-row py-5 items-center">
            <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a> 
            <i class="las la-angle-right text-white text-sm px-1"></i>
            <a href="/userProfile" class="text-white text-sm hover:text-yellow-300">My Profile</a> 
        </div>
        <div>
            <div class="flex flex-row bg-yellow-300 justify-between items-center rounded-t-lg p-3">
                <h1 class="font-semibold">My Profile</h1>
                <a href="/addCourse" class="bg-zinc-800 text-yellow-300 items-center rounded-lg p-2">
                    <i class="las la-user-edit text-yellow-300"></i>
                    Edit Profile
                </a>
            </div>
            <div class="bg-black">
                <div class="flex flex-col md:flex-row justify-between p-5">
                    <div class="flex flex-col md:flex-row">
                        <img src="assets/img/Choaches/Tanjung.png" class="w-52 self-center md:justify-items-start" alt="">
                        <div class="flex flex-col py-5 md:py-0 md:px-5">
                            <h1 class="text-xl text-white font-bold">dr Tanjung Subrata, MRepro, ABAARM</h1>
                            <h1 class="text-lg text-gray-500 font-semibold flex items-center py-3">
                                <i class="las la-envelope text-lg pr-2"></i>
                                tanjung.subrata@gmail.com
                            </h1>
                            <h1 class="text-lg text-gray-500 font-semibold flex items-center">
                                <i class="las la-phone text-lg pr-2"></i>
                                08175731999
                            </h1>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-row items-center gap-2">
                            <i class="las la-user-shield text-gray-500"></i>
                            <a href="#" class="text-gray-500 underline">Change Password</a>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Gender</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">Male</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Age</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">27</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Work</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">Powerkerto Wahyu Keprabon</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Work </h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">S1 Teknik Informatika, IT Telkom Purwokerto</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Identity Number (NIK)</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">123456789009876654</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-2">
                        <h1 class="col-span-3 md:col-span-2 text-white">Address</h1>
                        <h1 class="col-span-1 text-white">:</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">Jl. Sana Gang Sini No.007, Purwokerto Tengah, Kabupaten Banyumas, Jawa Tengah, Indonesia</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>