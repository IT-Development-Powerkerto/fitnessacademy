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

    <livewire:user.navbar-user />

    <div class="bg-zinc-800 p-10 h-screen">
        <div class="bg-zinc-800">
            <div class="">
                <div class="flex flex-row py-2 items-center">
                    <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                    <i class="las la-angle-right text-white text-sm px-1"></i>
                    <h1 class="text-white text-sm">My Course</h1>
                    <i class="las la-angle-right text-white text-sm px-1"></i>
                    <a href="/detailCourse" class="text-white text-sm hover:text-yellow-300">Detail Course</a>
                </div>
                <div class="flex flex-row gap-4 py-5">
                    <div class="flex flex-row gap-3 items-center">
                        <img src="assets/img/Choaches/tanjung.png" class="w-10 rounded" alt="">
                        <div>
                            <h1 class="text-white font-semibold">Anatomi Dasar I</h1>
                            <h1 class="text-white text-sm">Dr. Tanjung Subrata, MRepro, ABAARM</h1>
                        </div>
                    </div>
                </div>
                <div class=" border-b border-yellow-300 border-2"></div>
                <div class="py-5">
                    <div class="grid grid-cols-6 gap-3">
                        <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Schedule</h1>
                        <h1 class="text-sm col-span-4 md:col-span-5 text-white">{{$course->schedule}}</h1>
                    </div>
                    <div class="grid grid-cols-6 gap-3 py-5">
                        <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Score (Graduation Status)</h1>
                        @foreach ($fs as $f)
                        <h1 class="text-sm col-span-4 md:col-span-5 text-white">{{$f->score_final}}
                        @if ($f->status === 'Graduated')
                            (Graduated)
                        @else
                             (Haven't Passed Yet)
                        @endif
                        </h1>
                        @endforeach
                        {{-- <h1 class="text-sm col-span-4 md:col-span-5 text-white">95.0 (Graduated / Haven't Passed Yet / Not Pass)</h1> --}}
                    </div>
                    <div class="grid grid-cols-6 gap-3 items-center">
                        <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">List of Students</h1>
                        <button type="button" class="text-sm  text-white underline bg-yellow-300 hover:bg-yellow-400 p-2 w-44 md:w-auto rounded-lg" data-modal-toggle="viewStudent">
                            <i class="las la-eye"></i>
                            View all students
                        </button>
                    </div>
                </div>

                @foreach ( $sessions as $ss )
                <div class="py-5">
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button" class="bg-yellow-300 rounded-t-lg flex justify-between items-center p-5 w-full text-left" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                                <div class="flex flex-col">
                                    <span class="font-bold text-black">Session {{$loop->iteration}} - {{$ss->name}}</span>
                                    <span class="text-sm font-semibold text-black">{{\Illuminate\Support\Carbon::create($ss->date_session)->format('l, d F Y')}} ({{date('H:i', strtotime($ss->start_time))}} - {{date('H:i', strtotime($ss->finish_time))}})</span>
                                </div>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 bg-black">
                                <div class="grid grid-cols-6 gap-3">
                                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Online Learning</h1>
                                    <a href="{{$ss->link_session}}" class="text-sm md:col-span-5 col-span-4 text-white underline">{{$ss->link_session}}</a>
                                </div>
                                <div class="grid grid-cols-6 gap-3 py-5">
                                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Materi</h1>
                                    <div class="md:col-span-5 col-span-4">
                                        <div class="flex flex-col">
                                            @foreach ( $ma as $m )

                                            <a href="{{url($m->file)}}" target="blank" class="text-sm text-white my-3">
                                                <i class="las la-file text-sm text-white"></i>
                                               {{$m->file}}
                                            </a>
                                            @endforeach
                                            {{-- <a href="#" class="text-sm text-white my-3">
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
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-3 pb-3">
                                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Assignment</h1>
                                    <a href="{{$ss->link_assignment}}" class="text-sm md:col-span-5 col-span-4 text-white underline">{{$ss->link_assignment}}</a>
                                </div>
                                <div class="grid grid-cols-6 gap-3">
                                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Score</h1>
                                    @foreach ($ss->final_score_session as $sf)

                                    <h1 class="text-sm md:col-span-5 col-span-4 text-white underline">{{$sf->score_final}}</h1>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



                {{-- <div class="py-5">
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button" class="bg-yellow-300 rounded-t-lg flex justify-between items-center p-5 w-full text-left" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                                <div class="flex flex-col">
                                    <span class="font-bold text-black">Session 1 - Pengenalan Anatomi Manusia</span>
                                    <span class="text-sm font-semibold text-black">Sunday, 15 May 2022 (09:00 - 12:00)</span>
                                </div>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 bg-black">
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
                                <div class="grid grid-cols-6 gap-3">
                                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Score</h1>
                                    <h1 class="text-sm md:col-span-5 col-span-4 text-white underline">100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="py-5">
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button" class="bg-yellow-300 rounded-t-lg flex justify-between items-center p-5 w-full text-left" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <div class="flex flex-col">
                                    <span class="font-bold text-black">Session 2 - Pengenalan Anatomi Manusia</span>
                                    <span class="text-sm font-semibold text-black">Sunday, 15 May 2022 (09:00 - 12:00)</span>
                                </div>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 bg-black">
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
                                <div class="grid grid-cols-6 gap-3">
                                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Score</h1>
                                    <h1 class="text-sm md:col-span-5 col-span-4 text-white underline">100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-5">
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button" class="bg-yellow-300 rounded-t-lg flex justify-between items-center p-5 w-full text-left" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                <div class="flex flex-col">
                                    <span class="font-bold text-black">Session 3 - Pengenalan Anatomi Manusia</span>
                                    <span class="text-sm font-semibold text-black">Sunday, 15 May 2022 (09:00 - 12:00)</span>
                                </div>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 bg-black">
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
                                <div class="grid grid-cols-6 gap-3">
                                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Score</h1>
                                    <h1 class="text-sm md:col-span-5 col-span-4 text-white underline">100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="grid grid-cols-12 py-5">
                    <div class="bg-red-500 md:col-span-1 col-span-4 flex items-center justify-center p-5 rounded-l-lg">
                        <h1 class="text-white font-bold text-2xl">EXAM</h1>
                    </div>
                    <div class="bg-white col-span-8 md:col-span-11 p-5 rounded-r-lg flex flex-col">
                        <h1 class="font-bold text-lg md:text-2xl">Ujian Anatomi Dasar I</h1>
                        <h1 class="font-semibold text-sm py-2">Wednesday, 18 May 2022 (09:00 - 12:00)</h1>
                        <a href="#" class="font-semibold text-sm break-all underline text-black hover:text-yellow-300">https://quizizz.com/admin/quiz/5c67f07b90bd9b001e14c7d6/edmodo</a>
                    </div>
                </div> --}}

                @foreach ( $exams as $e )
                <div class="grid grid-cols-12 py-5">
                    <div class="bg-red-500 md:col-span-1 col-span-4 flex items-center justify-center p-5 rounded-l-lg">
                        <h1 class="text-white font-bold text-2xl">EXAM</h1>
                    </div>
                    <div class="bg-white col-span-8 md:col-span-11 p-5 rounded-r-lg flex flex-col">
                        <a href="/detailExam">
                            <h1 class="font-bold text-lg md:text-2xl">{{$e->name}}</h1>
                            <h1 class="font-semibold text-sm py-2">{{\Illuminate\Support\Carbon::create($e->date_exam)->format('l, d F Y')}} ({{date('H:i', strtotime($ss->start_time))}} - {{date('H:i', strtotime($ss->finish_time))}})</h1>
                            <a href="#" class="font-semibold text-sm break-all underline text-black hover:text-yellow-300">{{$e->link ?? null}}</a>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
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
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 bg-black">
                        <ul class="list-decimal grid grid-rows-5 grid-flow-col gap-4 p-4 text-white">
                            @foreach ( $c as $c )

                            <li>{{$c->name}}</li>

                            @endforeach
                            {{-- <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li>
                            <li>Muh Faizal</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::ModalViewStudent -->
        <!-- end::Modal -->
    </div>

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
