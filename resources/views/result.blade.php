@extends('master')

@section('titlePage', 'Hasil')

@section('content')

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 90%;
        margin: auto;
    }

    .result-container {
        width: 60%;
        padding: 2%;
        background-color: #091f39; /* Warna latar belakang untuk hasil */
        border-radius: 8px; /* Sudut melingkar */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Bayangan */
        color: white; /* Warna teks */
        text-align: center; /* Rata tengah */
    }

    .result-title {
        font-size: 30px; /* Ukuran font untuk judul */
        font-weight: bold; /* Tebal */
        margin-bottom: 20px; /* Jarak bawah */
    }

    .result-text {
        font-size: 20px; /* Ukuran font untuk teks */
        margin: 10px 0; /* Jarak atas dan bawah */
    }
</style>

<main class="container py-5 mt-5">
    <div class="result-container">
        <h1 class="result-title">Data yang Terkirim</h1>
        
        @if(!empty($data))
            <p class="result-text">Nama: {{ $data['title'] }}</p>
            <p class="result-text">Pesan: {{ $data['body'] }}</p>
        @else
            <p class="result-text">Tidak ada data yang dikirim.</p>
        @endif
    </div>
</main>

@endsection