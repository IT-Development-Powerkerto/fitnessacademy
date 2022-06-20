<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview Course</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    <livewire:user.navbar-user />

    <div class="bg-zinc-800 p-10">
        <div class="flex flex-row py-5 items-center">
            <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
            <i class="las la-angle-right text-white text-sm px-1"></i>
            <a href="/userProfile" class="text-white text-sm hover:text-yellow-300">Overview Course Approval</a>
        </div>
        <div>
            <div class="flex flex-row bg-yellow-300 justify-between items-center rounded-t-lg p-3">
                <h1 class="font-semibold">Overview Course Approval</h1>
                <div class="flex justify-end md:block">
                    <button type="button" data-modal-toggle="Reject" class="bg-red-600 text-white items-center rounded-lg p-2 mr-3">
                        <i class="las la-times pr-2"></i>
                        Reject
                    </button>
                    <button type="button" data-modal-toggle="Approve" class="bg-zinc-800 text-yellow-300 items-center rounded-lg p-2">
                        <i class="las la-check pr-2"></i>
                        Approve
                    </button>
                    {{-- begin::ModalApprove --}}
                    <div id="Approve" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="Approve">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <form action="{{ route('approve', ['payment_id' => $payment->id]) }}" method="POST">
                                    @csrf
                                    <div class="p-6 text-center">
                                        <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to approve this course ?</h3>
                                        <button data-modal-toggle="Approve" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Yes, I'm sure
                                        </button>
                                        <button data-modal-toggle="Approve" type="button" class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- end::ModalApprove --}}
                    {{-- begin::ModalReject --}}
                    <div id="Reject" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="Reject">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <form action="{{ route('reject', ['payment_id' => $payment->id]) }}" method="POST">
                                    @csrf
                                    <div class="p-6 text-center">
                                        <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to reject this course ?</h3>
                                        <button data-modal-toggle="Reject" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Yes, I'm sure
                                        </button>
                                        <button data-modal-toggle="Reject"  class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- end::ModalReject --}}
                </div>
            </div>
            <div class="bg-black">
                <div class="p-5">
                    <h1 class="text-white text-xl font-semibold mb-6">Detail Transaction</h1>
                    <div class="grid grid-cols-12 mb-6">
                        <h1 class="col-span-3 md:col-span-3 text-gray-500">Name</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{ $payment->user->name }}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-6">
                        <h1 class="col-span-3 md:col-span-3 text-gray-500">Date</h1>
                        {{-- <h1 class="col-span-8 md:col-span-9 text-white">13/05/2022</h1> --}}
                        <h1 class="col-span-8 md:col-span-9 text-white">{{ date('d/m/Y', strtotime($payment->order_date)) }}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-6">
                        <h1 class="col-span-3 md:col-span-3 text-gray-500">Course</h1>
                        <div class="col-span-4 md:col-span-2 text-white">
                            <ul class="list-disc text-white text-sm md:text-base text-left ml-5 ">
                                @foreach ($payment->payment_detail as $pd)
                                    <li>{{ $pd->course->name }}</li>

                                @endforeach
                                {{-- <li>Anatomi II</li>
                                <li>Nutrisi I</li>
                                <li>Nutrisi II</li>
                                <li>Level III</li> --}}
                            </ul>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <ul class="text-yellow-300 text-sm md:text-base text-right">
                                @foreach ($payment->payment_detail as $pd)
                                    <li>Rp</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <ul class="text-yellow-300 text-sm md:text-base text-right">
                                @foreach ($payment->payment_detail as $pd)
                                    <li>{{ $pd->course->price }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 mb-6">
                        <h1 class="col-span-3 md:col-span-3 text-gray-500">Total Bill</h1>
                        <h1 class="col-span-8 md:col-span-9 text-yellow-300">Rp. {{number_format($payment->total_price,0,',','.')}}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-6">
                        <h1 class="col-span-3 md:col-span-3 text-gray-500">Status</h1>
                        <h1 class="col-span-8 md:col-span-9 text-white">{{ ($payment->status == "waiting" ? "Not Yet Paid" : ($payment->status == "pending" ? "Waiting for Confirmation" : ($payment->status == "success" ? "Successful" : "Reject")))}}</h1>
                    </div>
                    <div class="grid grid-cols-12 mb-6">
                        <h1 class="col-span-3 md:col-span-3 text-gray-500">Evidence of Transfer</h1>
                        <img src="{{ url($payment->proof ?? '#') }}" class="col-span-8 md:col-span-9 rounded-lg w-64 h-64" alt="image payment proof">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin::modal -->
    <!-- begin::modalChangePWD -->
    <div id="changePWD" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-full">
        <div class="relative p-4 w-full max-w-sm  h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-zinc-800 rounded-xl shadow">
                <!-- Modal body -->
                <div class="rounded-r-xl">
                    <div class="flex flex-col">
                        <div class="self-end p-2">
                            <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="changePWD">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        <div class="p-5">
                            <h1 class="text-4xl text-white font-bold py-2">Change Password</h1>
                            <h1 class="text-white text-sm font-light">Input your new password</h1>
                        </div>
                        <div class="p-5">
                            <form>
                                <div class="mb-6">
                                    <div class="py-2" x-data="{ show: true }">
                                        <div class="relative">
                                            <input placeholder="Current Password" :type="show ? 'password' : 'text'" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white  focus:border-gray-600 focus:outline-none">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                    </path>
                                                </svg>

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                                    <path fill="currentColor"
                                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="py-2" x-data="{ show: true }">
                                        <div class="relative">
                                            <input placeholder="New Password" :type="show ? 'password' : 'text'" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white  focus:border-gray-600 focus:outline-none">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                    </path>
                                                </svg>

                                                <svg class="h-6 text-gray-700" fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                                    <path fill="currentColor"
                                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full px-5 py-2.5 text-center">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modalChangePWD -->
    <!-- end::modal -->

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</body>
</html>
