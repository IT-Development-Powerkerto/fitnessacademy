<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
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
    <div class="py-10 bg-zinc-800 h-screen">
        <div class="container mx-auto">
            <div class="flex flex-row items-center pb-10">
                <a href="/dashboard" class="text-white text-sm hover:text-yellow-300">Dashboard</a>
                <i class="las la-angle-right text-white text-sm px-1"></i>
                <a href="/addCourse" class="text-white text-sm hover:text-yellow-300">Create Course</a>
            </div>
            <div class="bg-yellow-300 rounded-t-lg p-3">
                <h1 class="font-semibold">Add Course</h1>
            </div>
            <div class="bg-black rouned-b-lg p-10">
                <form action="{{route('course.store')}}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <input type="text" id="course_name" name="course_name" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Course Name" required>
                    </div>
                    {{-- <div class="mb-6">
                        <input type="text" id="triner_name" name="triner_name" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Trainer" value="{{auth()->user()->name}}" readonly required>
                    </div> --}}
                    <div class="mb-6">
                        <select id="level" name="level" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected hidden>Set Level</option>
                            <option value="Level 1">Level 1</option>
                            <option value="Level 2">Level 2</option>
                            <option value="Level 3">Level 3</option>
                            <option value="Level 4">Level 4</option>
                            <option value="Level 5">Level 5</option>
                            <option value="Level 6">Level 6</option>
                        </select>
                    </div>
                    {{-- <div class="mb-6">
                        <input type="file" id="image" name="image" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Image Trainer" required>
                    </div> --}}

                    <select x-cloak id="select">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                    <div class="mb-6">
                        <div x-data="dropdown()" x-init="loadOptions()" class="w-full flex flex-col items-center mx-auto">
                            <input name="values" type="hidden" x-bind:value="selectedValues()">
                            <div class="inline-block relative w-full">
                                <div class="flex flex-col items-center relative">
                                    <div x-on:click="open" class="w-full  svelte-1l8159u">
                                        <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                                            <div class="flex flex-auto flex-wrap">
                                                <template x-for="(option,index) in selected" :key="options[option].value">
                                                    <div
                                                        class="flex justify-center items-center m-1 font-medium py-1 px-2 rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                                                        <div class="text-xs font-normal leading-none max-w-full flex-initial x-model= options[option]" x-text="options[option].text"></div>
                                                            <div class="flex flex-auto flex-row-reverse">
                                                            <div x-on:click="remove(index,option)">
                                                                <svg class="fill-current h-6 w-6 " role="button" viewBox="0 0 20 20">
                                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                        c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                        l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                        C14.817,13.62,14.817,14.38,14.348,14.849z"
                                                                    />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                                <div x-show="selected.length == 0" class="flex-1">
                                                    <input placeholder="Select an option" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
                                                </div>
                                            </div>
                                            <div
                                                class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

                                                <button type="button" x-show="isOpen() === true" x-on:click="open"
                                                    class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                    <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                        <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                            L17.418,6.109z"
                                                        />
                                                    </svg>
                                                </button>
                                                <button type="button" x-show="isOpen() === false" @click="close"
                                                    class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                        <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                                                            c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                                                            "
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj" x-on:click.away="close">
                                                <div class="flex flex-col w-full">
                                                    <template x-for="(option,index) in options" :key="option">
                                                        <div>
                                                            <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100"
                                                                @click="select(index,$event)">
                                                                <div x-bind:class="option.selected ? 'border-teal-600' : ''" class="flex w-full items-center border-transparent border-l-2 px-3 relative">
                                                                    <div class="w-full items-center flex">
                                                                        <div class="leading-6" x-model="option" x-text="option.text"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 class="text-white mb-6">Pricing</h1>

                    <div class="mb-6">
                        <select id="payment_id" name="payment" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected hidden>Set Regular Price For Free Or Paid</option>
                            <option value="FREE">FREE</option>
                            <option value="PAID">PAID</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="price_id" name="price" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Regular Price (Rp)">
                        <h1 class="text-gray-500 text-sm mt-1">Fill in the column if you choose paid</h1>
                    </div>
                    <div class="mb-6">
                        <input type="text" id="bird_price_id" name="bird_price" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Set Early Bird Price (optional)">
                    </div>
                    {{-- <div class="mb-6">
                        <input type="date" id="period" name="period" class="bg-gray-50 rounded-lg border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Early Bird Period (dd/mm/yyyy - dd/mm/yyyy)" required>
                    </div> --}}
                    <div class="mb-6">
                        <div date-rangepicker class="grid grid-cols-11">
                            <div class="relative col-span-5">
                                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                  </div>
                                  <input id="start_id" name="start_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                              </div>
                            <span class="mx-auto text-gray-500 col-span-1 my-auto">to</span>
                            <div class="relative col-span-5">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                              </div>
                              <input id="end_id" name="end_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                            </div>
                        </div>
                        <h1 class="text-gray-500 text-sm mt-1">After passing the early bird period, the active price will return to the Regular Price.</h1>
                        <div class="flex flex-row justify-center md:justify-end gap-4 mt-10">
                            <a href="/dashboard" class="text-white rounded-lg bg-transparent hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Cancel</a>
                            <button type="submit" class="text-white rounded-lg bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Save Changes</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <!-- end::AddCourse -->




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    {{-- <script src="https://unpkg.com/flowbite@1.4.5/dist/datepicker.js"></script> --}}
    <script src="assets/js/flowbite/dist/datepicker.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js" integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script> --}}
    <script>
        function dropdown() {
            return {
                options: [],
                selected: [],
                show: false,
                open() { this.show = true },
                close() { this.show = false },
                isOpen() { return this.show === true },
                select(index, event) {

                    if (!this.options[index].selected) {

                        this.options[index].selected = true;
                        this.options[index].element = event.target;
                        this.selected.push(index);

                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);


                },
                loadOptions() {
                    const options = document.getElementById('select').options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                        });
                    }


                },
                selectedValues(){
                    return this.selected.map((option)=>{
                        return this.options[option].value;
                    })
                }
            }
        }
    </script>
    {{-- <script>

        var price_id = document.getElementById('price');
        console.log('#price');
        price_id.addEventListener('keyup', function(e) {
            price_id.value = formatDuit(this.value, 'IDR');
        });
        function formatDuit(angka, prefix){
            var number_string = angka.replace(/[^,/d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                rupiah = split[0].substr(sisa).match(/\d{3}/gi);
            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
        }

    </script> --}}

    <script>
        $(function() {
            $('#bird_price_id').attr('disabled', true);
            $('#price_id').attr('disabled', true).val(0);
            $('#start_id').attr('disabled', true);
            $('#end_id').attr('disabled', true);
            $('#payment_id').val('FREE');
            $('#payment_id').change(function() {
                var pilih = $('#payment_id').val();
                if (pilih == 'FREE') {
                    $('#bird_price_id').attr('disabled', true);
                    $('#bird_price_id').val();
                    $('#price_id').attr('disabled', true);
                    $('#price_id').val(0);
                    $('#start_id').attr('disabled', true);
                    $('#start_id').val();
                    $('#end_id').attr('disabled', true);
                    $('#end_id').val();
                } else {
                    $('#bird_price_id').attr('disabled', false);
                    $('#bird_price_id').val();
                    $('#price_id').attr('disabled', false);
                    $('#price_id').val();
                    $('#start_id').attr('disabled', false);
                    $('#start_id').val();
                    $('#end_id').attr('disabled', false);
                    $('#end_id').val();
                }
            });
        });
    </script>
    <script>
        $(function(){
            function formatMoney(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
            }
            $('#bird_price_id, #price_id').on('keyup', function(){
                // var string_price = $('#price_id').val();
                // var price_id = string_price.replace(/[^,\d]/g, '');
                var price_id = formatMoney($('#price_id').val(), 'IDR');
                $('#price_id').val(price_id);
                var bird = formatMoney($('#bird_price_id').val(), 'IDR');
                $('#bird_price_id').val(bird);

                // var str_price_id = price_id.replace(/[^,\d]/g, '');
                // var int_price_id = parseInt(str_price_id);



            });

        });

    </script>
</body>
</html>
