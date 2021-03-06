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

    <div class="bg-zinc-800 h-screen">
        <!-- begin::My Course -->
        <div class="py-10 bg-zinc-800">
            <div class="container mx-auto px-10 md:px-10">
                <div class="flex flex-row bg-yellow-300 justify-between items-center rounded-lg p-3">
                    <h1 class="font-semibold">My Course</h1>
                    <div class="flex gap-2">
                        <a href="{{route('order.order')}}" class="bg-yellow-300 text-zinc-800 items-center rounded-lg p-2 border-zinc-800 border-2">

                            Order History
                        </a>
                        <a href="{{ route('course.buyCourse') }}" class="bg-zinc-800 text-yellow-300 items-center rounded-lg p-2">
                            <i class="las la-plus text-yellow-300"></i>
                            Buy Course
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-5">
                    @foreach ( $c->where('level', 'Level 1') as $level_1 )
                    <a href="{{route('course.show', ['course'=>$level_1->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-col">
                            <span class="text-white font-semibold">{{$level_1->name}}</span>
                            <span class="text-white">{{$level_1->trainer->name}}</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    @endforeach
                    {{-- {{ dd($c) }} --}}
                    @foreach ( $c->where('level', 'Level 2') as $level_2 )
                    <a href="{{route('course.show', ['course'=>$level_2->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-col">
                            <span class="text-white font-semibold">{{$level_2->name}}</span>
                            <span class="text-white">{{$level_2->trainer->name}}</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    @endforeach
                    {{-- <a href="/detailCourse" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-col">
                            <span class="text-white font-semibold">Anatomi Dasar I</span>
                            <span class="text-white">Dr. Tanjung Subrata, MRepro, ABAARM</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a> --}}
                    {{-- @foreach ( $c->where('level', 'Level 2') as $c )
                    <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-col">
                            <span class="text-white font-semibold">{{$c->name}}</span>
                            <span class="text-white">{{$c->trainer->name}}</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    @endforeach

                    @foreach ( $c->where('level', 'Level 4') as $c )
                    <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-col">
                            <span class="text-white font-semibold">{{$c->name}}</span>
                            <span class="text-white">{{$c->trainer->name}}</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    @endforeach
                    @foreach ( $c->where('level', 'Level 5') as $c )
                    <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-col">
                            <span class="text-white font-semibold">{{$c->name}}</span>
                            <span class="text-white">{{$c->trainer->name}}</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    @endforeach --}}
                    {{-- <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-col">
                            <span class="text-white font-semibold">Anatomi Dasar II</span>
                            <span class="text-white">Dr. Tanjung Subrata, MRepro, ABAARM</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a> --}}
                </div>
                {{-- <a href="#" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">LEVEL III</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a> --}}
                @foreach ( $c->where('level', 'Level 3') as $c3 )
                <a href="{{route('course.show', ['course'=>$c3->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$c3->name}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
                @endforeach
                @foreach ( $c->where('level', 'Level 6') as $c6 )
                <a href="{{route('course.show', ['course'=>$c6->id])}}" class="bg-black p-3 flex flex-row justify-between items-center rounded-lg">
                    <div class="flex flex-col">
                        <span class="text-white font-semibold">{{$c6->name}}</span>
                    </div>
                    <i class="las la-angle-right text-white"></i>
                </a>
                @endforeach


            </div>
        </div>
        <!-- end::My Course -->

        <!-- begin::Schedule -->
        <div class="py-10 bg-zinc-800">
            <div class="container mx-auto px-10 md:px-10">
                <div class="bg-yellow-300 rounded-lg p-3">
                    <h1 class="font-semibold">Today Schedule</h1>
                </div>
                @foreach ($c as $c )
                <div class="py-5 px-3">
                    <h1 class="text-white font-semibold">{{$c->name}}</h1>
                    <h1 class="text-white">{{\Carbon\Carbon::parse($c->created_at)->format('l, d M Y')}} ({{date('H:i', strtotime($c->start_date))}} - {{date('H:i', strtotime($c->finish_date))}})</h1>
                </div>
                @endforeach
            </div>
        </div>
        <!-- end::Schedule -->

        <!-- begin::Coaches -->
        <div class="py-10 bg-zinc-800">
            <div class="container mx-auto px-10 md:px-10">
                <div class="bg-yellow-300 rounded-lg p-3">
                    <h1 class="font-semibold">Trainers</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-5">
                    @foreach ($trainers as $trainer)
                        <a href="{{ route('coachProfile.show', ['coachProfile' => $trainer->id]) }}" class="bg-black p-5 flex flex-row justify-between items-center rounded-lg">
                            <div class="flex flex-row gap-3 items-center">
                                <img src="{{ url($trainer->user->image ?? 'assets/img/user_default.png') }}" class="w-10 rounded" alt="Coach image">
                                <span class="text-white font-semibold">{{ $trainer->user->name }}</span>
                            </div>
                            <i class="las la-angle-right text-white"></i>
                        </a>
                    @endforeach
                    {{-- <a href="#" class="bg-black p-5 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-row gap-3 items-center">
                            <img src="assets/img/Choaches/Phaidon.png" class="w-10 rounded" alt="">
                            <span class="text-white font-semibold">Dr. Phaidon Toruan MM</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    <a href="#" class="bg-black p-5 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-row gap-3 items-center">
                            <img src="assets/img/Choaches/Dith.png" class="w-10 rounded" alt="">
                            <span class="text-white font-semibold">Dith Satyawan</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    <a href="#" class="bg-black p-5 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-row gap-3 items-center">
                            <img src="assets/img/Choaches/Nicholas.png" class="w-10 rounded" alt="">
                            <span class="text-white font-semibold">Nicholas long Lee</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a>
                    <a href="#" class="bg-black p-5 flex flex-row justify-between items-center rounded-lg">
                        <div class="flex flex-row gap-3 items-center">
                            <img src="assets/img/Choaches/Harryadin.png" class="w-10 rounded" alt="">
                            <span class="text-white font-semibold">Dr. Harryadin Mahardika, S.E., M.M.</span>
                        </div>
                        <i class="las la-angle-right text-white"></i>
                    </a> --}}
                </div>
            </div>
        </div>
        <!-- end::Coaches -->

        <!-- begin::Score -->
        <div class="py-10 bg-zinc-800">
            <div class="container mx-auto px-10 md:px-10">
                <div class="bg-yellow-300 rounded-lg p-3">
                    <h1 class="font-semibold">Score</h1>
                </div>
                @foreach ( $fs as $f )

                <div class="py-5 px-3 flex flex-row justify-between">
                    <h1 class="text-white font-semibold">{{$f->exam->course->name ?? null}}</h1>
                    <h1 class="text-white font-semibold">{{$f->score_final ?? null}}</h1>
                </div>
                @endforeach
            </div>
        </div>
        <!-- end::Score -->
    </div>




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
