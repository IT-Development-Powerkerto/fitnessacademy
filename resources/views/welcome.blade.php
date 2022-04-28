<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">

    @livewireStyles
</head>
<body>
    <livewire:lp.navbar /> 


    <!-- begin::header -->
    <div class="bg-zinc-800 p-10">
        <div class="flex flex-col-reverse md:flex-row">
            <div class="py-10 text-center md:text-left md:basis-3/6 md:self-center">
                <h1 class="text-white text-3xl font-bold md:text-4xl">Welcome to Fitness Plus Academy</h1>
                <h1 class="text-sm text-gray-300 py-10">We serve you with knowledge to help you increase your skill, competencies to give results to your clients and tobhelp you increase your sales and marketing knowledge to increse your income.</h1>
                <a href="#" class="bg-yellow-200 px-10 py-3 rounded-md hover:bg-yellow-300 hover:text-white">View Course</a>
            </div>
            <div class="md:basis-3/6">
                <img src="assets/img/Academy-Fitness-Plus.png" alt="">
            </div>
        </div>
    </div>
    <!-- end::header -->

    <!-- begin:about -->
    <div class="bg-zinc-800 p-10">
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
                <img src="assets/img/imageOne.png" class="w-full" alt="">
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
                <img src="assets/img/imageTwo.png" class="w-full" alt="">
            </div>
        </div>
        <h1 class="text-white text-justify mt-5">Fitness Plus  Academy di gawangi oleh pengajar2 yang memiliki kompetensi tinggi seperti dr. Tandjung, dr. Phaidon, Dr. Hariadin mahardika, atlit  international Nicholas yang, dan fitnesspreneur Dith satyawan.</h1>
    </div>
    <!-- end::about -->

    <!-- begin:::course -->
    <div class="bg-zinc-800 p-10">
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
    </div>
    <!-- end:::course -->




    <!-- Begin::Livewire -->
    @livewireScripts
    <!-- End::Livewire -->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>