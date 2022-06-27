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

    <div class="bg-zinc-800 py-10 h-screen">
        <div class="container mx-auto px-10 md:px-10">
            <div class="py-5">
                <div class="flex flex-row py-5 items-center container mx-auto px-10 md:px-10">
                    <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                    <i class="las la-angle-right text-white text-sm px-1"></i>
                    <a href="/trainerApprovalHistory" class="text-white text-sm hover:text-yellow-300">Trainer Approval History</a>
                </div>
                <div class="bg-yellow-300 rounded-t-lg p-3">
                    <h1 class="font-semibold">Trainer Approval History</h1>
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
                                <th scope="col" class="px-3 py-3 text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @forelse ($trainers as $trainer)
                                <tr class="whitespace-nowrap">
                                    <td class="px-3 py-4">
                                        <h1 class="text-white">{{ $loop->iteration }}</h1>
                                    </td>
                                    <td class="px-3 py-4">
                                        <h1 class="text-white">{{ $trainer->user->name }}</h1>
                                    </td>
                                    <td class="px-3 py-4">
                                        <h1 class="text-white">{{ $trainer->user->email }}</h1>
                                    </td>
                                    <td class="px-3 py-4">
                                        <h1 class="text-white">{{ $trainer->user->phone }}</h1>
                                    </td>
                                    <td class="px-3 py-4">
                                        <h1 class="text-white">{{ $trainer->user->gender }}</h1>
                                    </td>
                                    <td class="px-3 py-4">
                                        @if ($trainer->status == 'APPROVED')
                                            <h1 class="text-green-600 text-right">{{ $trainer->status }}</h1>
                                        @else
                                            <h1 class="text-red-600 text-right">{{ $trainer->status }}</h1>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-white text-center px-3 py-4">No Data Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</body>
</html>
