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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
		/*Overrides for Tailwind CSS */
		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #000;
			/*text-gray-700*/
			padding-left: 1rem;
			/*pl-4*/
			padding-right: 1rem;
			/*pl-4*/
			padding-top: .5rem;
			/*pl-2*/
			padding-bottom: .5rem;
			/*pl-2*/
			line-height: 1.25;
			/*leading-tight*/
			border-width: 2px;
			/*border-2*/
			border-radius: .25rem;
			border-color: #fff;
			/*border-gray-200*/
			background-color: #fff;
			/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover,
		table.dataTable.display tbody tr:hover {
			background-color: #fff;
			/*bg-indigo-100*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #F7E03C !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #F7E03C !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}


		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
		table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #F7E03C;
            !important;
			/*bg-indigo-500*/
		}
	</style>


    @livewireStyles
</head>
<body>

    <livewire:trainer.navbar-trainer />

    <!-- begin::My Course -->
    <div class="h-screen py-10 bg-zinc-800">
        <div class="bg-zinc-800">
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
                    {{-- <form action="/dashboard" method="get">
                        @csrf
                    <select id="course_id" name="get_course" onchange="submit()" class="w-36 p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option hidden></option>
                        <option value="0">All</option>
                        @foreach ($course as $co )

                        <option   value="{{$co->id}}">{{$co->name}}</option>
                        @endforeach

                    </select>
                    </form> --}}
                    {{-- <button id="dropdownDefault" data-dropdown-toggle="score" class="text-yellow-300 bg-zinc-800 hover:bg-zinc-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">All
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="score" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">
                        <ul class="py-1 text-sm text-black" aria-labelledby="dropdownDefault" onchange="getScore()">
                            <li>
                                <a href="{{route('getCourse',['course_id'=>'all'])}}" class="block px-4 py-2 hover:bg-gray-100 " value="all">All</a>
                            </li>
                            @foreach ($course as $co)
                            <li>
                                <a href="{{route('getCourse',['course_id'=>$co->id])}}" class="block px-4 py-2 hover:bg-gray-100 " value="{{$co->id}}">{{$co->name}}</a>
                            </li>
                            @endforeach
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Nutrisi Dasar II</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Level III</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <div class="py-5 px-3 bg-black rounded-b-lg">
                    {{-- <div class="text-white uppercase font-semibold grid grid-cols-12">
                        <h1 class="text-left col-span-1 text-sm md:text-md">No</h1>
                        <h1 class="col-span-5 text-sm md:text-md">Name</h1>
                        <h1 class="col-span-4 text-sm md:text-md">Course</h1>
                        <h1 class="text-right col-span-2 text-sm md:text-md">Score</h1>
                    </div>
                    @foreach ( $fs->where('exam_id') as $s )

                    <div class="text-white grid grid-cols-12 pt-5">
                        <h1 class="text-left col-span-1">{{$loop->iteration}}</h1>
                        <h1 class="col-span-5">{{$s->user->name}}</h1>
                        <h1 class="col-span-4">{{$s->exam->course->name}}</h1>
                        <h1 class="text-right col-span-2">{{$s->score_final}}</h1>
                    </div>
                    @endforeach --}}
                    <table class="w-full text-left" id="course_id">
                        <thead>
                            <tr class="text-gray-500">
                                <th scope="col" class="px-1 py-3 text-white">No</th>
                                <th scope="col" class="px-3 py-3 text-white">Name</th>
                                <th scope="col" class="px-5 py-3 text-white">Course</th>
                                <th scope="col" class="px-1 py-3 text-white">Score</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            {{-- @foreach ( $fs->where('exam_id') as $s )


                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">{{$loop->iteration}}</td>
                                <td class="px-3 py-4">{{$s->user->name}}</td>
                                <td class="px-3 py-4">{{$s->exam->course->name}}</td>


                                <td class="px-3 py-4">{{$s->score_final}}</td>

                            </tr> --}}
                            @foreach ( $fs->whereNotNull('exam_id') as $s )


                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">{{$loop->iteration}}</td>
                                <td class="px-3 py-4">{{$s->user->name}}</td>
                                <td class="px-3 py-4">{{$s->exam->course->name}}</td>


                                <td class="px-3 py-4">{{$s->score_final}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end::Score -->
    </div>




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#course_id').DataTable({
                responsive: true,
                "columnDefs": [
    { "searchable": false, "targets": 0 }
  ]
            })
        })
    </script>
</body>
</html>
