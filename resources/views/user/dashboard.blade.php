<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Academy</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    <livewire:user.navbar-user /> 

    <!-- begin::My Course -->
    <div class="p-10 bg-zinc-800">
        <div class="flex flex-row bg-yellow-300 justify-between items-center rounded-lg p-3">
            <h1 class="font-semibold">My Course</h1>
            <a href="/addCourse" class="bg-zinc-800 text-yellow-300 items-center rounded-lg p-2">
                <i class="las la-plus text-yellow-300"></i>
                Add Course
            </a>
        </div>
        <div class="grid grid-cols-2 gap-5 py-5">
            <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                <div class="flex flex-col">
                    <span class="text-white font-semibold">Nutrisi Dasar I</span>
                    <span class="text-white">Dr. Phaidon Toruan MM</span>                 
                </div>
                <i class="las la-angle-right text-white"></i>
            </a>
            <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                <div class="flex flex-col">
                    <span class="text-white font-semibold">Anatomi Dasar I</span>
                    <span class="text-white">Dr. Tanjung Subrata, MRepro, ABAARM</span>                 
                </div>
                <i class="las la-angle-right text-white"></i>
            </a>
            <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                <div class="flex flex-col">
                    <span class="text-white font-semibold">Nutrisi Dasar II</span>
                    <span class="text-white">Dr. Phaidon Toruan MM</span>                 
                </div>
                <i class="las la-angle-right text-white"></i>
            </a>
            <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                <div class="flex flex-col">
                    <span class="text-white font-semibold">Anatomi Dasar II</span>
                    <span class="text-white">Dr. Tanjung Subrata, MRepro, ABAARM</span>                 
                </div>
                <i class="las la-angle-right text-white"></i>
            </a>
        </div>
        <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
            <div class="flex flex-col">
                <span class="text-white font-semibold">Level III</span>       
            </div>
            <i class="las la-angle-right text-white"></i>
        </a>
    </div>
    <!-- end::My Course -->

    <!-- begin::Schedule -->
    <div class="p-10 bg-zinc-800">
        <div class="bg-yellow-300 rounded-lg p-3">
            <h1 class="font-semibold">Today Schedule</h1>
        </div>
        <div class="py-5 px-3">
            <h1 class="text-white font-semibold">Anatomi Dasar I</h1>
            <h1 class="text-white">Monday, 16 May 2022 (09:00 - 12:00)</h1>  
        </div>
    </div>
    <!-- end::Schedule -->
    
    <!-- begin::Schedule -->
    <div class="p-10 bg-zinc-800">
        <div class="bg-yellow-300 rounded-lg p-3">
            <h1 class="font-semibold">Score</h1>
        </div>
        <div class="py-5 px-3 flex flex-row justify-between">
            <h1 class="text-white font-semibold">Anatomi Dasar I</h1>
            <h1 class="text-white font-semibold">90.5</h1>  
        </div>
    </div>
    <!-- end::Schedule -->




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>