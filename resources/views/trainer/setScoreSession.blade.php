<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Score Component</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    @livewireStyles
</head>

<body class="bg-zinc-800">

    <livewire:trainer.navbar-trainer />

    <!-- begin::AddCourse -->
    <div class="py-10 bg-zinc-800">
        <div class="px-10">
            <div class="flex flex-row flex-wrap items-center pb-10">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="#" class="text-white text-sm hover:text-yellow-300">Detail Course</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="#" class="text-white text-sm hover:text-yellow-300">Detail Session</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="#" class="text-white text-sm hover:text-yellow-300">Session 1</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/setScoreSession" class="text-white text-sm hover:text-yellow-300">Set Score Component</a>
            </div>
            <div class="bg-yellow-300 rounded-t-lg p-3">
                <h1 class="font-semibold">Set Score Component</h1>
            </div>
            <div class="bg-black rouned-b-lg p-10">
                <form action="">
                    <div class="mb-6 repeater">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="flex flex-row gap-4">
                                <input type="text" id="component" name="component" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full mt-6" placeholder="Component" required>
                                <button type="button" class="text-white rounded-lg mt-6" data-repeater-delete>
                                    <i class="las la-times"></i>
                                </button>
                            </div>
                        </div>
                        <button type="button" class="text-yellow-300 border border-yellow-300 border-dashed rounded-lg p-2 mt-4 md:text-base text-sm" data-repeater-create>
                            <i class="las la-plus"></i>
                            add Another Materi
                        </button>
                    </div>

                    <div class="flex flex-row justify-center md:justify-end gap-4 mt-10">
                        <a href="/userProfile" class="text-white rounded-lg bg-transparent hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Cancel</a>
                        <a href="#" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Save</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end::AddCourse -->




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.5/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js" integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('.repeater').repeater({
                // (Optional)
                // start with an empty list of repeaters. Set your first (and only)
                // "data-repeater-item" with style="display:none;" and pass the
                // following configuration flag
                initEmpty: false,
                defaultValues: {
                    'text-input': 'foo'
                },
                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    if (confirm('Are you sure you want to delete this Component?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
                isFirstItemUndeletable: true
            })
        });
    </script>
</body>

</html>