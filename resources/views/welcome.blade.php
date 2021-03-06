<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fitness Academy</title>
    <link rel="icon" href="assets/img/logo.png">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireStyles
</head>
<body>
    <livewire:lp.navbar />
    @if($errors->any())

        <div id="alert-2" class="flex p-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                {{ $errors->first() }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    @endif
    @if (session()->has('success'))

        <div id="alert-3" class="flex p-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                {{ session('success') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    @endif

    <div id="home">
        <!-- begin::header -->
        <div class="bg-zinc-800 py-10">
            <div class="container mx-auto px-10 md:px-0" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="flex flex-col-reverse md:flex-row">
                    <div class="py-10 text-center md:text-left md:basis-3/6 md:self-center">
                        <h1 class="text-white text-3xl font-bold md:text-4xl">Welcome to Fitness Plus Academy</h1>
                        <h1 class="text-sm text-gray-300 py-10">We support you with the knowledge to improve your skills and abilities, deliver results to your customers, and  help you expand your sales and marketing knowledge to increase your income.</h1>
                        <div class="flex flex-col md:flex-row">
                            <a href="#course" class="bg-yellow-300 px-10 py-3 rounded-md hover:bg-yellow-400 hover:text-white">View Course</a>
                            <a href="#contact" class="px-10 py-3 bg-transparent rounded-md hover:bg-yellow-300 text-yellow-300 hover:text-white">Register Now</a>
                        </div>
                    </div>
                    <div class="md:basis-3/6 flex justify-center md:justify-end">
                        <img src="assets/img/Hero/Academy-Fitness-Plus.png" class="w-5/6" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- end::header -->

        <!-- begin:about -->
        <div class="bg-zinc-800 py-10" id="about">
            <div class="container mx-auto px-10 md:px-0">
                <h1 class="text-white text-2xl font-bold">About Us</h1>
                <div class="py-5">
                    <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                        <h1 class="font-bold">VISI</h1>
                    </div>
                    <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg">
                        <h1 class="text-white">Melalui pelatihan terstruktur dan pendidikan lebih lanjut berdasarkan pengetahuan ilmiah, menjadikan pelatih kebugaran sebagai profesi kesehatan yang diakui dan sejajar dengan profesi kesehatan lainnya.</h1>
                    </div>
                </div>

                <div class="flex flex-col-reverse md:flex-row">
                    <div class="basis-3/6 py-5 md:py-0 md:pr-10" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h1 class="text-white text-justify">
                            Seiring pertumbuhan pasar klub kebugaran dan semakin menjanjikan, kebutuhan akan klub dan pelatih berkualitas meningkat. Program pendidikan dan pelatihan yang terakreditasi masih kurang memadai dari segi kuantitas dan kualitas, terutama yang berkaitan dengan ilmu dan praktik yang mudah  dipahami  serta waktu pelatihan yang terbatas.
                        </h1>
                        <br>
                        <h1 class="text-white text-justify">
                            Fitness Plus Academy bertujuan untuk memberikan solusi bagi siapa saja yang ingin memasuki industri kebugaran, baik dalam  materi dasar maupun baru yang sejalan dengan tren saat ini. Fitness Plus Academy menganalisis, mengkategorikan, dan merangkum kebutuhan  materi yang berkembang pesat ke dalam paket pelatihan kualitatif dan efisien terbaru untuk mencapai hasil kepuasan pelanggan dan meningkatkan penjualan.
                        </h1>
                    </div>
                    <div class="basis-3/6" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="assets/img/About/imageOne.png" class="w-full h-96 rounded" alt="">
                    </div>
                </div>
                <div class="flex flex-col-reverse md:flex-row mt-10">
                    <div class="basis-3/6 py-5 md:py-0 md:pr-10" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h1 class="text-white text-justify">
                            Fitness Plus Academy ingin komunitas kebugaran atau pelatih kebugaran dapat mengikuti formulasi mereka dengan konten yang efisien, tepat waktu, dan kaya. Pelatih yang menyampaikan ilmu dalam pelatihan ini memiliki keterampilan dan pengalaman  tinggi lebih dari 10 tahun di industri kebugaran, sehingga merupakan keuntungan untuk berpartisipasi di Akademi Fitness Plus.
                        </h1>
                        <br>
                        <h1 class="text-white text-justify">
                            Fitness Plus Academy akan terus berkembang untuk menjadikan dunia pelatihan  lebih luas dan terstruktur, dan kedepannya kami berencana untuk memberikan pelatihan yang setara dengan Diploma 1 dan lainnya. Memungkinkan lulusan untuk memiliki  lebih banyak keterampilan, bersaing dengan persyaratan pengetahuan saat ini dan masa depan, dan memperoleh keterampilan pemasaran, penjualan, dan manajemen yang tidak ditemukan dalam kursus pelatihan lain. Fitness Plus Academy merancang kursus pelatihan yang mencakup pengetahuan kunci dalam bentuk pengetahuan medis dasar: anatomi, fisiologi, nutrisi, dan aplikasi dalam bentuk biomekanik, hormon, dan suplemen makanan. Pelaksanaan program Fitness Plus Academy dapat diterapkan pada pelatihan pribadi, program kompetisi, dan pelatihan  olahraga lainnya.
                        </h1>
                    </div>
                    <div class="basis-3/6" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="assets/img/About/imageTwo.png" class="w-full h-96 rounded" alt="">
                    </div>
                </div>
                <h1 class="text-white text-justify mt-5">Fitness Plus Academy dinaungi oleh pengajar-pengajar yang memiliki kompetensi tinggi seperti dr. Tanjung Subrata, M. Repro, ABAARM., dr. Phaidon L. Toruan, M.M., Dr. Harryadin Mahardika, S.E., M.M., atlet internasional Nicolas Iong Lee, dan Fitnesspreneur Dith Satyawan.</h1>
            </div>
        </div>
        <!-- end::about -->

        <!-- begin:::course -->
        <div class="bg-zinc-800 py-10" id="course">
            <div class="container mx-auto px-10 md:px-0" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div>
                    <h1 class="text-white text-2xl font-bold text-center">Course</h1>
                    <h1 class="text-white text-sm text-center mt-5">
                        We support you with the knowledge to improve your skills and abilities, deliver results to your customers, and  help you expand your sales and marketing knowledge to increase your income.
                    </h1>
                </div>
                <div class="grid grid-rows-1 md:grid-cols-3 gap-3 py-10">
                    <div>
                        <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                            <h1 class="font-bold text-center">Level I (Online)</h1>
                        </div>
                        <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg h-40">
                            <ul class="text-white list-disc ml-5">
                                <li>Basic Anatomy</li>
                                <li>Basic Physiology</li>
                                <li>Basic Nutrition</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                            <h1 class="font-bold text-center">Level II (Online)</h1>
                        </div>
                        <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg h-40">
                            <ul class="text-white list-disc ml-5">
                                <li>Anatomy and Biomechanics</li>
                                <li>Resistance Training Programs</li>
                                <li>Intermediate Nutrition</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                            <h1 class="font-bold text-center">Level III (Ofline)</h1>
                        </div>
                        <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg h-40">
                            <ul class="text-white list-disc ml-5">
                                <li>Resistance Training Practice</li>
                                <li>Nutrition Practice and Medical Fitness Testing</li>
                                <li>Personal Training Management</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                            <h1 class="font-bold text-center">Level IV (Online)</h1>
                        </div>
                        <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg h-40">
                            <ul class="text-white list-disc ml-5">
                                <li>Exercise and Endocrine Systems</li>
                                <li>Exercise Medicine</li>
                                <li>Advance Nutrition</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                            <h1 class="font-bold text-center">Level V (Online)</h1>
                        </div>
                        <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg h-40">
                            <ul class="text-white list-disc ml-5">
                                <li>Aerobic Training and Cardiorespiratory Endurance</li>
                                <li>Stretching and Flexibility</li>
                                <li>Functional Training</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                            <h1 class="font-bold text-center">Level VI (Online)</h1>
                        </div>
                        <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg h-40">
                            <ul class="text-white list-disc ml-5">
                                <li>Basic Life Support and First Aid Training (additional certificate)</li>
                                <li>Functional Training Practice</li>
                                <li>Motivation, Businesses Management and Fitnesspreneur</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-black px-3 py-5 rounded-lg">
                    <h1 class="text-white list-disc ml-5" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <span><i class="las la-check pr-3"></i></span>
                        We offer you a practical knowledge with solid scientific background, and deliver to you in simple Indonesian language in three (3) days.
                    </h1>
                </div>
                <div class="bg-black px-3 py-5 rounded-lg mt-5" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h1 class="text-white list-disc ml-5">
                        <span><i class="las la-check pr-3"></i></span>
                        We are not world's best, but we give you our best knowledge to help you increase competencies in order to help you increase your income up to 10 times.
                    </h1>
                </div>
            </div>
        </div>
        <!-- end:::course -->

        <!-- begin::warning -->
        <div>
            <div class="bg-red-600">
                <h1 class="text-white text-xl text-center font-semibold py-5">!!! Seats are limited to 30 persons so, stop waiting and start <a href="/register" class="underline font-bold">register</a> now !!!</h1>
            </div>
        </div>
        <!-- end::warning -->

        <!-- begin::price -->
        <div class="bg-gradient-to-b from-zinc-800 via-zinc-400 to-zinc-800 py-10">
            <div class="container mx-auto px-10 md:px-0" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div>
                    <h1 class="text-center text-5xl md:text-7xl font-bold text-white">Are You Ready ?</h1>
                    <h1 class="text-center text-lg text-white opacity-40 p-5">FITNESS PLUS INDONESIA will be held through three stages</h1>
                </div>
                <div class="py-5">
                    <div>
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-white dark:text-gray-400" id="tabs">
                            <li class="mr-2">
                                <a href="#academy-one" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-400 hover:border-blue-400 group" id="default-tab">
                                    <i class="las la-dumbbell self-center pr-2"></i> Level 1
                                </a>
                            </li>
                            <li class="mr-2">
                                <a href="#academy-two" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-400 hover:border-blue-400 group">
                                    <i class="las la-dumbbell self-center pr-2"></i> Level 2
                                </a>
                            </li>
                            <li class="mr-2">
                                <a href="#academy-third" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-400 hover:border-blue-400 group">
                                    <i class="las la-dumbbell self-center pr-2"></i> Level 3
                                </a>
                            </li>
                        </ul>
                        <div id="tab-contents">
                            <div id="academy-one">
                                <div class="flex flex-col md:flex-row justify-between">
                                    <div>
                                        <div class="bg-black p-10 mt-5 rounded-tr-xl rounded-tl-xl">
                                            <h1 class="text-white font-bold text-xl">Anatomi Dasar I</h1>
                                            <h4 class="text-white font-light text-sm">dr. Tanjung Subrata, M. Repro, ABAARM.</h4>
                                        </div>
                                        <div class="bg-zinc-900 p-10">
                                            <div>
                                                <h1 class="text-white opacity-25 py-2">Mei 2022 Minggu ke-2</h1>
                                                <h1 class="text-white opacity-25">Workshops Virtual (link akan di informasikan)  ONLINE METODE</h1>
                                            </div>
                                            <h1 class="text-yellow-300 text-2xl font-bold py-2">FREE</h1>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="bg-black p-10 mt-5 rounded-tr-xl rounded-tl-xl">
                                            <h1 class="text-white font-bold text-xl">Nutrisi Dasar I</h1>
                                            <h4 class="text-white font-light text-sm">dr. Phaidon L. Toruan, M.M.</h4>
                                        </div>
                                        <div class="bg-zinc-900 p-10">
                                            <div>
                                                <h1 class="text-white opacity-25 py-2">Mei 2022 Minggu ke-3</h1>
                                                <h1 class="text-white opacity-25">Workshops Virtual (link akan di informasikan)  ONLINE METODE</h1>
                                            </div>
                                            <h1 class="text-yellow-300 text-2xl font-bold py-2">FREE</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="academy-two" class="hidden">
                            <div class="flex flex-col md:flex-row justify-between">
                                    <div>
                                        <div class="bg-black p-10 mt-5 rounded-tr-xl rounded-tl-xl">
                                            <h1 class="text-white font-bold text-xl">Anatomi Dasar II</h1>
                                            <h4 class="text-white font-light text-sm">dr. Tanjung Subrata, M. Repro, ABAARM.</h4>
                                        </div>
                                        <div class="bg-zinc-900 p-10">
                                            <div>
                                                <h1 class="text-white opacity-25 py-2">Mei 2022 Minggu ke-2</h1>
                                                <h1 class="text-white opacity-25">Workshops Virtual (link akan di informasikan)  ONLINE METODE</h1>
                                            </div>
                                            <h1 class="text-yellow-300 text-2xl font-bold py-2">Rp 499.000</h1>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="bg-black p-10 mt-5 rounded-tr-xl rounded-tl-xl">
                                            <h1 class="text-white font-bold text-xl">Nutrisi Dasar II</h1>
                                            <h4 class="text-white font-light text-sm">dr. Phaidon L. Toruan, M.M.</h4>
                                        </div>
                                        <div class="bg-zinc-900 p-10">
                                            <div>
                                                <h1 class="text-white opacity-25 py-2">Mei 2022 Minggu ke-3</h1>
                                                <h1 class="text-white opacity-25">Workshops Virtual (link akan di informasikan)  ONLINE METODE</h1>
                                            </div>
                                            <h1 class="text-yellow-300 text-2xl font-bold py-2">Rp 499.000</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="academy-third" class="hidden">
                                <div class="bg-black p-10 mt-5 rounded-tr-xl rounded-tl-xl">
                                    <div>
                                        <h1 class="text-white font-bold text-xl">Level III</h1>
                                        <ul class="list-disc text-white p-5 grid grid-cols-1 md:grid-cols-4 gap-5">
                                            <li>Praktek</li>
                                            <li>Digital Marketing</li>
                                            <li>Prepare Competition</li>
                                            <li>Design Program Latihan</li>
                                            <li>Biohecanical</li>
                                            <li>Sales dan Marketing</li>
                                            <li>Nutrisi</li>
                                            <li>Anatomi</li>
                                        </ul>
                                    </div>
                                    <div class="py-5">
                                        <h1 class="text-white">Narasumber :</h1>
                                        <ol class="list-decimal text-white px-5 py-2">
                                            <li>dr. Tanjung Subrata, M. Repro, ABAARM.</li>
                                            <li>dr. Phaidon L. Toruan, M.M.</li>
                                            <li>Dr. Harryadin Mahardika, S.E., M.M.</li>
                                            <li>Nicolas Iong Lee ( Muscle Mania Word champion)</li>
                                            <li>Dith Satyawan ( Fitnesspreneur)</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="bg-zinc-900 p-10">
                                    <div>
                                        <h1 class="text-white opacity-25">23 - 25 Juni 2022</h1>
                                        <h1 class="text-white opacity-25 py-5">OFFLINE MODE / TATAP MUKA</h1>
                                        <h1 class="text-white opacity-25">Fitness Plus Marlboro : Jl. Mahendrata Selatan no 199</h1>
                                    </div>
                                    <div class="flex flex-row py-5">
                                        <div class="flex flex-col">
                                            <h1 class="text-white opacity-25">Early bird price</h1>
                                            <h1 class="text-yellow-300 text-xl md:text-2xl font-bold">Rp 2.999.000</h1>
                                        </div>
                                        <div class="flex flex-col ml-10">
                                            <h1 class="text-white opacity-25">Regular price</h1>
                                            <h1 class="text-yellow-300 text-xl md:text-2xl font-bold">Rp 3.499.000</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::price -->

        <!-- begin::coaches -->
        <div class="bg-zinc-800 py-10" id="coaches">
            <div class="container mx-auto px-10 md:px-0" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h1 class="text-white text-2xl font-bold text-center">Coaches</h1>
                <div class="flex flex-col md:flex-row justify-around mt-10">
                    <img src="assets/img/Choaches/Choaches1.png" alt="">
                    <img src="assets/img/Choaches/Choaches2.png" alt="">
                </div>
            </div>
        </div>
        <!-- end::coaches -->

        <!-- begin::gallery -->
        <div class="bg-zinc-800 py-10" id="gallery">
            <div class="container mx-auto px-10 md:px-0" data-aos="fade-zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h1 class="text-white text-2xl font-bold text-center">Gallery</h1>
                <div class="mt-10">
                    <div class="grid grid-cols-2 md:flex md:flex-row gap-7 flex-wrap justify-center">
                        <img src="assets/img/Gallery/1.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/2.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/3.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/4.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/5.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/6.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/7.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/8.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/9.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/10.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/11.png" class="w-60 h-36" alt="">
                        <img src="assets/img/Gallery/12.png" class="w-60 h-36" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- end::gallery -->

        <!-- begin::footer -->
        <div class="bg-black py-5" id="contact">
            <div class="container mx-auto px-10 md:px-0 mt-5 items-center">
                <h1 class="text-white text-4xl font-bold">Contact Us</h1>
                <div class="flex flex-col md:flex-row md:justify-between mt-5 md:h-64">
                    <div class="md:w-3/5 w-full py-5 md:py-0">
                        <div class="mb-6 flex flex-row gap-4">
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Name">
                            <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Email">
                        </div>
                        <div class="mb-6">
                            <textarea id="message" cols="30" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Message" ></textarea>
                        </div>
                        <button id="send" class="text-white bg-zinc-800 hover:bg-zinc-600 focus:ring-4 focus:outline-none focus:ring-black font-medium  text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </div>
                    <div class="flex flex-col md:mb-32">
                        <div class="md:text-right">
                            <h1 class="text-white text-lg font-semibold uppercase">Promo DM or Chat only</h1>
                            <h1 class="text-white text-lg font-semibold">081245690803</h1>
                        </div>
                        <div class="md:mt-28">
                            <h1 class="text-white text-lg font-medium md:text-right mt-10 md:mt-0">Follow Us</h1>
                            <div class="flex flex-row gap-4 mt-3 md:justify-end">
                                <a href="">
                                    <img src="assets/img/Ic_SocialMedia/youtube.png" class="w-7" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/img/Ic_SocialMedia/facebook.png" class="w-7" alt="">
                                </a>
                                <a href="https://instagram.com/fitnessplus.academy?igshid=YmMyMTA2M2Y=">
                                    <img src="assets/img/Ic_SocialMedia/instagram.png" class="w-7" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/img/Ic_SocialMedia/twitter.png" class="w-7" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::footer -->

    </div>


    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/js/tabs.js"></script>
    <script>
        $(function(){
            $('#send').click(function(){
                var name    = $('#name').val()
                var email   = $('#email').val()
                var message = $('#message').val()
                window.location.href='https://wa.me/6282145690803?text=Hello,%20I%20am%20'+ name + '%20and%20I%20wanted%20to%20know%20more%20about%20Fitness%20Academy.%20Would%20You%20mind%20to%20assist%20me.'
            })
        })
    </script>
</body>
</html>
