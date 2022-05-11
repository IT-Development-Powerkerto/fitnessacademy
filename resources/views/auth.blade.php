<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <style>
        .bg-image{
            height: 100%;
            weight: 100%;
            background-image: url("assets/img/404.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

</head>
<body>
    <div class="bg-image">
        <div class="px-20 flex flex-col justify-center items-start h-screen">
            <h1 class="text-9xl text-yellow-300 font-bold mb-3">404</h1>
            <h3 class="text-lg text-white">Hello, we have a problem.</h3>
            <p class="text-sm text-white mb-5">Actually, the page you are looking for does not exist.</p>
            <a href="/" class="bg-red-600 rounded-xl text-white text-center py-2 px-5">Go Back</a>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>