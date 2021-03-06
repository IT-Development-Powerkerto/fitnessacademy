<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Exam</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    {{-- <livewire:exam.navbar /> --}}
    <livewire:trainer.navbar-trainer />
    <div class="bg-zinc-800">
        @if($errors->any())

            <div id="alert-2" class="flex p-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                    {{ $errors->first() }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        @endif
        @if (session()->has('success'))

            <div id="alert-3" class="flex p-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                    {{ session('success') }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        @endif
        @if (session()->has('delete'))

            <div id="alert-4" class="flex p-4 bg-yellow-100 rounded-lg dark:bg-yellow-200" role="alert">
                <svg class="flex-shrink-0 w-5 h-5 text-yellow-700 dark:text-yellow-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div class="ml-3 text-sm font-medium text-yellow-700 dark:text-yellow-800">
                    {{ session('delete') }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-100 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 dark:bg-yellow-200 dark:text-yellow-600 dark:hover:bg-yellow-300" data-dismiss-target="#alert-4" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
         @endif
    </div>

    <div class="bg-zinc-800 p-10">
        <div class="container mx-auto px-10 md:px-10">
            <div class="flex flex-row py-2 items-center">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="{{route('course.show', ['course'=>$course->id])}}" class="text-white text-sm hover:text-yellow-300">Detail Course</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="#" class="text-white text-sm hover:text-yellow-300">EXAM</a>
            </div>
        </div>
        <div class="mt-5 container mx-auto px-10 md:px-10">
            <div class="bg-red-500 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold text-white">EXAM - {{$exam->name}}</h1>
                <div class="flex md:flex-row flex-col items-end">

                    <a href="{{route('editExam.editExam', ['course'=>$exam->course_id,'id'=>$exam->id])}}" class="text-sm text-red-500 bg-white hover:bg-zinc-500 p-2 w-32 md:w-auto rounded-lg mt-2 md:mt-0">
                        <i class="las la-edit"></i>
                        Edit Exam
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-white rounded-b-lg">
                <h1 class="text-sm md:col-span-5 col-span-4 pb-5">{{\Illuminate\Support\Carbon::create($exam->date_exam)->format('l, d F Y')}} ({{date('H:i', strtotime($exam->start_time))}} - {{date('H:i', strtotime($exam->finish_time))}})</h1>
                <div class="grid grid-cols-6 gap-3">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Link Exam</h1>
                    <a href="{{$exam->link}}" target="blank" class="text-sm md:col-span-5 col-span-4 underline">{{$exam->link}}</a>
                </div>
            </div>
        </div>
        <div class="py-10 container mx-auto px-10 md:px-10">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Presence</h1>
                <div class="">
                    {{-- <button type="button" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg" data-modal-toggle="presence">
                        <i class="las la-notes-medical"></i>
                        Add Presence
                    </button> --}}
                    <a href="{{route('presenceExam.presenceExam', ['course'=>$exam->course_id, 'id'=>$exam->id])}}" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg">
                        <i class="las la-notes-medical"></i>
                        Add Presence
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg">
                <div class="text-white uppercase font-semibold grid grid-cols-12">
                    <h1 class="text-left col-span-1 text-sm md:text-md">No</h1>
                    <h1 class="col-span-9 text-sm md:text-md">Name</h1>
                    <h1 class="text-right col-span-2 text-sm md:text-md">Status</h1>
                </div>
                @foreach ( $a as $a )

                <div class="text-white grid grid-cols-12 pt-5">
                    <h1 class="text-left col-span-1">{{$loop->iteration}}</h1>
                    <h1 class="col-span-9">{{$a->user->name}}</h1>
                    @if ($a->status == 'present')

                    <h1 class="text-right text-green-500 col-span-2">Present</h1>
                    @else
                    <h1 class="text-right text-red-500 col-span-2">Absent</h1>

                    @endif
                </div>
                @endforeach
            </div>
        </div>
        <div class="py-10 container mx-auto px-10 md:px-10">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Score</h1>
                <div class="flex md:flex-row flex-col items-end">
                    @if($c->isEmpty())
                    <a href="{{route('setScoreExam.setScore',['course'=>$exam->course_id, 'id'=>$exam->id])}}" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg md:mr-4">
                        <i class="las la-chart-bar"></i>
                        Set Score Component
                    </a>
                    @endif
                    <a href="{{route('addScoreExam.addScore',['course'=>$exam->course_id, 'id'=>$exam->id])}}" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg mt-2 md:mt-0">
                        <i class="lar la-plus-square"></i>
                        Add Score
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg overflow-auto">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-gray-500">
                                <th scope="col" class="px-3 py-3">No</th>
                                <th scope="col" class="px-3 py-3">Name</th>

                                @foreach ( $c as $c )
                                <th scope="col" class="px-3 py-3">
                                    {{$c->component_name ?? null}}</th>
                                @endforeach
                                <th scope="col" class="px-3 py-3">Final Score</th>
                                <th scope="col" class="px-3 py-3">STATUS</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @foreach ( $exam->final_score_exam as $fs )


                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">{{$loop->iteration}}</td>
                                <td class="px-3 py-4">{{$fs->user->name}}</td>



                                @foreach ($sde->where('user_id', $fs->user->id) as $score)
                                <td class="px-3 py-2">

                                       {{$score->score}}

                                </td>
                                @endforeach


                                <td class="px-3 py-4">{{$fs->score_final}}</td>


                                @if ($fs->status === 'Graduated')
                                <td class="px-3 py-4 text-green-500">
                                    <span class="bg-green-400 text-white text-sm font-medium mr-2 px-3.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Graduated</span>
                                </td>

                                @else
                                <td class="px-3 py-4 text-red-600">
                                    <span class="bg-red-600 text-white text-sm font-medium mr-2 px-3.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Havent Passed Yet</span>
                                </td>

                                @endif

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="text-white uppercase font-semibold hidden md:grid grid-cols-12 ">
                        <h1 class="text-left col-span-1 text-sm md:text-md">No</h1>
                        <h1 class="col-span-3 text-sm md:text-md">Name</h1>
                        <h1 class="col-span-2 text-sm md:text-md">Component 1</h1>
                        <h1 class="col-span-2 text-sm md:text-md">Component 2</h1>
                        <h1 class="col-span-2 text-sm md:text-md">Component 3</h1>
                        <h1 class="text-right col-span-2 text-sm md:text-md">Final Score</h1>
                    </div>
                    <div class="text-white uppercase font-semibold grid grid-cols-12 md:hidden">
                        <h1 class="text-left col-span-1 text-sm md:text-md">No</h1>
                        <h1 class="col-span-3 text-sm md:text-md">Name</h1>
                        <h1 class="col-span-2 text-sm md:text-md">Comp 1</h1>
                        <h1 class="col-span-2 text-sm md:text-md">Comp 2</h1>
                        <h1 class="col-span-2 text-sm md:text-md">Comp 3</h1>
                        <h1 class="text-right col-span-2 text-sm md:text-md">Score</h1>
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- begin::Modal -->
    <!-- begin::ModalViewStudent -->
    <div id="presence" tabindex="-1" aria-hidden="true" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t bg-yellow-300">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Anatomi Dasar - Student List
                    </h3>
                    <button type="button" class="text-yellow-300 hover:bg-gray-200 hover:text-gray-900 rounded-full bg-black text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="presence">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 bg-black">
                    <div class="text-white uppercase font-semibold grid grid-cols-12 ">
                        <h1 class="text-left col-span-1 text-sm md:text-md">No</h1>
                        <h1 class="col-span-7 text-sm md:text-md">Name</h1>
                        <h1 class="col-span-2 text-center text-sm md:text-md">Present</h1>
                        <h1 class="col-span-2 text-center text-sm md:text-md">Absent</h1>
                    </div>
                    <div class="text-white grid grid-cols-12 pt-5">
                        <h1 class="text-left col-span-1">1</h1>
                        <h1 class="col-span-7">Muh Faizal</h1>
                        <div class="text-center col-span-2">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                        </div>
                        <div class="text-center col-span-2">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::ModalViewStudent -->
    <!-- end::Modal -->

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
