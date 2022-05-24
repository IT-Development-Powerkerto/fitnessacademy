<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    <livewire:user.navbar-user />

    <!-- begin::AddCourse -->
    <div class="py-10 bg-zinc-800">
        <div class="px-10">
            <div class="flex flex-row py-2 items-center">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/addCourse" class="text-white text-sm hover:text-yellow-300">Add Course</a>
            </div>
            <div class="bg-yellow-300 rounded-lg p-3">
                <h1 class="font-semibold">Add Course</h1>
            </div>
            <h1 class="text-zinc-400 text-sm py-2">Please select the course</h1>
            <div class="py-10">
                <h1 class="text-sm font-bold underline text-white">Academy Level 1</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-5">
                    @foreach ( $course->where('level', 'Level 1') as $c )

                    <div class="bg-black rounded-lg flex flex-row justify-between items-center p-5">
                        <div class="flex flex-row items-center gap-4">
                            <input checked id="yellow-checkbox" type="checkbox" value="" class="w-8 h-8 text-yellow-300 bg-yellow-300 rounded border-gray-300 focus:ring-yellow-500">
                            <div>
                                <h1 class="text-white font-bold">{{$c->name}}</h1>
                                <h1 class="text-white text-sm">{{$c->trainer->name}}</h1>
                            </div>
                        </div>
                        @if ($c->price == 0)

                        <h1 class="text-yellow-300 font-bold">FREE</h1>
                        @else
                        <h1 class="text-yellow-300 font-bold">{{'Rp. '.number_format($c->price,0,',','.')}}</h1>


                        @endif
                    </div>
                    @endforeach
                    {{-- <div class="bg-black rounded-lg flex flex-row justify-between items-center p-5">
                        <div class="flex flex-row items-center gap-4">
                            <input checked id="yellow-checkbox" type="checkbox" value="" class="w-8 h-8 text-yellow-300 bg-yellow-300 rounded border-gray-300 focus:ring-yellow-500">
                            <div>
                                <h1 class="text-white font-bold">Nutrisi Dasar I</h1>
                                <h1 class="text-white text-sm">dr Phaidon Toruan MM</h1>
                            </div>
                        </div>
                        <h1 class="text-yellow-300 font-bold">FREE</h1>
                    </div> --}}
                </div>
            </div>
            <div class="py-5">
                <h1 class="text-sm font-bold underline text-white">Academy Level 2</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-5">
                    @foreach ( $course->where('level', 'Level 2') as $c )
                    <div class="bg-black rounded-lg flex flex-row justify-between items-center p-5">
                        <div class="flex flex-row items-center gap-4">
                            <input checked id="yellow-checkbox" type="checkbox" value="" class="w-8 h-8 text-yellow-300 bg-yellow-300 rounded border-gray-300 focus:ring-yellow-500">
                            <div>
                                <h1 class="text-white font-bold">{{$c->name}}</h1>
                                <h1 class="text-white text-sm">{{$c->trainer->name}}</h1>
                            </div>
                        </div>
                        @if ($c->price == 0)

                        <h1 class="text-yellow-300 font-bold">FREE</h1>
                        @else
                        <h1 class="text-yellow-300 font-bold">{{'Rp. '.number_format($c->price,0,',','.')}}</h1>

                        @endif
                    </div>
                    @endforeach
                    {{-- <div class="bg-black rounded-lg flex flex-row justify-between items-center p-5">
                        <div class="flex flex-row items-center gap-4">
                            <input checked id="yellow-checkbox" type="checkbox" value="" class="w-8 h-8 text-yellow-300 bg-yellow-300 rounded border-gray-300 focus:ring-yellow-500">
                            <div>
                                <h1 class="text-white font-bold">Nutrisi Dasar II</h1>
                                <h1 class="text-white text-sm">dr Phaidon Toruan MM</h1>
                            </div>
                        </div>
                        <h1 class="text-yellow-300 font-bold">Rp 499.000</h1>
                    </div> --}}
                </div>
            </div>
            <div class="py-5">
                <h1 class="text-sm font-bold underline text-white">Academy Level 3</h1>
                <div class="bg-black p-5 mt-5 rounded-t-lg flex flex-row gap-4">
                    <input checked id="yellow-checkbox" type="checkbox" value="" class="w-8 h-8 text-yellow-300 bg-yellow-300 rounded border-gray-300 focus:ring-yellow-500">
                    <div>
                        <div>
                            <h1 class="text-white font-bold text-xl">Level III</h1>
                            <ul class="list-disc text-white p-5 grid grid-cols-1 md:grid-cols-5 gap-10">
                                <li>Praktek</li>
                                <li>Digital Marketing</li>
                                <li>Prepare Competition</li>
                                <li>Design Program Latihan</li>
                                <li>Biohecanical</li>
                                <li>Sales dan Marketing</li>
                                <li>Nutrisi</li>
                                <li>Anatomi</li>
                            </ul>
                        </div>
                        <div class="py-5">
                            <h1 class="text-white">Narasumber :</h1>
                            <ol class="list-decimal text-white px-5 py-2">
                                <li>dr Tanjung Subrata, MRepro, ABAARM</li>
                                <li>dr. Phaidon Toruan MM</li>
                                <li>DR. Hariadin Mahardika S.E, M.M.</li>
                                <li>Nicholas yong Lee ( Muscle Mania Word champion)</li>
                                <li>Dith satyawan ( fitnesspreneur)</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-zinc-900 rounded-b-lg p-3">
                        <h1 class="text-gray-400 text-sm text-center">Discount</h1>
                        <h1 class="text-yellow-300 text-center font-bold text-2xl">Rp 2.499.000</h1>
                    </div>
                    <div class="bg-zinc-900 rounded-b-lg p-3">
                        <h1 class="text-gray-400 text-sm text-center">Regular price</h1>
                        <h1 class="text-yellow-300 text-center font-bold text-2xl line-through">Rp 3.499.000</h1>
                    </div>
                </div>
            </div>
            <div class="py-10">
                <a href="#" class="bg-emerald-400 p-5 rounded-lg flex flex-row justify-between items-center">
                    <h1 class="font-semibold text-xl">Total</h1>
                    <div class="flex flex-row items-center">
                        <h1 class="text-2xl font-bold">Rp 2.999.000</h1>
                        <i class="las la-caret-right text-3xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end::AddCourse -->




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
