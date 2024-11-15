@extends('master')
 
@section('titlePage', 'Edit Data')
 
@section('content')

<div class=" max-w-sm mx-auto container-9 py-10 mt-20 h-screen">
<h1 class="text-center text-blue-900 text-3xl">Mengedit Cerita Lama</h1>

@if (session ('success'))
<div>
    <p class="mt-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ session('success')}}</p>
</div>
@endif

@if ($errors->any())
<div>
  <h1 class="text-red-500">WARNING!</h1>
    <ul>
        @foreach ($errors->all () as $error)
        <li class="text-red-500">-{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="max-w-sm mx-auto" method="POST" action="{{ url('posts', $post -> id )}}">
    @csrf
    @method('PUT')
  <div class="mb-5">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari</label>
    <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $post->title }}"/>
  </div>
  <div class="mb-5">
    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Silahkan di isi...</label>
    <textarea name="body" id="body" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $post->body }}</textarea>
  </div>
 
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
</form>
</div>


@endsection