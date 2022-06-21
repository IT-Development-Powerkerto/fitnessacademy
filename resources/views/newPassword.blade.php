<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="bg-black flex justify-center">
        <img src="assets/img/Logo_lands.png" />
    </div>
    <div class="flex flex-col md:flex-row justify-around p-10">
        <div class="flex flex-col gap-10">
            <div>
                <h1 class="text-3xl font-bold">New Password</h1>
                <p class="font-medium">set your new password here</p>
            </div>
            <div class="flex flex-col gap-5">
                <input class="rounded-full w-80" type="text" placeholder="New Password"></input>
                <input class="rounded-full w-80" type="text" placeholder="Confirm New Password"></input>
            </div>
            <button class="bg-yellow-400 p-1 text-white rounded-full">Save Password</button>
        </div>
        <img src="assets/img/password.png" />
    </div>
</body>

</html>