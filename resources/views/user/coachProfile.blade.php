<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach Profile</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    <livewire:user.navbar-user />
    <div class="bg-zinc-800 py-10 h-screen">
        <div class="container mx-auto">
            <div class="flex flex-row py-2 items-center">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/coachProfile" class="text-white text-sm hover:text-yellow-300">Coach Profile</a>
            </div>
            <div class="flex justify-center py-5">
                <img src="assets/img/choaches/Tanjung.png" class="w-80 rounded" alt="">
            </div>
            <div class="py-10">
                <div class="grid grid-cols-12 mb-2">
                    <h1 class="col-span-1 text-white">Nama</h1>
                    <h1 class="col-span-1 text-white">:</h1>
                    <h1 class="col-span-10 text-white">{{ $trainer->user->name }}</h1>
                </div>
                <div class="grid grid-cols-12 mb-2">
                    <h1 class="col-span-1 text-white">Date of Birt</h1>
                    <h1 class="col-span-1 text-white">:</h1>
                    <h1 class="col-span-10 text-white">Denpasar, 29 Mei 1974</h1>
                </div>
                <div class="grid grid-cols-12 mb-2">
                    <h1 class="col-span-1 text-white">Email</h1>
                    <h1 class="col-span-1 text-white">:</h1>
                    <h1 class="col-span-10 text-white">{{ $trainer->user->email }}</h1>
                </div>
                <div class="grid grid-cols-12 mb-2">
                    <h1 class="col-span-1 text-white">Phone </h1>
                    <h1 class="col-span-1 text-white">:</h1>
                    <h1 class="col-span-10 text-white">{{ $trainer->user->phone }}</h1>
                </div>
                <div class="grid grid-cols-12 mb-2">
                    <h1 class="col-span-1 text-white">SINTA ID </h1>
                    <h1 class="col-span-1 text-white">:</h1>
                    <h1 class="col-span-10 text-white">{{ $trainer->sinta_id }}</h1>
                </div>
                <div class="grid grid-cols-12 mb-2">
                    <h1 class="col-span-1 text-white">Scopus ID </h1>
                    <h1 class="col-span-1 text-white">:</h1>
                    <h1 class="col-span-10 text-white">{{ $trainer->scopus_id }}</h1>
                </div>
            </div>
            <div class="py-10">
                <h1 class="text-white font-bold">Descriptions</h1>
                <div class="border border-b border-yellow-300 mt-2"></div>
                <div class="w-full">
                    <h1 class="text-white text-sm text-justify py-2 px-2 break-words">{{ $trainer->description}}</h1>
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
