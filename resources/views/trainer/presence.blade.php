<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presence</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    <livewire:trainer.navbar-trainer />

    <div class="bg-zinc-800 p-10 h-screen">
        <div class="relative p-4 w-full h-full md:h-auto container mx-auto px-10 md:px-10">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t bg-yellow-300">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Anatomi Dasar - Student List
                    </h3>
                    {{-- <button type="button" class="text-yellow-300 hover:bg-gray-200 hover:text-gray-900 rounded-full bg-black text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="presence">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button> --}}
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
                    @foreach ( $s->where('user.name', '!=', null) as $s )
                    <div class="text-white grid grid-cols-12 pt-5">
                        <h1 class="text-left col-span-1">{{$loop->iteration}}</h1>
                        {{-- <div class="col-span-7">{{$s->name}} --}}
                        <div class="col-span-7">{{$s->user->name}}
                            <input type="text" value={{$s->user->id}} name="user_id[]" hidden></div>
                        {{-- <div class="text-center col-span-2">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                        </div>
                        <div class="text-center col-span-2">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                        </div> --}}
                        <div class="text-center col-span-2">
                            <input checked id="default-radio-1" type="radio" value="present" name="status[]{{$s->user->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="text-center col-span-2">
                            <input checked id="default-radio-2" type="radio" value="absen" name="status[]{{$s->user->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                        </div>
                        <input type="text" value="{{$session_id}}" name="session_id" hidden>
                    </div>
                    @endforeach
                    <div class="flex flex-col mt-10">
                        <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Save Change</button>
                        <a href="{{route('detailSesion.detailSesion', ['course' => $session->course_id, 'id'=>$session->id])}}" class="text-center text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- begin::Modal -->
    {{-- <!-- begin::ModalViewStudent -->
    <div id="presence" tabindex="-1" aria-hidden="true" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">

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
