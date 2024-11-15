@extends('master')
 
@section('titlePage', 'Contact')
 
@section('content')

<style>
        .container_12{
    
            width: 20%;
            height:600px;
            display:flex;
            justify-content:center;
            gap:10px;
            background-color: rgba(75, 176, 204, 0.1);
            margin-right: 100px;
            flex-direction: column;
            margin-left: 0;
        }
        .container_12 img{
            width: 100%;
            height:20%;
            object-fit:cover;
            border-radius:5px;
            border:2px solid rgba(255, 255, 255, 0.684);
            transition:all ease-in-out 0.5s;
        }
        .container_12 img:hover{
            width: 100%;
            height: 100%;
        }
    </style>
<div class="container_9 h-full flex items-center justify-center">
<div class="container_12">
        <img src="{{ asset ('images/aku_bayi.jpg')}}" alt="">
        <img src="{{ asset ('images/aku_tk.jpeg')}}" alt="">
        <img src="{{ asset ('images/aku_sd.jpeg')}}" alt="">
        <img src="{{ asset ('images/aku_dkk.jpeg')}}" alt="">
    </div>
    <div class="container_10 w-1/2 max-w-4xl bg-red-500 p-2 rounded-lg shadow-lg flex flex-col items-center my-10">
            <div class="container w-full m-w-none mt-6 items-center justify-center">
        <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">16th March 2008</time>
                <h3 class="text-white text-lg font-semibold text-gray-900 dark:text-white">I Was Born</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Ditanggal inilah saat pertama kali aku melihat dunia, diantara kesunyian di tengah malam saat pergantian hari.</p>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 2012 - June 2014</time>
                <h3 class="text-white text-lg font-semibold text-gray-900 dark:text-white">Masa Taman Kanak- kanak.</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pada rentang waktu 2 tahun ini, aku menempuh pendidikan pertamaku di TKIT Al-Munawwar. Pada masa inilah aku belajar untuk membaca dan menulis.</p>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>

                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 2014 - June 2020</time>
                <h3 class="text-white text-lg font-semibold text-gray-900 dark:text-white">Masa Sekolah Dasar</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Ini adalah waktu terlama aku menempuh pendidikan selama perjalanan hidupku. 6 tahun aku duduk di bangku sekolah dasar, di mana aku terlalu banyak bermain dengan teman- temanku, dan belajar adalah hal yang opsional pada masa itu :).</p>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 2020 - June 2023</time>
                <h3 class="text-white text-lg font-semibold text-gray-900 dark:text-white">Masa Sekolah Menengah Pertama</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Meskipun secara teori masa ini adalah waktu aku untuk menempuh pendidikan yang paling singkat. Dikarenakan terjadi kesalahan teknis pada dunia sehingga aku tidak sepenuhnya mengikuti pembelajaran selama 3 tahun. Namun masa ini adalah masa yang paling indah karena aku menemukan teman-teman yang sangat baik padaku :).</p>
            </li>
        </ol>

        </div>
            
        </div>
    </div>
</div>

@endsection  