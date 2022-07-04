<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Course</title>
    <link rel="icon" href="/assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>

<body>

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
    <div class="bg-zinc-800 p-10 h-screen">
        <div class="h-full container mx-auto px-10 md:px-10">
            <div class="flex flex-row py-2 items-center">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="{{ route('course.show', ['course' => $course->id]) }}" class="text-white text-sm hover:text-yellow-300">Detail Course</a>
            </div>
            <div class="flex flex-row justify-between py-5">
                <div class="flex flex-row gap-3 items-center">
                    <img src="../assets/img/Choaches/tanjung.png" class="w-10 rounded" alt="">
                    <div>
                        <h1 class="text-white font-semibold">{{$course->name}} I</h1>
                        <h1 class="text-white text-sm">{{$user->where('id', $course->trainer_id)->implode('name')}}</h1>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-end md:items-center">
                    <button type="button" data-modal-toggle="deleteCourse" class="text-sm hover:text-blue-400 text-red-600 border border-red-600 hover:border-blue-400 p-2 w-32 md:w-auto rounded-lg md:mr-4">
                        <i class="las la-trash-alt"></i>
                        Delete Course
                    </button>
                    <div id="deleteCourse" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="deleteCourse">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <form action="{{route('course.destroy', ['course'=>$course->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <div class="p-6 text-center">
                                        <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to delete this course ?</h3>
                                        <button data-modal-toggle="deleteCourse" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Yes, I'm sure
                                        </button>
                                        <button data-modal-toggle="deleteCourse"  class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('course.edit', ['course' => $course->id]) }}" type="button" class="text-sm hover:text-blue-400 text-yellow-300 border border-yellow-300 hover:border-blue-400 p-2 w-32 md:w-auto rounded-lg mt-2 md:mt-0">
                        <i class="las la-edit"></i>
                        Edit Course
                    </a>
                </div>
            </div>
            <div class=" border-b border-yellow-300 border-2"></div>
            <div class="py-5">
                <div class="grid grid-cols-6 gap-3">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Schedule</h1>
                    <h1 class="text-sm col-span-4 md:col-span-5 text-white">{{$course->schedule}}</h1>
                </div>
                <div class="grid grid-cols-6 gap-3 items-center mt-5">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">List of Students</h1>
                    <button type="button" class="text-sm  text-white bg-yellow-300 hover:bg-yellow-400 p-2 w-44 md:w-auto rounded-lg" data-modal-toggle="viewStudent">
                        <i class="las la-eye"></i>
                        View all students
                    </button>
                </div>
                <div class="grid grid-cols-6 gap-3 items-center mt-5">
                    <a href="{{ route ('session.create', ['course'=>$course_id]) }}" type="button" class="text-sm text-center col-span-2 md:col-span-1 text-black bg-yellow-300 hover:bg-yellow-400 p-2 w-32 md:w-auto rounded-lg">
                        <i class="las la-plus"></i>
                        Add Session
                    </a>
                    <a href="{{ route ('addExam.addExam', ['id'=>$course_id]) }}" type="button" class="text-sm text-center text-red-600 bg-white hover:bg-gray-300 p-2 w-44 md:w-auto rounded-lg">
                        <i class="las la-plus"></i>
                        Add Exam

                    </a>
                </div>
            </div>

            <div class=" border-b border-yellow-300 border-2"></div>

            <div class="mt-6">
                @foreach ( $sessions as $s )
                <a href="{{route('detailSesion.detailSesion', ['course' => $s->course_id, 'id'=>$s->id])}}" type="button" class="bg-yellow-300 rounded-lg flex justify-between items-center p-5 w-full text-left mb-6">
                    <div class="flex flex-col">
                        <span class="font-bold text-black">Session {{$loop->iteration}} - {{$s->name}}</span>
                        <span class="text-sm font-semibold text-black">{{\Illuminate\Support\Carbon::create($s->date_session)->format('l, d F Y')}} ({{date('H:i', strtotime($s->start_time))}} - {{date('H:i', strtotime($s->finish_time))}})</span>
                    </div>
                    {{-- <form action="{{ route ('detailSession.destroy', ['detailSession'=>$s->id]) }}" method='POST'>
                        @method('DELETE')
                        @csrf
                        <button type="submit" href="#" class="text-sm col-span-2 md:col-span-1 text-red-500 bg-zinc-800 hover:bg-zinc-600 p-2 w-32 md:w-auto rounded-lg md:mr-4">
                            <i class="las la-trash-alt"></i>
                            Delete Session
                        </button>
                    </form> --}}

                </a>
                @endforeach
            </div>


            @foreach ( $exams as $e )
            <div class="grid grid-cols-12 py-5">
                <div class="bg-red-500 md:col-span-1 col-span-4 flex items-center justify-center p-5 rounded-l-lg">
                    <h1 class="text-white font-bold text-2xl">EXAM</h1>
                </div>
                <div class="bg-white col-span-8 md:col-span-11 p-5 rounded-r-lg flex flex-col">
                    <a href="{{route('detailExam.detailExam', ['course'=>$e->course_id ,'id'=>$e->id])}}">
                        <h1 class="font-bold text-lg md:text-2xl">{{$e->name}}</h1>
                        <h1 class="font-semibold text-sm py-2">{{\Illuminate\Support\Carbon::create($e->date_exam)->format('l, d F Y')}} ({{date('H:i', strtotime($e->start_time))}} - {{date('H:i', strtotime($e->finish_time))}})</h1>
                        <a href="{{$e->link}}" target="blank" class="font-semibold text-sm break-all underline text-black hover:text-yellow-300">{{$e->link ?? null}}</a>
                    </a>

                </div>
            </div>
            @endforeach

        </div>


    <!-- begin::Modal -->
    <!-- begin::ModalViewStudent -->
    <div id="viewStudent" tabindex="-1" aria-hidden="true" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t bg-yellow-300">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Anatomi Dasar - Student List
                    </h3>
                    <button type="button" class="text-yellow-300 hover:bg-gray-200 hover:text-gray-900 rounded-full bg-black text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="viewStudent">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 bg-black">
                    <ul class="list-decimal grid grid-rows-5 grid-flow-col gap-4 p-4 text-white">
                        @foreach ( $c as $c )

                        <li>{{$c->name}}</li>

                        @endforeach
                    </ul>
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
