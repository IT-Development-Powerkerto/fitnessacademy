<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Session</title>
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
<body>

    <livewire:trainer.navbar-trainer />

    <!-- begin::AddCourse -->
    <div class="py-10 bg-zinc-800">
        <div class="container mx-auto px-10 md:px-10">
            <div class="flex flex-row items-center pb-10">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="{{ route('course.show', ['course' => $course_id]) }}" class="text-white text-sm hover:text-yellow-300">Detail Course</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/addSession" class="text-white text-sm hover:text-yellow-300">Add Session</a>
            </div>
            <div class="bg-yellow-300 rounded-t-lg p-3">
                <h1 class="font-semibold">Add Session</h1>
            </div>
            <div class="bg-black rouned-b-lg p-10">
                {{-- <form action=""> --}}
                <form method="POST" action="{{ route('session.store', ['course' => $course_id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <input type="text" id="name" name="name" value="{{old('name')}}" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Session Name" required>
                    </div>
                    <div class="mb-6">
                        <div class="relative">
                            <input datepicker type="text" name="date_session" id="date_session" value="{{old('date_session')}}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Schedule">
                            <div class="absolute inset-y-0 left-0 flex items-center justify-end w-full pointer-events-none pr-2.5">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 flex flex-row justify-between gap-3">
                        <input type="time" id="start_time" name="start_time"  value="{{old('start_time')}}" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Time" required>
                        <input type="time" id="finish_time" name="finish_time"  value="{{old('finish_time')}}" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Time" required>
                    </div>
                    <div class="mb-6">
                        <select id="link_yes" name="link_yes" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected hidden>Will the training be conducted online? (Yes/No)</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="link_session" name="link_session" value="{{old('link_session')}}" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Link Session" required>
                        <h1 class="text-gray-500 text-sm mt-1">Fill in the following column if the training will be do online</h1>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="day" name="day" value="{{old('day')}}" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Schedule" required>
                    </div>

                    <h1 class="text-white mb-6">Materi</h1>

                    <div class="mb-6 repeater" id="group_a">
                        <div data-repeater-list="group_a">
                            <div data-repeater-item="" class="flex flex-row gap-4">
                                <input type="file" id="file" name="file" value="{{old('file')}}" accept="image/*,.pdf" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full mt-6" placeholder="Image Trainer" required>
                                <button type="button" class="text-white rounded-lg mt-6" data-repeater-delete>
                                    <i class="las la-times"></i>
                                </button>
                            </div>
                        </div>
                        <button type="button" class="text-yellow-300 border border-yellow-300 border-dashed rounded-lg p-2 mt-4" data-repeater-create="">
                            <i class="las la-plus"></i>
                            add Another Materi
                        </button>
                    </div>

                    <h1 class="text-white mb-6">Assignment</h1>

                    <div class="mb-6">
                        <select id="link_yes_one" name="link_yes_one" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected hidden>Will you add a assignment? (Yes;No)</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="link_assignment" name="link_assignment" value="{{old('link_assignment')}}" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Link Assignment" required>
                    </div>

                    {{-- {{dd($course_id)}} --}}
                    <input type="text" value="{{$course_id}}" name="course_id" hidden>

                    <div class="flex flex-row justify-center md:justify-end gap-4 mt-10">
                        <a href="/userProfile" class="text-white rounded-lg bg-transparent hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Cancel</a>
                        <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Save Changes</button>
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
        $(document).ready(function () {
            $('.repeater').repeater({
                // (Optional)
                // start with an empty list of repeaters. Set your first (and only)
                // "data-repeater-item" with style="display:none;" and pass the
                // following configuration flag
                initEmpty: false,
                defaultValues: {
                    'text-input': 'foo'
                },
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if(confirm('Are you sure you want to delete this materi?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
                isFirstItemUndeletable: true
            })
        });
    </script>

    <script>
        $(function() {
            $('#link_session').attr('disabled', true);
            $('#link_session').val('No');
            $('#link_yes').change(function() {
                var pilih = $('#link_yes').val();
                if (pilih == 'No') {
                    $('#link_session').attr('disabled', true);
                    $('#link_session').val();
                } else {
                    $('#link_session').attr('disabled', false);
                }
            });
        });
    </script>
    <script>
        $(function() {
            $('#link_assignment').attr('disabled', true);
            $('#link_assignment').val('No');
            $('#link_yes_one').change(function() {
                var pilih = $('#link_yes_one').val();
                if (pilih == 'No') {
                    $('#link_assignment').attr('disabled', true);
                    $('#link_assignment').val();
                } else {
                    $('#link_assignment').attr('disabled', false);
                }
            });
        });
    </script>
</body>
</html>
