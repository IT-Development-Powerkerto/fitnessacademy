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

    <div class="bg-zinc-800 p-10 h-full">
        <div class="container mx-auto">
            <div class="flex flex-row py-2 items-center">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/detailCourse" class="text-white text-sm hover:text-yellow-300">Detail Course</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/detailSession" class="text-white text-sm hover:text-yellow-300">Detail Session</a>
            </div>
        </div>
        <div class="mt-5 container mx-auto">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Session 1 - {{$session->name}}</h1>
                <div class="flex md:flex-row flex-col items-end">
                    <form action="{{ route ('session.destroy', ['course' => $session->course_id, 'session'=>$session->id]) }}" method='POST'>
                        @method('DELETE')
                        @csrf
                        <button type="submit" href="#" class="text-sm col-span-2 md:col-span-1 text-red-500 bg-zinc-800 hover:bg-zinc-600 p-2 w-32 md:w-auto rounded-lg md:mr-4">
                            <i class="las la-trash-alt"></i>
                            Delete Session
                        </button>
                    </form>
                    <a href="{{route('session.edit', ['session'=>$session->id, 'course'=>$session->course_id])}}" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-32 md:w-auto rounded-lg mt-2 md:mt-0">
                        <i class="las la-edit"></i>
                        Edit Session
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg">
                <h1 class="text-sm md:col-span-5 col-span-4 text-white pb-5">{{\Illuminate\Support\Carbon::create($session->date_session)->format('l, d F Y')}} ({{date('H:i', strtotime($session->start_time))}} - {{date('H:i', strtotime($session->finish_time))}})</h1>
                <div class="grid grid-cols-6 gap-3">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Online Learning</h1>
                    <a href="{{$session->link_session}}" target="blank" class="text-sm md:col-span-5 col-span-4 text-white underline">{{$session->link_session}}</a>
                </div>
                <div class="grid grid-cols-6 gap-3 py-5">
                    <h1 class="text-sm col-span-2 md:col-span-1 text-gray-500">Materi</h1>
                    <div class="md:col-span-5 col-span-4">
                        <div class="flex flex-col">
                            @foreach ( $m as $m )

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
                    <a href="{{$session->link_assignment}}" class="text-sm md:col-span-5 col-span-4 text-white underline">{{$session->link_assignment}}</a>
                </div>
            </div>
        </div>
        <div class="py-10 container mx-auto">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Presence</h1>
                <div class="">
                    <a href="{{route('presence.presence', ['course' => $session->course_id, 'session'=>$session->id])}}" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg">
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
                {{-- <div class="text-white grid grid-cols-12 pt-5">
                    <h1 class="text-left col-span-1">2</h1>
                    <h1 class="col-span-9">Muh Faizal</h1>
                    <h1 class="text-right text-red-500 col-span-2">Absent</h1>
                </div> --}}
            </div>
        </div>
        <div class="py-10 container mx-auto">
            <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                <h1 class="font-semibold">Score</h1>
                <div class="flex md:flex-row flex-col items-end">
                    @if($c->isEmpty())
                    <a href="{{route('setScoreSession.componnent', ['id'=>$session->id])}}" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg md:mr-4">
                        <i class="las la-chart-bar"></i>
                        Set Score Component
                    </a>
                    @endif
                    {{-- <a href="/addScoreSession" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg mt-2 md:mt-0"> --}}
                    <a href="{{route('score', ['id'=>$session->id])}}" class="text-sm  text-yellow-300 bg-zinc-800 hover:bg-zinc-600 p-2 w-44 md:w-auto rounded-lg mt-2 md:mt-0">
                        <i class="lar la-plus-square"></i>
                        Add Score
                    </a>
                </div>
            </div>
            <div class="py-5 px-3 bg-black rounded-b-lg overflow-auto">
                <div class="overflow-x-auto">
                    {{-- <div class="text-white uppercase font-semibold hidden md:grid grid-cols-12 ">
                        <h1 class="text-left col-span-1 text-sm md:text-md">No</h1>
                        <h1 class="col-span-3 text-sm md:text-md">Name</h1>

                        @foreach ($c as $c)

                        <h1 class="col-span-2 text-sm md:text-md">{{$c->component_name ?? null}}</h1>
                        @endforeach


                        <h1 class="text-right col-span-2 text-sm md:text-md">Final Score</h1>
                    </div>


                    @foreach ( $session->final_score as $fs )
                    <div class="text-white grid grid-cols-12 pt-5">

                        <h1 class="text-left col-span-1">1</h1>
                        <h1 class="col-span-3">{{$fs->user->name}}</h1>


                        @foreach ($sd->where('user_id') as $score)
                        <h1 class="col-span-2">{{$score->score}}</h1>
                        @endforeach

                        <h1 class="text-right col-span-2">{{$fs->score_final}}</h1>
                    </div>
                    @endforeach --}}

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
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @foreach ( $session->final_score_session as $fs )


                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">{{$loop->iteration}}</td>
                                <td class="px-3 py-4">{{$fs->user->name}}</td>



                                @foreach ($sd->where('user_id', $fs->user->id) as $score)
                                <td class="px-3 py-2">

                                       {{$score->score}}

                                </td>
                                @endforeach


                                <td class="px-3 py-4">{{$fs->score_final}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- begin::Modal -->
    {{-- <!-- begin::ModalViewStudent -->
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
                    <form action="{{route('absen.absen')}}" method="POST">
                        @csrf
                    @foreach ( $s as $s )
                    <div class="text-white grid grid-cols-12 pt-5">
                        <h1 class="text-left col-span-1">{{$loop->iteration}}</h1>
                        <div class="col-span-7">{{$s->name}}

                            <input type="text" value={{$s->user_id}} name="user_id[]" hidden></div>

                        <div class="text-center col-span-2">
                            <input id="default-radio-1" type="radio" value="present" name="status[]{{$s->user_id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">                    </div>
                        <div class="text-center col-span-2">
                            <input checked id="default-radio-2" type="radio" value="absen" name="status[]{{$s->user_id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                        </div>
                        <input type="text" value="{{$session_id}}" name="session_id" hidden>
                    </div>
                    @endforeach
                    <div class="flex flex-col mt-10">
                        <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Save Change</button>
                        <button type="button" class="text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end::ModalViewStudent --> --}}
    <!-- end::Modal -->

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
{{--
    <script>

    </script> --}}
</body>
</html>
