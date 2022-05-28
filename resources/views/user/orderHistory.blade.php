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


      <!-- begin::Order History -->
      <div class="py-10 bg-zinc-800 h-screen">
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
                            @foreach ( $p as $p )


                            <tr class="whitespace-nowrap">
                                <td class="px-3 py-4">
                                    <a href="{{route('payment.index', ['id'=>$p->id])}}">{{$p->user->name}}</a>
                                </td>
                                <td class="px-3 py-4">
                                    <ul>
                                        @foreach ($p->payment_detail as $pd )
                                            <li>{{$pd->course->name}}</li>

                                        @endforeach
                                    </ul>

                                </td>
                                <td class="px-3 py-4">{{'Rp. '.number_format($p->total_price,0,',','.')}}</td>
                                <td class="px-3 py-4">
                                    <button class="flex justify-center gap-4 w-32 items-center text-gray-800 bg-gray-200 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="defaultModal{{$p->id}}">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.999 0H1.99902C0.896023 0 -0.000976562 0.897 -0.000976562 2V14C-0.000976562 15.103 0.896023 16 1.99902 16H17.999C19.102 16 19.999 15.103 19.999 14V2C19.999 0.897 19.102 0 17.999 0ZM4.49902 3C4.89685 3 5.27838 3.15804 5.55968 3.43934C5.84099 3.72064 5.99902 4.10218 5.99902 4.5C5.99902 4.89782 5.84099 5.27936 5.55968 5.56066C5.27838 5.84196 4.89685 6 4.49902 6C4.1012 6 3.71967 5.84196 3.43836 5.56066C3.15706 5.27936 2.99902 4.89782 2.99902 4.5C2.99902 4.10218 3.15706 3.72064 3.43836 3.43934C3.71967 3.15804 4.1012 3 4.49902 3ZM9.99902 13H2.99902L6.99902 8L8.49902 10L11.499 6L16.999 13H9.99902Z" fill="#5E6278"/>
                                        </svg>
                                        File
                                    </button>
                                    {{-- begin::modal --}}
                                    <!-- Main modal -->
                                    <div id="defaultModal{{$p->id}}" tabindex="-1" aria-hidden="true" class="backdrop-blur-md bg-black bg-opacity-75 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow">
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Evidence of Transfer
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal{{$p->id}}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                @if ($p->proof == null)
                                                <div class="flex justify-center items-center p-6">
                                                    <h1 class="text-zinc-800 font-semibold">Sorry You Haven't Uploaded Proof of Transfer</h1>

                                                </div>

                                                @else
                                                <div class="flex justify-center items-center p-6">

                                                    <img src="{{asset($p->proof)}}" class="rounded-lg w-64 h-64 text-center" alt="">

                                                </div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end::modal --}}
                                </td>
                                @if ($p->status == 'waiting')

                                <td class="px-3 py-4">Not Yet Paid</td>
                                @elseif ($p->status == 'pending')
                                <td class="px-3 py-4">Waiting for Confirmation</td>
                                @else
                                <td class="px-3 py-4">Successful</td>


                                @endif
                                <td class="px-3 py-4 flex justify-end">{{date('d/m/Y', strtotime($p->order_date))}}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- end::Order History -->



    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
