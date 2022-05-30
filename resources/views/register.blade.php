<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col md:flex-row">
        <div class="md:relative md:w-2/5">
            <div class="md:h-screen shadow-lg md:fixed">
                <img src="assets/img/login.png" class="m-auto h-full"/>
            </div>
        </div>
        <div class="md:w-3/5 md:h-screen ">
            <div class="p-10 md:pl-44 md:pr-30 bg-zinc-800">
                <div class="pb-5">
                    <h1 class="text-4xl text-white font-bold py-2">Create New Account</h1>
                    <h1 class="text-white text-sm font-light">Complete data bellow to create your account</h1>
                </div>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <select id="role_id" name="role_id" class="bg-gray-50 border rounded-lg border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected hidden>Select Role</option>
                            @foreach ($role as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="name" name="name" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" required>
                    </div>
                    <div class="mb-6">
                        <input type="email" id="email" name="email" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@fitness.com" required>
                    </div>
                    <div class="mb-6">
                        <input type="password" id="password" name="password" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required  minlength="8" maxlength="8" pattern="[0-9+-*]{13,13}">
                    </div>
                    <div class="mb-6">
                        <select id="gender" name="gender" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected hidden>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="age" name="age" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Age" required>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="phone" name="phone" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone Number" required>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="nik" name="nik" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Identity Number (NIK)" required>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="education" name="education" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Education" required>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="work" name="work" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Work" required>
                    </div>
                    <div class="mb-6">
                        <textarea type="text" name="address" id="address" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Address" required></textarea>
                    </div>
                    <div class="flex">
                        <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full px-5 py-2.5 text-center">Create Account</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
</html>
