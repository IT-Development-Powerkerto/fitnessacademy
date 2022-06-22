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

    <div class="py-10 bg-zinc-800 h-full">
        <div class="container mx-auto px-10 md:px-10">

            {{-- beggin::TrainerApproval --}}
            <div class="py-10">
                <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between">
                    <h1 class="font-semibold">Trainer Approval</h1>
                    <div class="flex flex-row items-center gap-2">
                        <i class="las la-history text-xl mt-1"></i>
                        <a href="{{route('trainerApprovalHistory')}}" class="font-bold text-black underline underline-offset-4">History Approval</a>
                    </div>
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
                                <th scope="col" class="px-3 py-3">Status</th>
                                <th scope="col" class="px-3 py-3 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @forelse ( $trainers as $t )


                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">{{$loop->iteration}}</td>
                                <td class="px-3 py-4">{{$t->user->name}}</td>
                                <td class="px-3 py-4">{{$t->user->email}}</td>
                                <td class="px-3 py-4">{{$t->user->phone}}</td>
                                <td class="px-3 py-4">{{$t->user->gender}}</td>
                                <td class="px-3 py-4">
                                    @if($t->status == 'IN WAITING')
                                    <span class="text-blue-700">IN WAITING</span>
                                    @elseif ($t->status == 'APPROVED')
                                    <span class="text-green-500">APPROVED</span>
                                    @else
                                    <span class="text-red-700">REJECTED</span>
                                    @endif
                                </td>
                                <td class="px-3 py-4 flex justify-end">
                                    <button data-dropdown-toggle="dropdownTrainerApproval{{$t->id}}" class="text-white col-span-3 bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Action <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownTrainerApproval{{$t->id}}" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">
                                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                                            <li>
                                                <a href="{{ route ('profile', ['id' => $t->id]) }}" class="block px-4 py-2 text-white">View</a>
                                            </li>
                                            <li>
                                                <button type="button" data-modal-toggle="ApproveTrainer{{$t->id}}" class="block px-4 py-2 text-white">Approve</button>
                                            </li>
                                            <li>
                                                <button type="button" data-modal-toggle="RejectTrainer{{$t->id}}" class="block px-4 py-2 text-white">Reject</button>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- begin::ModalApprove --}}
                                    <div id="ApproveTrainer{{$t->id}}" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="ApproveTrainer{{$t->id}}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <form action="{{route('approveTrainer', ['trainer_id'=>$t->id])}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="p-6 text-center">
                                                        <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                        <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to approve this trainer ?</h3>
                                                        <button data-modal-toggle="ApproveTrainer{{$t->id}}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Yes, I'm sure
                                                        </button>
                                                        <button data-modal-toggle="ApproveTrainer{{$t->id}}"  class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end::ModalApprove --}}
                                    {{-- begin::ModalReject --}}
                                    <div id="RejectTrainer{{$t->id}}" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="RejectTrainer{{$t->id}}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <form action="{{route('rejectTrainer', ['trainer_id'=>$t->id])}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="p-6 text-center">
                                                        <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                        <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to reject this trainer ?</h3>
                                                        <button data-modal-toggle="RejectTrainer{{$t->id}}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Yes, I'm sure
                                                        </button>
                                                        <button data-modal-toggle="RejectTrainer{{$t->id}}"  class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end::ModalReject --}}
                                </td>
                            @empty
                                <td colspan="7" class="px-3 py-4 text-center">
                                    No Data Available
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end::TrainerApproval --}}

            {{-- beggin::CourseApproval --}}
            <div class="py-10">
                <div class="bg-yellow-300 rounded-t-lg p-3 flex flex-row justify-between">
                    <h1 class="font-semibold">Course Approval</h1>
                    <div class="flex flex-row items-center gap-2">
                        <i class="las la-history text-xl mt-1"></i>
                        <a href="{{ route('courseApprovalHistory')}}" class="font-bold text-black underline underline-offset-4">History Approval</a>
                    </div>
                </div>
                <div class="bg-black rounded-b-lg">
                    <div class="relative overflow-auto max-h-80">
                        <table class="w-full text-left">
                            <thead class="text-gray-500">
                                <tr class="whitespace-nowrap">
                                    <th scope="col" class="px-3 py-3">No</th>
                                    <th scope="col" class="px-3 py-3">Payment ID</th>
                                    <th scope="col" class="px-3 py-3">Name</th>
                                    <th scope="col" class="px-3 py-3">Course</th>
                                    <th scope="col" class="px-3 py-3">Nominal</th>
                                    <th scope="col" class="px-3 py-3">Evidence of Transfer</th>
                                    <th scope="col" class="px-3 py-3 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @forelse ($payments as $p )


                                <tr class="whitespace-nowrap">
                                    <td class="px-3 py-4">{{$loop->iteration}}</td>
                                    <td class="px-3 py-4">{{$p->order_id}}</td>
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
                                                        <img src="{{$p->proof}}" class="rounded-lg w-64 h-64 text-center" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end::modal --}}
                                    </td>
                                    <td class="px-3 py-4 flex justify-end">
                                        <button id="dropdownDefault" data-dropdown-toggle="dropdownCourseApproval{{ $p->id }}" class="text-white col-span-3 bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Action <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownCourseApproval{{ $p->id }}" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">

                                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                                                <li>
                                                    <a href="{{ route('course.approval', ['payment_id' => $p->id]) }}" class="block px-4 py-2 text-white">View</a>
                                                </li>
                                                <li>
                                                    <button type="button" data-modal-toggle="ApproveCourse{{ $p->id }}" class="block px-4 py-2 text-white">Approve</button>
                                                </li>
                                                <li>
                                                    <button type="button" data-modal-toggle="RejectCourse{{ $p->id }}" class="block px-4 py-2 text-white">Reject</button>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- begin::ModalApprove --}}
                                        <div id="ApproveCourse{{ $p->id }}" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="ApproveCourse{{ $p->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </button>
                                                    {{-- <form> --}}
                                                    <form action="{{route('approve', ['payment_id'=>$p->id])}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="p-6 text-center">
                                                            <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                            <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to approve this course ?</h3>
                                                            <button data-modal-toggle="ApproveCourse{{ $p->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-toggle="ApproveCourse{{ $p->id }}" type="button" class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end::ModalApprove --}}
                                        {{-- begin::ModalReject --}}
                                        <div id="RejectCourse{{ $p->id }}" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="RejectCourse{{ $p->id }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </button>
                                                    <form action="{{route('reject', ['payment_id'=>$p->id])}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="p-6 text-center">
                                                            <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                            <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to reject this course ?</h3>
                                                            <button data-modal-toggle="RejectCourse{{ $p->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-toggle="RejectCourse{{ $p->id }}" type="button"  class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end::ModalReject --}}
                                    </td>
                                @empty
                                    <td colspan="7" class="px-3 py-4 text-center">
                                        No Data Available
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
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
                                <th scope="col" class="px-3 py-3 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @forelse ( $student as $s )


                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">{{$loop->iteration}}</td>
                                <td class="px-3 py-4">{{$s->user->name}}</td>
                                <td class="px-3 py-4">{{$s->user->email}}</td>
                                <td class="px-3 py-4">{{$s->user->phone}}</td>
                                <td class="px-3 py-4">{{$s->user->gender}}</td>
                                <td class="px-3 py-4">{{$s->user->age}}</td>
                                <td class="px-3 py-4 flex justify-end">
                                    <button id="dropdownDefault" data-dropdown-toggle="dropdownStudent" class="text-white col-span-3 bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Action <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownStudent" class="z-10 hidden bg-yellow-300 divide-y divide-gray-100 rounded shadow w-44">
                                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownDefault">
                                            <li>
                                                <a href="/overviewStudent" class="block px-4 py-2 text-white">View</a>
                                            </li>
                                            <li>
                                                <button type="button" data-modal-toggle="DeleteStudent" class="block px-4 py-2 text-white">Delete</button>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- begin::ModalDelete --}}
                                    <div id="DeleteStudent" tabindex="-1" class="bg-gray-500 bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                            <div class="relative bg-zinc-800 rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="DeleteStudent">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                                <form>
                                                    <div class="p-6 text-center">
                                                        <svg class="mx-auto mb-4 w-14 h-14 text-white dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                        <h3 class="mb-5 text-lg font-normal text-white dark:text-gray-400">Are you sure want to delete ?</h3>
                                                        <button data-modal-toggle="DeleteStudent" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Yes, I'm sure
                                                        </button>
                                                        <button data-modal-toggle="DeleteStudent"  class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No, cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end::ModalDelete --}}
                                </td>
                            @empty
                                <td colspan="7" class="px-3 py-4 text-center">
                                    No Data Available
                                </td>
                            </tr>
                            @endforelse
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
                                <th scope="col" class="px-3 py-3 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @forelse ($courses as $c )

                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">{{$c->name}}</td>
                                @if ($c->level == 'Level 1')
                                <td class="px-3 py-4">I</td>

                                @elseif ($c->level == 'Level 2')
                                <td class="px-3 py-4">II</td>
                                @elseif ($c->level == 'Level 3')
                                <td class="px-3 py-4">III</td>
                                @elseif ($c->level == 'Level 4')
                                <td class="px-3 py-4">IV</td>
                                @elseif ($c->level == 'Level 5')
                                <td class="px-3 py-4">V</td>
                                @elseif ($c->level == 'Level 6')
                                <td class="px-3 py-4">VI</td>

                                @endif
                                <td class="px-3 py-4">{{$c->trainer->name}}</td>
                                <td class="px-3 py-4">{{$c->payment_count}}</td>
                                <td class="px-3 py-4 flex justify-end">
                                    <a href="{{ route ('detailOvervieweCourse.detailOvervieweCourse', ['course' => $c->id]) }}" class="bg-yellow-300 hover:bg-yellow-400 rounded-lg text-white text-center px-5 py-2">View</a>
                                </td>
                                {{-- {{ route ('addSession.addsession', ['id'=>$course_id]) }} --}}
                            @empty
                                <td colspan="5" class="px-3 py-4 text-center">
                                    No Data Available
                                </td>
                            </tr>
                            @endforelse
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
