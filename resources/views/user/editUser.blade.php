<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
            <a href="/userProfile" class="text-white text-sm hover:text-yellow-300">My Profile</a> 
            <i class="las la-angle-right text-white text-sm px-1"></i>
            <a href="/editUser" class="text-white text-sm hover:text-yellow-300">Edit Profile</a> 
        </div>
        <div>
            <div class="flex flex-row bg-yellow-300 justify-between items-center rounded-t-lg p-3">
                <h1 class="font-semibold">Edit Profile</h1>
            </div>
            <div class="bg-black">
                <div class="p-5 ">
                    <form class="flex flex-col px-10">
                        <img src="assets/img/Choaches/Tanjung.png" class="w-52 rounded-lg flex self-center py-10" alt="">
                        <div class="flex flex-row gap-4">
                            <div class="w-full">
                                <div class="mb-6">
                                    <input type="text" id="name" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" required>
                                </div>
                                <div class="mb-6">
                                    <input type="email" id="email" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@fitness.com" required>
                                </div>
                                <div class="mb-6">
                                    <select id="gender" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <input type="text" id="age" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Age" required>
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="mb-6">
                                    <input type="text" id="phone" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone Number" required>
                                </div>
                                <div class="mb-6">
                                    <input type="text" id="nik" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Identity Number (NIK)" required>
                                </div>
                                <div class="mb-6">
                                    <input type="text" id="education" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Education" required>
                                </div>
                                <div class="mb-6">
                                    <input type="text" id="work" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Work" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <textarea type="text" id="address" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Address" required></textarea>
                        </div>
                        <div class="flex flex-row justify-center md:justify-end gap-4">
                            <a href="/userProfile" class="text-white rounded-lg bg-transparent hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Cancel</a>
                            <a href="{{ route('registerSuccess') }}" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Save Changes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    
</body>
</html>