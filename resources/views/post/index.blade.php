@extends('master')
 
@section('titlePage', 'Diary')
 
@section('content')

<div id="tengah" class="max-w-2xl mx-auto  justify-center items-center pt-16">

<div class="flex justify-between items-center mb-4">
    <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl mx-auto text-center">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Days</span> Post.
    </h1>
    
    <a href="{{ route('posts.create') }}">
        <button type="button" class="text-blue-500 bg-white border border-blue-500 hover:bg-blue-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg font-medium rounded-lg text-sm px-5 py-2.5 ml-2">
            Create
        </button>
    </a>
</div>
<div class="relative overflow-x-auto sm:rounded-lg">
    @if (session('success'))
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Info: </span> {{ session('success') }}
            </div>
        </div>
    @endif
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Day
                </th>
                <th scope="col" class="px-6 py-3">
                    Story
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($post as $post)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $post -> title}}
                </th>
                <td class="px-6 py-4">
                    {{ $post -> body}}
                </td>
                <td class="px-6 py-4 flex items-center">
                <a href="{{ route('posts.edit', $post->id) }}">
                <button type="button"  class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Edit</button>
                </a>
                <button onclick="openModal({{ $post->id }})" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Hapus</button>
                <div id="deleteModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-semibold">Konfirmasi Penghapusan</h3>
                        <p class="mt-2">Apakah Anda yakin ingin menghapus post ini?</p>
                        <div class="mt-4 flex justify-end">
                            <button onclick="closeModal()" class="mr-2 text-gray-600">Tidak</button>
                            <form id="deleteForm" action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5">Ya, Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                </td>
            </tr>
            @endforeach
            <script>
                function openModal(postId) {
                    
                    const form = document.getElementById('deleteForm');
                    form.action = `/posts/${postId}`; 

                    
                    document.getElementById('deleteModal').classList.remove('hidden');
                }

                function closeModal() {
                    document.getElementById('deleteModal').classList.add('hidden');
                }
            </script>
        </tbody>
    </table>
</div>
</div>

@endsection  