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
    
    @livewireStyles
</head>
<body>
    <livewire:lp.navbar /> 

    <div id="home">
        <!-- begin::header -->
        <div class="bg-zinc-800 py-10">
            <div class="mx-auto container">
                <div class="flex flex-col-reverse md:flex-row">
                    <div class="py-10 text-center md:text-left md:basis-3/6 md:self-center">
                        <h1 class="text-white text-3xl font-bold md:text-4xl">Welcome to Fitness Plus Academy</h1>
                        <h1 class="text-sm text-gray-300 py-10">We serve you with knowledge to help you increase your skill, competencies to give results to your clients and tobhelp you increase your sales and marketing knowledge to increse your income.</h1>
                        <a href="#" class="bg-yellow-300 px-10 py-3 rounded-md hover:bg-yellow-400 hover:text-white">View Course</a>
                    </div>
                    <div class="md:basis-3/6 flex justify-end">
                        <img src="assets/img/Hero/Academy-Fitness-Plus.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- end::header -->
    
        <!-- begin:about -->
        <div class="bg-zinc-800 py-10" id="about">
            <div class="mx-auto container">
                <h1 class="text-white text-2xl font-bold">About Us</h1>
                <div class="py-5">
                    <div class="bg-yellow-300 p-3 rounded-tl-lg rounded-tr-lg">
                        <h1 class="font-bold">VISI</h1>
                    </div>
                    <div class="bg-black px-3 py-5 rounded-bl-lg rounded-br-lg">
                        <h1 class="text-white">Menjadikan pelatih kebugaran menjadi bagian dari profesi kesehatan yang diakui dan setara dgn profesi kesehatan lainnya, melalui pendidikan dan pelatihan yang terstruktur berdasarkan keilmuan dan pengetahuan ilmiah.</h1>
                    </div>
                </div>
        
                <div class="flex flex-col-reverse md:flex-row">
                    <div class="basis-3/6 py-5 md:py-0 md:pr-10">
                        <h1 class="text-white text-justify">
                            Melihat semakin besarnya potensi pasar klub kebugaran sehingga meningkatkan kebutuhan akan klub dan pelatih yang berkualitas. Kenyataannya keberadaan pelatihan sertifikasi masih belum banyak, baik dalam kuantitas dan atau kualitas khususnya yang berhubungan dengan ilmu yang ilmiah tapi mudah dimengerti dan dipraktekkan, serta waktu pelatihan yang terbatas. 
                        </h1>
                        <br>
                        <h1 class="text-white text-justify">
                            Fitness plus academy ingin memberikan solusi pada anda yang sangat tertarik untuk masuk dalam industri Fitness, berupa materi baik yang mendasar maupun yang baru,  yang sesuai dengan trend kelinian. Fitness plus academy menganalisa, memilah-milah dan merangkum  kebutuhan - kebutuhan materi yang berkembangan pesat, dan  memformulasikan dalam sebuah kemasan pelatihan kekinian yang berkualitas dan efisien serta akan membantu memberikan hasil kepuasan pelanggan sehingga meningkatkan pendapatan. 
                        </h1>
                    </div>
                    <div class="basis-3/6">
                        <img src="assets/img/About/imageOne.png" class="w-full" alt="">
                    </div>
                </div>
                <div class="flex flex-col-reverse md:flex-row mt-10">
                    <div class="basis-3/6 py-5 md:py-0 md:pr-10">
                        <h1 class="text-white text-justify">
                            Fitness Plus academy ingin agar masyarakat fitness atau pelatih kebugaran bisa mengikuti  formulasi  tersebut dengan efisien waktu yang tepat, padat berisi, dan anda akan sangat beruntung karena para pengajar yang membagikan ilmu dalam pelatihan ini memiliki kompetensi tinggi serta pengalaman di industri fitness lebih dari 10 tahun. 
                        </h1>
                        <br>
                        <h1 class="text-white text-justify">
                        Fitness Plus Academy akan terus mengembangkan dunia pelatihan menjadi lebih luas, lebih terstruktur dan kedepan bisa memiliki pelatihan setara diploma 1 dan seterusnya. Sehingga lulusannya memiliki kemampuan yang lebih dan bersaing  dengan kebutuhan ilmu yang di butuhkan saat ini dan yang akan datang , dan memiliki kemampuan marketing, sales, management yang tidak dimiliki pelatihan lain. Fitness Plus Academy mendesain pelatihan yang berisikan ilmu utama berupa ilmu dasar kedokteran yakni anatomi,  fisiologi dan nutrisi, serta aplikasinya dalam bentuk ilmu biomekanik, hormon, dan suplementasi. Implementasi program Fitness Plus Academy bisa diterapkan untuk pelatihan personal training, program kompetisi, dan pelatihan untuk olahraga lain. 
                        </h1>
                    </div>
                    <div class="basis-3/6">
                        <img src="assets/img/About/imageTwo.png" class="w-full" alt="">
                    </div>
                </div>
                <h1 class="text-white text-justify mt-5">Fitness Plus  Academy di gawangi oleh pengajar2 yang memiliki kompetensi tinggi seperti dr. Tandjung, dr. Phaidon, Dr. Hariadin mahardika, atlit  international Nicholas yang, dan fitnesspreneur Dith satyawan.</h1>
            </div>
        </div>
        <!-- end::about -->
    
        <!-- begin:::course -->
        <div class="bg-zinc-800 py-10" id="course">
            <div class="mx-auto container">
                <div>
                    <h1 class="text-white text-2xl font-bold text-center">Course</h1>
                    <h1 class="text-white text-sm text-center mt-5">
                        We serve you with knowledge to help you increase your skill, competencies to give results to your clients and tobhelp you increase your sales and marketing knowledge to increse your income 
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
                    <h1 class="text-white list-disc ml-5">
                        <span><i class="las la-check pr-3"></i></span>
                        We offer you a practical knowledge with solid scientific background, and deliver to you in simple Indonesian language in three (3) days.
                    </h1>
                </div>
                <div class="bg-black px-3 py-5 rounded-lg mt-5">
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
                <h1 class="text-white text-xl text-center font-semibold py-5">!!! Seats are limited to 30 persons so, stop waiting and start <a href="#" class="underline font-bold">register</a> now !!!</h1>
            </div>
        </div>
        <!-- end::warning -->
    
        <!-- begin::price -->
        <div class="bg-gradient-to-b from-zinc-800 via-zinc-400 to-zinc-800 py-10">
            <div class="mx-auto container">
                <div>
                    <h1 class="text-center text-7xl font-bold text-white">Are You Ready ?</h1>
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
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <div class="bg-black p-10 mt-5 rounded-tr-xl rounded-tl-xl">
                                            <h1 class="text-white font-bold text-xl">Anatomi Dasar I</h1>
                                            <h4 class="text-white font-light text-sm">dr Tanjung Subrata, MRepro, ABAARM</h4>
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
                                            <h4 class="text-white font-light text-sm">dr Phaidon Toruan MM</h4>
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
                            <div class="flex flex-row justify-between">
                                    <div>
                                        <div class="bg-black p-10 mt-5 rounded-tr-xl rounded-tl-xl">
                                            <h1 class="text-white font-bold text-xl">Anatomi Dasar II</h1>
                                            <h4 class="text-white font-light text-sm">dr Tanjung Subrata, MRepro, ABAARM</h4>
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
                                            <h4 class="text-white font-light text-sm">dr Phaidon Toruan MM</h4>
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
                                            <li>dr Tanjung Subrata, MRepro, ABAARM</li>
                                            <li>dr. Phaidon Toruan MM</li>
                                            <li>DR. Hariadin Mahardika S.E, M.M.</li>
                                            <li>Nicholas yong Lee ( Muscle Mania Word champion)</li>
                                            <li>Dith satyawan ( fitnesspreneur)</li>
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
                                            <h1 class="text-yellow-300 text-2xl font-bold">Rp 2.999.000</h1>
                                        </div>
                                        <div class="flex flex-col ml-10">
                                            <h1 class="text-white opacity-25">Regular price</h1>
                                            <h1 class="text-yellow-300 text-2xl font-bold">Rp 3.499.000</h1>
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
            <div class="mx-auto container">
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
            <div class="mx-auto container">
                <h1 class="text-white text-2xl font-bold text-center">Gallery</h1>
                <div class="mt-10">
                    <div class="flex flex-row gap-7 flex-wrap justify-center">
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
        <div class="bg-zinc-600 py-10" id="contact">
            <div class="mx-auto container">
                <h1 class="text-white text-2xl font-bold">Contact Us</h1>
                <div class="flex flex-col md:flex-row items-center md:justify-between">
                    <div class="w-2/3">
                        <form>
                            <div class="mb-6 flex flex-row gap-4">
                                <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name">
                                <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email">
                            </div>
                            <div class="mb-6">
                            <textarea name="" id="" cols="30" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Message" ></textarea>
                            </div>
                            <button type="submit" class="text-white bg-zinc-800 hover:bg-zinc-600 focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                        </form>
                    </div>
                    <div class="flex flex-col mt-10 md:mb-32">
                        <div class="md:text-right">
                            <h1 class="text-white text-xl font-medium">Promo DM or Chat only</h1>
                            <h1 class="text-white text-xl font-medium">081245690803</h1>
                        </div>
                        <div class="mt-10">
                            <h1 class="text-white text-xl font-medium md:text-right">Follow Us</h1>
                            <div class="flex flex-row gap-4 mt-3 md:justify-end">
                                <a href="">
                                    <img src="assets/img/Ic_SocialMedia/youtube.png" class="w-10" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/img/Ic_SocialMedia/facebook.png" class="w-10" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/img/Ic_SocialMedia/instagram.png" class="w-10" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/img/Ic_SocialMedia/twitter.png" class="w-10" alt="">
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
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/register-tabs.js"></script>
</body>
</html>