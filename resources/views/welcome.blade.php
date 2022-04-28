<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">

    @livewireStyles
</head>
<body>
    <livewire:lp.navbar /> 

    <div class="bg-zinc-800 h-screen p-10">
        <div class="flex flex-col-reverse md:flex-row">
            <div class="py-10 text-center md:text-left md:basis-3/6 md:self-center">
                <h1 class="text-white text-3xl font-bold md:text-4xl">Welcome to Fitness Plus Academy</h1>
                <h1 class="text-sm text-gray-300 py-10">We serve you with knowledge to help you increase your skill, competencies to give results to your clients and tobhelp you increase your sales and marketing knowledge to increse your income.</h1>
                <a href="#" class="bg-yellow-200 px-10 py-3 rounded-md hover:bg-yellow-300 hover:text-white">View Course</a>
            </div>
            <div class="md:basis-3/6">
                <img src="assets/img/Academy-Fitness-Plus.png" alt="">
            </div>
        </div>
    </div>

    


    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>