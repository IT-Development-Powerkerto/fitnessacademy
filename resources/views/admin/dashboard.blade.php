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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">

    @livewireStyles
</head>
<body>

    <livewire:admin.navbar />

    <div class="py-10 bg-zinc-800">
        <div class="px-10">

            {{-- beggin::TrainerApproval --}}
            <div class="py-10">
                <div class="bg-yellow-300 rounded-t-lg p-3">
                    <h1 class="font-semibold">Trainer Approval</h1>
                </div>
                <div class="bg-black rounded-b-lg relative overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-gray-500">
                                <th scope="col" class="px-3 py-3">No</th>
                                <th scope="col" class="px-3 py-3">Name</th>
                                <th scope="col" class="px-3 py-3">Email</th>
                                <th scope="col" class="px-3 py-3">Phone</th>
                                <th scope="col" class="px-3 py-3">Gender</th>
                                <th scope="col" class="px-3 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">1</td>
                                <td class="px-3 py-4">Dr. Tanjung Subrata, Mrepo, ABAARM</td>
                                <td class="px-3 py-4">tanjung.subrata@gmail.com</td>
                                <td class="px-3 py-4">0813273122123</td>
                                <td class="px-3 py-4">Male</td>
                                <td class="px-3 py-4">
                                    <button id="dropdownDefault" data-dropdown-toggle="dropdownTrainerApproval" class="text-white col-span-3 bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Action <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownTrainerApproval" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">
                                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">View</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">Approve</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">Reject</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end::TrainerApproval --}}

            {{-- beggin::CourseApproval --}}
            <div class="py-10">
                <div class="bg-yellow-300 rounded-t-lg p-3">
                    <h1 class="font-semibold">Course Approval</h1>
                </div>
                <div class="bg-black rounded-b-lg relative overflow-auto max-h-80">
                    <table class="w-full text-left">
                        <thead class="text-gray-500">
                            <tr class="whitespace-nowrap">
                                <th scope="col" class="px-3 py-3">No</th>
                                <th scope="col" class="px-3 py-3">Name</th>
                                <th scope="col" class="px-3 py-3">Course</th>
                                <th scope="col" class="px-3 py-3">Nominal</th>
                                <th scope="col" class="px-3 py-3">Evidence of Transfer</th>
                                <th scope="col" class="px-3 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">1</td>
                                <td class="px-3 py-4">Mira Philips</td>
                                <td class="px-3 py-4">Nutrisi Dasar I, Nutrisi Dasar II, Level III</td>
                                <td class="px-3 py-4">Rp 3.000.000</td>
                                <td class="px-3 py-4">
                                    <button class="flex justify-center gap-2 items-center text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="defaultModal">
                                        <i class="lar la-image"></i>
                                        Image
                                    </button>
                                    {{-- begin::modal --}}
                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="bg-black bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
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
                                <td class="px-3 py-4">
                                    <button id="dropdownDefault" data-dropdown-toggle="dropdownCourseApproval" class="text-white col-span-3 bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Action <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownCourseApproval" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">
                                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">View</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">Approve</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">Reject</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end::CourseApproval --}}

            {{-- beggin::Student --}}
            <div class="py-10">
                <div class="bg-yellow-300 rounded-t-lg p-3">
                    <h1 class="font-semibold">Student</h1>
                </div>
                <div class="bg-black rounded-b-lg relative overflow-auto max-h-80">
                    <table class="w-full text-left">
                        <thead class="text-gray-500">
                            <tr class="whitespace-nowrap">
                                <th scope="col" class="px-3 py-3">No</th>
                                <th scope="col" class="px-3 py-3">Name</th>
                                <th scope="col" class="px-3 py-3">Email</th>
                                <th scope="col" class="px-3 py-3">Phone</th>
                                <th scope="col" class="px-3 py-3">Gender</th>
                                <th scope="col" class="px-3 py-3">Age</th>
                                <th scope="col" class="px-3 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">1</td>
                                <td class="px-3 py-4">James Donin</td>
                                <td class="px-3 py-4">Donin@gmail.com</td>
                                <td class="px-3 py-4">0816276122123</td>
                                <td class="px-3 py-4">Male</td>
                                <td class="px-3 py-4">28</td>
                                <td class="px-3 py-4">
                                    <button id="dropdownDefault" data-dropdown-toggle="dropdownStudent" class="text-white col-span-3 bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Action <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownStudent" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">
                                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">View</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-white hover:bg-gray-100">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end::Student --}}

            {{-- beggin::Course --}}
            <div class="py-10">
                <div class="bg-yellow-300 rounded-t-lg p-3">
                    <h1 class="font-semibold">Course</h1>
                </div>
                <div class="bg-black rounded-b-lg relative overflow-auto max-h-80">
                    <table class="w-full text-left">
                        <thead class="text-gray-500">
                            <tr class="whitespace-nowrap">
                                <th scope="col" class="px-3 py-3">Course Name</th>
                                <th scope="col" class="px-3 py-3">Level</th>
                                <th scope="col" class="px-3 py-3">Trainer</th>
                                <th scope="col" class="px-3 py-3">Total Student</th>
                                <th scope="col" class="px-3 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">Dasar Anatomi I</td>
                                <td class="px-3 py-4">I</td>
                                <td class="px-3 py-4">Dr. Tanjung Subrata, Mrepo, ABAARM</td>
                                <td class="px-3 py-4">30</td>
                                <td class="px-3 py-4">
                                    <a href="#" class="bg-yellow-300 hover:bg-yellow-400 rounded-lg text-gray-400 text-center px-5 py-2">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end::Course --}}

        </div>
    </div>




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>
