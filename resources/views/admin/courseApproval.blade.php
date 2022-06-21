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

    <div class="bg-zinc-800 py-10 h-screen ">
        <div class="container mx-auto">
            <div class="flex flex-row py-5 items-center container mx-auto">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/courseApprovalHistory" class="text-white text-sm hover:text-yellow-300">Course Approval History</a>
            </div>
            <div class="py-5">
                <div class="bg-yellow-300 rounded-t-lg p-3">
                    <h1 class="font-semibold">Course Approval History</h1>
                </div>
                <div class="bg-black rounded-b-lg relative overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-gray-500">
                                <th scope="col" class="px-3 py-3">No</th>
                                <th scope="col" class="px-3 py-3">Name</th>
                                <th scope="col" class="px-3 py-3">Course</th>
                                <th scope="col" class="px-3 py-3">Nominal</th>
                                <th scope="col" class="px-3 py-3">Evidence of Transfer</th>
                                <th scope="col" class="px-3 py-3 text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">
                                    <h1 class="text-white">1</h1>
                                </td>
                                <td class="px-3 py-4">
                                    <h1 class="text-white">Zall</h1>
                                </td>
                                <td class="px-3 py-4">
                                    <h1 class="text-white">Zall@zall.com</h1>
                                </td>
                                <td class="px-3 py-4">
                                    <h1 class="text-white">Rp. 3.000.000</h1>
                                </td>
                                <td class="px-3 py-4">
                                    <!-- Modal toggle -->
                                    <button class="flex flex-row items-center gap-2 bg-gray-300 text-gray-400 px-5 py-1 rounded-lg" type="button" data-modal-toggle="viewFile">
                                        <i class="las la-file-image text-xl"></i>
                                        <span>File</span>
                                    </button>
                                </td>
                                <td class="px-3 py-4 text-right">
                                    <h1 class="text-red-600">Rejected</h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Begin::Modal --}}
    {{-- Begin::file --}}
    <!-- Main modal -->
    <div id="viewFile" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="viewFile">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="viewFile" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-toggle="viewFile" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End::file --}}
    {{-- End::Modal --}}

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</body>
</html>
