<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Academy</title>
    <link rel="icon" href="{{asset('assets/img/logo.png')}}">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
</head>
<body>

    <livewire:user.navbar-user />
    <div class="py-10 bg-zinc-800 h-screen">
        <!-- begin::Payment -->
        <div class="bg-zinc-800">
            <div class="mx-auto container">
                <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                    <h1 class="font-semibold text-xl ml-5">Payment</h1>
                    {{-- <form action="{{route('upload.uploadImage', ['id'=>$payment->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf --}}
                    @if ($payment->status == 'pending' || $payment->status == 'success' )

                    @else
                    <button type="button" data-modal-toggle="trans" class="text-yellow-300 bg-zinc-800 hover:bg-zinc-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                        <div class="mr-2">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.999 0H1.99902C0.896023 0 -0.000976562 0.897 -0.000976562 2V14C-0.000976562 15.103 0.896023 16 1.99902 16H17.999C19.102 16 19.999 15.103 19.999 14V2C19.999 0.897 19.102 0 17.999 0ZM4.49902 3C4.89685 3 5.27838 3.15804 5.55968 3.43934C5.84099 3.72064 5.99902 4.10218 5.99902 4.5C5.99902 4.89782 5.84099 5.27936 5.55968 5.56066C5.27838 5.84196 4.89685 6 4.49902 6C4.1012 6 3.71967 5.84196 3.43836 5.56066C3.15706 5.27936 2.99902 4.89782 2.99902 4.5C2.99902 4.10218 3.15706 3.72064 3.43836 3.43934C3.71967 3.15804 4.1012 3 4.49902 3ZM9.99902 13H2.99902L6.99902 8L8.49902 10L11.499 6L16.999 13H9.99902Z" fill="#F7E03C"/>
                        </svg>
                        </div>
                        Upload Evidence of Transfer

                    </button>

                    @endif
                    {{-- </form> --}}

                    <!-- Main modal -->
                    <div id="trans" tabindex="-1" aria-hidden="true" class="backdrop-blur-md bg-black bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-yellow-300 rounded-lg shadow h-full">
                                <!-- Modal header -->
                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Upload Evidence of Transfer
                                    </h3>
                                    {{-- <button type="button" class="text-gray-400 bg-transparent hover:bg-yellow-400 hover:text-gray-900 rounded-full text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="trans">
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9998 0.666748C8.87484 0.666748 0.666504 8.87508 0.666504 19.0001C0.666504 29.1251 8.87484 37.3334 18.9998 37.3334C29.1248 37.3334 37.3332 29.1251 37.3332 19.0001C37.3332 8.87508 29.1248 0.666748 18.9998 0.666748ZM25.1782 15.1784C25.4818 14.8641 25.6498 14.4431 25.646 14.0061C25.6422 13.5691 25.4669 13.1511 25.1579 12.8421C24.8489 12.533 24.4308 12.3578 23.9938 12.354C23.5568 12.3502 23.1358 12.5182 22.8215 12.8217L18.9998 16.6434L15.1782 12.8217C15.0244 12.6626 14.8405 12.5356 14.6372 12.4482C14.4338 12.3609 14.2151 12.3149 13.9938 12.313C13.7725 12.3111 13.5531 12.3532 13.3482 12.437C13.1434 12.5208 12.9573 12.6446 12.8008 12.8011C12.6444 12.9576 12.5206 13.1437 12.4368 13.3485C12.353 13.5533 12.3108 13.7728 12.3128 13.9941C12.3147 14.2154 12.3607 14.4341 12.448 14.6374C12.5353 14.8408 12.6623 15.0247 12.8215 15.1784L16.6432 19.0001L12.8215 22.8217C12.6623 22.9755 12.5353 23.1594 12.448 23.3627C12.3607 23.5661 12.3147 23.7848 12.3128 24.0061C12.3108 24.2274 12.353 24.4468 12.4368 24.6517C12.5206 24.8565 12.6444 25.0426 12.8008 25.1991C12.9573 25.3556 13.1434 25.4793 13.3482 25.5631C13.5531 25.6469 13.7725 25.6891 13.9938 25.6872C14.2151 25.6852 14.4338 25.6393 14.6372 25.5519C14.8405 25.4646 15.0244 25.3376 15.1782 25.1784L18.9998 21.3567L22.8215 25.1784C23.1358 25.482 23.5568 25.65 23.9938 25.6462C24.4308 25.6424 24.8489 25.4671 25.1579 25.1581C25.4669 24.8491 25.6422 24.4311 25.646 23.9941C25.6498 23.5571 25.4818 23.1361 25.1782 22.8217L21.3565 19.0001L25.1782 15.1784Z" fill="#23272C"/>
                                        </svg>

                                    </button> --}}
                                    <button type="button" class="text-yellow-300 hover:bg-gray-200 hover:text-gray-900 rounded-full bg-black text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="trans">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="flex p-6 bg-zinc-800 flex-col h-60 rounded-b-lg">
                                    <form action="{{route('upload.uploadImage', ['id'=>$payment->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="mb-20">
                                                <label class="block mb-2 text-sm font-medium text-white dark:text-gray-300" for="file_input">Upload Evidence of Transfer</label>
                                                <input name="proof" id="proof" accept="image/*" type="file" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                            </div>
                                            <div class="flex flex-row justify-center md:justify-end gap-4 mt-10 bg-zinc-800">
                                                <button type="button" data-modal-toggle="trans" class="text-white rounded-lg bg-transparent hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Cancel</button>
                                                <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Submit</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     {{-- end::modal --}}

                </div>
                <div class="bg-black rounded-b-lg py-10 rounded-b-xl items-center justify-center flex flex-col gap-4">
                    <h2 class="text-white font-semibold text-xl">Payment Accepted Here</h2>
                    <div class="w-64 h-64 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="object-cover w-64 h-64 rounded-t-lg  md:rounded-none md:rounded-l-lg" src="{{asset('assets/img/FPA_IG6 2.png')}}" alt="">
                    </div>
                    <button type="button" data-modal-toggle="imageFull" class="text-dark bg-white hover:bg-white focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                        <div class="mr-2">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 0L14.8 2.3L11.91 5.17L13.33 6.59L16.2 3.7L18.5 6V0H12.5ZM0.5 6L2.8 3.7L5.67 6.59L7.09 5.17L4.2 2.3L6.5 0H0.5V6ZM6.5 18L4.2 15.7L7.09 12.83L5.67 11.41L2.8 14.3L0.5 12V18H6.5ZM18.5 12L16.2 14.3L13.33 11.41L11.91 12.83L14.8 15.7L12.5 18H18.5V12Z" fill="#23272C"/>
                            </svg>
                        </div>
                        See Full Image
                    </button>
                    <!-- Main modal -->
                    <div id="imageFull" tabindex="-1" aria-hidden="true" class="backdrop-blur-md bg-black bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Full Image
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="imageFull">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="flex justify-center items-center p-6">
                                    <img src="{{asset('assets/img/FPA_IG6 2.png')}}" class="rounded-lg w-64 h-64 text-center" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                     {{-- end::modal --}}

                    <div class="mt-10">
                        <h2 class="text-white font-semibold text-base">Or pay the account by bank transfer to :</h2>
                    </div>
                    <div class="mt-5 w-96 h-20 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-row justify-between gap-1 items-center p-4 px-5">
                        <div>
                                <img class="object-cover rounded-t-lg  md:rounded-none md:rounded-l-lg" src="{{asset('assets/img/BCA.png')}}" alt="">
                            </div>
                            <div>
                                <h2 class="font-semibold text-sm">Kreatif Fitnes Cemerlang</h2>
                                <h2 class="font-semibold text-sm">146 835 3333</h2>

                            </div>
                        </div>
                    </div>
                    <h2 class="text-white font-thin italic text-xl">PAY NOW</h2>
                    <h2 class="text-white font-thin italic text-xl">SAVE MORE</h2>
                </div>


            </div>
        </div>
        <!-- end::Payment -->

        <!-- begin::Order Date -->
        <div class="py-10 bg-zinc-800 px-20">
            <div class="flex flex-row gap-10">
                <div class="mx-auto container">
                    <h2 class="text-white text-xl">Course Ordered</h2>


                </div>
                <div class="mx-auto container">

                    @foreach ( $payment->payment_detail as $pd )
                    <div class="text-white text-xl">
                       <li>{{$pd->course->name}}</li>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="flex flex-row gap-10">
                <div class="mx-auto container">

                    <h2 class="text-white text-xl mt-5">Order Date</h2>
                    <h2 class="text-white text-xl mt-5">Your Bill is</h2>
                    <h2 class="text-white text-xl mt-5">Your Payment Status is </h2>

                </div>
                <div class="mx-auto container">


                    <h2 class="text-white text-xl mt-5">{{date('d/m/Y', strtotime($payment->order_date))}}</h2>
                    <h2 class="text-yellow-200 font-semibold mt-5 text-xl">{{'Rp. '.number_format($payment->total_price,0,',','.')}}</h2>

                   @if ($payment->status == "waiting")
                   <div class="border-dashed border-yellow-400 border-2 flex flex-col justify-center p-5 my-5">
                       <h2 class="text-yellow-400 font-semibold text-xl">Not Yet Paid</h2>
                       <h2 class="text-white text-xl">Please make payment and upload your evidence of payment</h2>
                   </div>

                   @elseif ($payment->status == "pending")
                   <div class="border-dashed border-blue-700 border-2 flex flex-col justify-center p-5 my-5">
                       <h2 class="text-blue-700 font-semibold text-xl">Waiting for Confirmation</h2>
                       <h2 class="text-white text-xl">Please wait for this process, it may take a few minutes</h2>
                   </div>


                   @elseif ($payment->status == "success")
                   <div class="border-dashed border-green-400 border-2 flex flex-col justify-center p-5 my-5">
                       <h2 class="text-green-400 font-semibold text-xl">Successful</h2>
                       <h2 class="text-white text-xl">Your payment has been completed, thank you</h2>
                   </div>

                   @else
                   <div class="border-dashed border-red-600 border-2 flex flex-col justify-center p-5 my-5">
                       <h2 class="text-red-600 font-semibold text-xl">Reject</h2>
                       <h2 class="text-white text-xl">Please reupload your evidence of payment</h2>
                   </div>
                   @endif



                </div>
            </div>

        </div>
        <!-- begin::Order Date -->

        {{-- <!-- begin::Order History -->
        <div class="py-10 bg-zinc-800">
            <div class="mx-auto container">
                <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                    <h1 class="font-semibold text-xl ml-5">Order History</h1>

                </div>
                <div class="bg-black rounded-b-lg">
                    <div class="relative overflow-auto max-h-80 px-5">
                        <table class="w-full text-left table-auto">
                            <thead class="text-gray-500">
                                <tr class="whitespace-nowrap">
                                    <th scope="col" class="px-3 py-3">Name</th>
                                    <th scope="col" class="px-3 py-3">Course</th>
                                    <th scope="col" class="px-3 py-3">Nominal</th>
                                    <th scope="col" class="px-3 py-3">Evidence of Transfer</th>
                                    <th scope="col" class="px-3 py-3">Status</th>
                                    <th scope="col" class="px-3 py-3 text-right">Date</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach ( $p as $p )


                                <tr class="whitespace-nowrap">
                                    <td class="px-3 py-4">{{$p->user->name}}</td>
                                    <td class="px-3 py-4">
                                        <ul>
                                            @foreach ($p->payment_detail as $pd )
                                                <li>{{$pd->course->name}}</li>

                                            @endforeach
                                        </ul>

                                    </td>
                                    <td class="px-3 py-4">{{'Rp. '.number_format($p->total_price,0,',','.')}}</td>
                                    <td class="px-3 py-4">
                                        <button class="flex justify-center gap-4 w-32 items-center text-gray-800 bg-gray-200 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="defaultModal">
                                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.999 0H1.99902C0.896023 0 -0.000976562 0.897 -0.000976562 2V14C-0.000976562 15.103 0.896023 16 1.99902 16H17.999C19.102 16 19.999 15.103 19.999 14V2C19.999 0.897 19.102 0 17.999 0ZM4.49902 3C4.89685 3 5.27838 3.15804 5.55968 3.43934C5.84099 3.72064 5.99902 4.10218 5.99902 4.5C5.99902 4.89782 5.84099 5.27936 5.55968 5.56066C5.27838 5.84196 4.89685 6 4.49902 6C4.1012 6 3.71967 5.84196 3.43836 5.56066C3.15706 5.27936 2.99902 4.89782 2.99902 4.5C2.99902 4.10218 3.15706 3.72064 3.43836 3.43934C3.71967 3.15804 4.1012 3 4.49902 3ZM9.99902 13H2.99902L6.99902 8L8.49902 10L11.499 6L16.999 13H9.99902Z" fill="#5E6278"/>
                                            </svg>
                                            File
                                        </button>

                                        <!-- Main modal -->
                                        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="backdrop-blur-md bg-black bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow">
                                                    <!-- Modal header -->
                                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Evidence of Transfer
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal">
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="flex justify-center items-center p-6">
                                                        <img src="{{asset($p->proof)}}" class="rounded-lg w-64 h-64 text-center" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="px-3 py-4">Successful</td>
                                    <td class="px-3 py-4 flex justify-end">{{date('d/m/Y', strtotime($payment->order_date))}}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- end::Order History --> --}}
    </div>

        <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
