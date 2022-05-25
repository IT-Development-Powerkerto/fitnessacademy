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
    <div class="py-10 bg-zinc-800 h-screen">
        <!-- begin::Payment -->
        <div class="bg-zinc-800">
            <div class="px-10">
                <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between items-center">
                    <h1 class="font-semibold text-xl ml-5">Payment</h1>
                    <label class="text-yellow-300 bg-zinc-800 hover:bg-zinc-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
                        <div class="mr-2">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.999 0H1.99902C0.896023 0 -0.000976562 0.897 -0.000976562 2V14C-0.000976562 15.103 0.896023 16 1.99902 16H17.999C19.102 16 19.999 15.103 19.999 14V2C19.999 0.897 19.102 0 17.999 0ZM4.49902 3C4.89685 3 5.27838 3.15804 5.55968 3.43934C5.84099 3.72064 5.99902 4.10218 5.99902 4.5C5.99902 4.89782 5.84099 5.27936 5.55968 5.56066C5.27838 5.84196 4.89685 6 4.49902 6C4.1012 6 3.71967 5.84196 3.43836 5.56066C3.15706 5.27936 2.99902 4.89782 2.99902 4.5C2.99902 4.10218 3.15706 3.72064 3.43836 3.43934C3.71967 3.15804 4.1012 3 4.49902 3ZM9.99902 13H2.99902L6.99902 8L8.49902 10L11.499 6L16.999 13H9.99902Z" fill="#F7E03C"/>
                        </svg>
                        </div>
                        Upload Evidence of Transfer
                        <input type="file" accept="image/*" class="hidden">

                    </label>

                </div>
                <div class="bg-black rounded-b-lg py-10 rounded-b-xl items-center justify-center flex flex-col gap-4">
                    <h2 class="text-white font-semibold text-xl">Payment Accepted Here</h2>
                    <div class="w-64 h-64 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="object-cover w-64 h-64 rounded-t-lg  md:rounded-none md:rounded-l-lg" src="assets/img/FPA_IG6 2.png" alt="">
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
                                <img src="assets/img/login.png" class="rounded-lg w-64 h-64 text-center" alt="">
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
                                <img class="object-cover rounded-t-lg  md:rounded-none md:rounded-l-lg" src="assets/img/BCA.png" alt="">
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
        <div class="py-10 bg-zinc-800">
            <div class="flex flex-row gap-10">
                <div class="px-10">
                    <h2 class="text-white text-xl">Order Date</h2>
                    <h2 class="text-white text-xl mt-5">Your Bill is</h2>
                    <h2 class="text-white text-xl mt-5">Your Payment Status is </h2>

                </div>
                <div class="px-10">
                    <h2 class="text-white text-xl">13/05/2022</h2>
                    <h2 class="text-yellow-200 font-semibold mt-5 text-xl">Rp 3.997.000</h2>
                    <div class="border-dashed border-white border-2 flex flex-col justify-center p-5 my-5">
                        <h2 class="text-red-600 font-semibold text-xl">Not Yet Paid</h2>
                        <h2 class="text-white text-xl">Please make payment and upload your evidence of payment</h2>
                    </div>

                    <div class="border-dashed border-white border-2 flex flex-col justify-center p-5 my-5">
                        <h2 class="text-blue-700 font-semibold text-xl">Waiting for Confirmation</h2>
                        <h2 class="text-white text-xl">Please wait for this process, it may take a few minutes</h2>
                    </div>

                    <div class="border-dashed border-white border-2 flex flex-col justify-center p-5 my-5">
                        <h2 class="text-green-400 font-semibold text-xl">Successful</h2>
                        <h2 class="text-white text-xl">Your payment has been completed, thank you</h2>
                    </div>

                </div>
            </div>

        </div>
        <!-- begin::Order Date -->

        <!-- begin::Order History -->
        <div class="py-10 bg-zinc-800">
            <div class="px-10">
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
                                <tr class="whitespace-nowrap">
                                    <td class="px-3 py-4">Josh Doe</td>
                                    <td class="px-3 py-4">Nutrisi Dasar I, Nutrisi Dasar II, Level III</td>
                                    <td class="px-3 py-4">Rp 3.000.000</td>
                                    <td class="px-3 py-4">
                                        <button class="flex justify-center gap-4 w-32 items-center text-gray-800 bg-gray-200 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="defaultModal">
                                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.999 0H1.99902C0.896023 0 -0.000976562 0.897 -0.000976562 2V14C-0.000976562 15.103 0.896023 16 1.99902 16H17.999C19.102 16 19.999 15.103 19.999 14V2C19.999 0.897 19.102 0 17.999 0ZM4.49902 3C4.89685 3 5.27838 3.15804 5.55968 3.43934C5.84099 3.72064 5.99902 4.10218 5.99902 4.5C5.99902 4.89782 5.84099 5.27936 5.55968 5.56066C5.27838 5.84196 4.89685 6 4.49902 6C4.1012 6 3.71967 5.84196 3.43836 5.56066C3.15706 5.27936 2.99902 4.89782 2.99902 4.5C2.99902 4.10218 3.15706 3.72064 3.43836 3.43934C3.71967 3.15804 4.1012 3 4.49902 3ZM9.99902 13H2.99902L6.99902 8L8.49902 10L11.499 6L16.999 13H9.99902Z" fill="#5E6278"/>
                                            </svg>
                                            File
                                        </button>
                                        {{-- begin::modal --}}
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
                                                        <img src="assets/img/login.png" class="rounded-lg w-64 h-64 text-center" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end::modal --}}
                                    </td>
                                    <td class="px-3 py-4">Successful</td>
                                    <td class="px-3 py-4 flex justify-end">13/05/2021</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- end::Order History -->
    </div>

        <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>