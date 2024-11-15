@extends('master')
 
@section('titlePage', 'About Me')
 
@section('content')
    
    <!-- Bagian 1 -->

    

<section class="container_5 bg-center bg-no-repeat  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Welcome Good People</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here are a few things I would like to share with you about me.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#boutme" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                About Me!
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</section>

     
<div class="container_9 h-screen flex items-center justify-center" id="boutme">
    <div class="container_10 w-1/2 max-w-4xl bg-red-500 p-2 rounded-lg shadow-lg flex flex-col items-center my-16">
        <img src="{{ asset('images/kucing.jpg') }}" alt="Profile Image" class="w-36 h-36 rounded-full object-cover mb-6">
        <div class="text-center max-w-2xl">
            <h1 class="text-4xl font-bold mb-4 text-white dark:text-white">About Me</h1>
            <p class="text-base mb-5 text-white dark:text-gray-300">One of the students of SMKN 1 Purwosari majoring in Software Engineering.</p>
            <div class="text-left mb-5 text-white dark:text-gray-300">
                <div class="mb-2">
                    <span class="font-bold">Name:</span> <span>Ella Aulya Yustiani</span>
                </div>
                <div class="mb-2">
                    <span class="font-bold">Date of Birth:</span> <span>March 16, 2008</span>
                </div>
                <div class="mb-2">
                    <span class="font-bold">Address:</span> <span>Pasuruan, East Java, Indonesia.</span>
                </div>
                <div class="mb-2">
                    <span class="font-bold">Hobbies:</span> <span>Reading Novels.</span>
                </div>
                <div class="mb-2">
                    <span class="font-bold">Email:</span> <span>ellayustiani@gmail.com</span>
                </div>
                <div class="mb-2">
                    <span class="font-bold">Phone:</span> <span>089516592968</span>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection  

    