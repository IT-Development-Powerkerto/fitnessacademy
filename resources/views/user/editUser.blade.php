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
                    <form action="{{route('userProfile.update',['userProfile'=>$my->id])}}" method="POST" class="flex flex-col px-10" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <a href="#" class="flex self-center py-10"><img id="coverPreview" src="{{asset($my->image  ?? 'assets/img/Choaches/Tanjung.png')}}" class="w-52 h-52 rounded-lg" alt=""></a>
                        <input type="file" id="image" name="image" style="display: none;" />
                        <div class="flex flex-row gap-4">
                            <div class="w-full">
                                <div class="mb-6">
                                    <input type="text" name="name" id="name" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" value="{{$my->name}}" required>
                                </div>
                                <div class="mb-6">
                                    <input type="email" name="email" id="email" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@fitness.com" value="{{$my->email}}" required>
                                </div>
                                <div class="mb-6">
                                    <select name="gender" id="gender" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option selected value="{{$my->gender}}" hidden>{{$my->gender}}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="age" id="age" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Age" value="{{$my->age}}" required>
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="mb-6">
                                    <input type="text" name="phone" id="phone" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone Number" value="{{$my->phone}}" required>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="nik" id="nik" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Identity Number (NIK)" value="{{$my->nik}}" required>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="education" id="education" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Education" value="{{$my->education}}" required>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="work" id="work" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Work" value="{{$my->work}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <textarea type="text" name="address" id="address" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Address" required>{{$my->address}}</textarea>
                        </div>
                        <div class="flex flex-row justify-center md:justify-end gap-4">
                            <a href="/userProfile" class="text-white rounded-lg bg-transparent hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Cancel</a>
                            <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Save Changes</button>
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
    <script>
        let coverPreview = document.getElementById('coverPreview');
        let cover = document.getElementById('image');

        coverPreview.addEventListener('click', _ => image.click());

        cover.addEventListener("change", _ => {
            let file = image.files[0];
            let reader = new FileReader();
            reader.onload = function() {
                coverPreview.src = reader.result;
            }
            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>
