<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Course</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>
    
    <livewire:trainer.navbar-trainer /> 

    <div class="bg-zinc-800 p-10">
        <div class="">
            <div class="flex flex-row py-2 items-center">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a> 
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/detailCourse" class="text-white text-sm hover:text-yellow-300">Detail Course</a> 
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/detailSession" class="text-white text-sm hover:text-yellow-300">Detail Session</a> 
            </div>
        </div>
        <div class="mt-5">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Session 1 - Pengenalan Anatomi Manusia</h1>
                <div class="flex md:flex-row flex-col items-end">
                    <a href="#" class="text-sm col-span-2 md:col-span-1 text-red-500 bg-zinc-800 hover:bg-zinc-600 p-2 w-32 md:w-auto rounded-lg md:mr-4">
                        <i class="las la-trash-alt"></i>
                        Delete Session
                    </a>
                    <a href="#" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-32 md:w-auto rounded-lg mt-2 md:mt-0">
                        <i class="las la-edit"></i>
                        Edit Session
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg">
                <h1 class="text-sm md:col-span-5 col-span-4 text-white pb-5">Sunday, 15 May 2022 (09:00 - 12:00)</h1>
                <div class="grid grid-cols-6 gap-3">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Online Learning</h1>
                    <a href="#" class="text-sm md:col-span-5 col-span-4 text-white underline">https://meet.google.com/uti-vyzp-vim</a>
                </div>
                <div class="grid grid-cols-6 gap-3 py-5">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Materi</h1>
                    <div class="md:col-span-5 col-span-4">
                        <div class="flex flex-col">
                            <a href="#" class="text-sm text-white my-3">
                                <i class="las la-file text-sm text-white"></i>
                                Pengenalan Anatomi Tubuh Manusia Bagian I.pdf
                            </a>
                            <a href="#" class="text-sm text-white my-3">
                                <i class="las la-file text-sm text-white"></i>
                                Pengenalan Anatomi Tubuh Manusia Bagian II.pdf
                            </a>
                            <a href="#" class="text-sm text-white my-3">
                                <i class="las la-file text-sm text-white"></i>
                                Pengenalan Anatomi Tubuh Manusia Bagian III.pdf
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-3 pb-3">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Assignment</h1>
                    <a href="#" class="text-sm md:col-span-5 col-span-4 text-white underline">https://meet.google.com/uti-vyzp-vim</a>
                </div>
            </div>
        </div>
        <div class="py-10">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Presence</h1>
                <div class="">
                    <a href="#" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg">
                        <i class="las la-notes-medical"></i>
                        Edit Session
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg">
                <div class="text-white uppercase font-semibold grid grid-cols-12">
                    <h1 class="text-left col-span-1">No</h1>
                    <h1 class="col-span-9">Name</h1>
                    <h1 class="text-right col-span-2">Stauts</h1>
                </div>
                <div class="text-white grid grid-cols-12 pt-5">
                    <h1 class="text-left col-span-1">1</h1>
                    <h1 class="col-span-9">Muh Faizal</h1>
                    <h1 class="text-right text-green-500 col-span-2">Present</h1>
                </div>
                <div class="text-white grid grid-cols-12 pt-5">
                    <h1 class="text-left col-span-1">2</h1>
                    <h1 class="col-span-9">Muh Faizal</h1>
                    <h1 class="text-right text-red-500 col-span-2">Absent</h1>
                </div>
            </div>
        </div>
        <div class="py-10">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Score</h1>
                <div class="flex md:flex-row flex-col items-end">
                    <a href="#" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg md:mr-4">
                        <i class="las la-chart-bar"></i>
                        Set Score Component
                    </a>
                    <a href="#" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg mt-2 md:mt-0">
                        <i class="lar la-plus-square"></i>
                        Add Score
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg">
                <div class="text-white uppercase font-semibold grid grid-cols-12">
                    <h1 class="text-left col-span-1">No</h1>
                    <h1 class="col-span-3">Name</h1>
                    <h1 class="col-span-2">Component 1</h1>
                    <h1 class="col-span-2">Component 2</h1>
                    <h1 class="col-span-2">Component 3</h1>
                    <h1 class="text-right col-span-2">Final Score</h1>
                </div>
                <div class="text-white grid grid-cols-12 pt-5">
                    <h1 class="text-left col-span-1">1</h1>
                    <h1 class="col-span-3">Muh Faizal</h1>
                    <h1 class="col-span-2">100</h1>
                    <h1 class="col-span-2">100</h1>
                    <h1 class="col-span-2">100</h1>
                    <h1 class="text-right col-span-2">100</h1>
                </div>
                <div class="text-white grid grid-cols-12 pt-5">
                    <h1 class="text-left col-span-1">1</h1>
                    <h1 class="col-span-3">Muh Faizal</h1>
                    <h1 class="col-span-2">100</h1>
                    <h1 class="col-span-2">100</h1>
                    <h1 class="col-span-2">100</h1>
                    <h1 class="text-right col-span-2">100</h1>
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