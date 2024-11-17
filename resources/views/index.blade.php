@extends('layouts.main')

@section('container')
<div class="container text-center mt-5">
    <!-- Judul Halaman -->
    <h1 class="main-title mb-3">Selamat Datang di KafkaMath</h1>
    <p class="main-description mb-4">
        Pelajari konsep dasar kalkulus yang sangat penting untuk memahami berbagai fenomena di dunia sains dan teknik. Pilih topik di bawah ini untuk memulai!
    </p>
    <div class="row justify-content-center g-4">
        <!-- Card 1: Kalkulus Limit -->
        <div class="col-md-4">
            <a href="/limit" class="image-link shadow">
                <div class="overlay-container rounded-4 overflow-hidden">
                    <img src="{{ asset('images/limit2.png') }}" class="img-fluid rounded-4" alt="Kalkulus Limit">
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <h3 class="overlay-title">Kalkulus Limit</h3>
                    </div>
                </div>
            </a>            
        </div>
        
        <!-- Card 2: Kalkulus Diferensial -->
        <div class="col-md-4">
            <a href="your-link-here" class="image-link shadow">
                <div class="overlay-container rounded-4 overflow-hidden">
                    <img src="{{ asset('images/diferensial.png') }}" class="img-fluid rounded-4" alt="Kalkulus Diferensial">
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <h3 class="overlay-title">Kalkulus Diferensial</h3>
                    </div>
                </div>
            </a>            
        </div>
    </div>
</div>
@endsection
