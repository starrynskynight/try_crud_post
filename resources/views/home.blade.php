@extends('master')
 
@section('titlePage', 'Home')
 
@section('content')
    
    <!-- Bagian 1 -->
     

    <section class="container_4 bg-white dark:bg-gray-900 h-screen pt-9" >
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16 h-full">
        <div class="flex flex-col justify-center h-full">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-blue-400 md:text-5xl lg:text-6xl dark:text-white">I'm <span>Ellya Yustiani</span></h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Panjangnya sih Ella Aulya, namun saya lebih suka disingkat menjadi Ellya :)</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    About Me
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a> 
            </div>
        </div>
        <div class="flex items-center justify-center h-full">
            <div class="w-full h-full flex items-center justify-center">
                <img class="w-96 h-96 object-cover rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="{{ asset('images/kucing.jpg') }}" alt="Bordered avatar mb-5">
            </div>
        </div>
    </div>
</section>



    <!-- Bagian 3 --> 
    <div class="container_6 h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="textp1 text-6xl font-semibold mb-5">3 FUN FACTS ABOUT ME ;)</h1>
        <div class="flex flex-wrap justify-center mt-20 space-x-5">
          <div class="flip-card" onclick="toggleFlip(this)">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <a  class=" w-xs h-xs items-center align-center justify-center p-5 bg-white border border-gray-300 rounded-lg shadow-md transition duration-300 hover:bg-gray-100">
                <h5 class="mt-2 text-2xl font-bold text-blue-950">Dream.</h5>
                <p>Saya sangat ingin sekali pergi ke kutub utara untuk melihat tarian-tarian keindahan Aurora Borealis. Entah apakah ini bisa disebut cita-cita atau tidak. Memangnya... cita-cita harus berupa profesi ya?</p>
            </a>
        </div>
        <div class="flip-card-back">
            <img src="{{ asset('images/Aurora.jpg') }}" alt="Back Image">
        </div>
    </div>
    </div>
            <div class="flip-card" onclick="toggleFlip(this)">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <a  class=" w-xs h-xs items-center align-center justify-center p-5 bg-white border border-gray-300 rounded-lg shadow-md transition duration-300 hover:bg-gray-100">
                <h5 class="mt-2 text-2xl font-bold text-blue-950">Favourite Person</h5>
                <p>My favourite person (Character) is My Man, Gojo Satoru hehe :). He's kind, and kinda cute. But unfortunately, he's not even real (and exist) :). </p>
            </a>
        </div>
        <div class="flip-card-back">
            <img src="{{ asset('images/cutie.jpg') }}" alt="Back Image">
        </div>
    </div>
</div>
<div class="flip-card" onclick="toggleFlip(this)">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <a  class=" w-xs h-xs items-center align-center justify-center p-5 bg-white border border-gray-300 rounded-lg shadow-md transition duration-300 hover:bg-gray-100">
                <h5 class="mt-2 text-2xl font-bold text-blue-950">Favourite Genre</h5>
                <p>Saya sangat menyukai membaca buku maupun menonton film yang memiliki genre fantasy. Dari Percy Jackson hingga Harry Potter. ACOTAR maupun LOTR. Ingin sekali hidup dalam fantasi imajinasi tersebut :).</p>
            </a>
        </div>
        <div class="flip-card-back">
            <img src="{{ asset('images/Fantasy.jpg') }}" alt="Back Image">
        </div>
    </div>
</div>
</div>
</div>
@endsection  

    