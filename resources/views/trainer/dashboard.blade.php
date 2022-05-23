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

    <livewire:trainer.navbar-trainer />

    <!-- begin::My Course -->
    <div class="py-10 bg-zinc-800">
        <div class="px-10">
            <div class="flex flex-row bg-yellow-300 justify-between items-center rounded-lg p-3">
                <h1 class="font-semibold">Course</h1>
                <a href="/addCourse" class="bg-zinc-800 text-yellow-300 items-center rounded-lg p-2">
                    <i class="las la-plus text-yellow-300"></i>
                    Create Course
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-5">
                @foreach ($course->where('level', 'Level 1') as $course1)
                <a href="{{route('course.show', ['course'=>$course1->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$course1->name}} I</span>
                        <span class="text-white">{{$user->where('id', $course1->trainer_id)->implode('name')}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
                @endforeach
                @foreach ($course->where('level', 'Level 2') as $course2)
                <a href="{{route('course.show', ['course'=>$course2->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$course2->name}} II</span>
                        <span class="text-white">{{$user->where('id', $course2->trainer_id)->implode('name')}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
                @endforeach
                @foreach ($course->where('level', 'Level 4') as $course4)
                <a href="{{route('course.show', ['course'=>$course4->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$course4->name}} IV</span>
                        <span class="text-white">{{$user->where('id', $course4->trainer_id)->implode('name')}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
                @endforeach
                @foreach ($course->where('level', 'Level 5') as $course5)
                <a href="{{route('course.show', ['course'=>$course5->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$course5->name}} V</span>
                        <span class="text-white">{{$user->where('id', $course5->trainer_id)->implode('name')}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
                @endforeach
            </div>

            @foreach ($course->where('level', 'Level 3') as $course3)
            <div class="mb-5">
                <a href="{{route('course.show', ['course'=>$course3->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$course3->name}} III</span>
                        <span class="text-white">{{$user->where('id', $course3->trainer_id)->implode('name')}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
            </div>
            @endforeach
            @foreach ($course->where('level', 'Level 6') as $course6)
            <div class="mb-5">
                <a href="{{route('course.show', ['course'=>$course6->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$course6->name}} III</span>
                        <span class="text-white">{{$user->where('id', $course6->trainer_id)->implode('name')}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end::My Course -->

    <!-- begin::Schedule -->
    <div class="py-10 bg-zinc-800">
        <div class="px-10">
            <div class="bg-yellow-300 rounded-lg p-3">
                <h1 class="font-semibold">Today Schedule</h1>
            </div>
            @foreach ($course as $today_course)
            {{-- {{dd($day == ".str_replace(',','"||"', $today_course->schedule).")}} --}}
            @if (($day == ".str_replace(',','"||"', $today_course->schedule).") && ($today >= $today_course->start_date) && ($today <= $today_course->end_date))
            <div class="py-5 px-3">
                <h1 class="text-white font-semibold">{{$today_course->name}}</h1>
                <h1 class="text-white">{{\Carbon\Carbon::parse($today_course->created_at)->format('l, d M Y')}}</h1>
                {{-- <h1 class="text-white">{{$day == str_replace(',','"||"', $today_course->schedule)}}</h1> --}}
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <!-- end::Schedule -->

    <!-- begin::Score -->
    <div class="py-10 bg-zinc-800">
        <div class="px-10">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Score</h1>
                <button id="dropdownDefault" data-dropdown-toggle="score" class="text-yellow-300 bg-zinc-800 hover:bg-zinc-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">All <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="score" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">
                    <ul class="py-1 text-sm text-black" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Nutrisi Dasar I</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Nutrisi Dasar II</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Level III</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg">
                <div class="text-white uppercase font-semibold grid grid-cols-12">
                    <h1 class="text-left col-span-1 text-sm md:text-md">No</h1>
                    <h1 class="col-span-5 text-sm md:text-md">Name</h1>
                    <h1 class="col-span-4 text-sm md:text-md">Course</h1>
                    <h1 class="text-right col-span-2 text-sm md:text-md">Score</h1>
                </div>
                <div class="text-white grid grid-cols-12 pt-5">
                    <h1 class="text-left col-span-1">1</h1>
                    <h1 class="col-span-5">Muh Faizal</h1>
                    <h1 class="col-span-4">Nutrisi Dasar 1</h1>
                    <h1 class="text-right col-span-2">100</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end::Score -->




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
