@extends('layouts.main')

@section('container')
<div class="container my-2">
    <div class="content-wrapper bg-white p-2 shadow rounded">
        <img src="{{ asset('images/banner_limit.png') }}" alt="Kalkulus Limit" class="w-100 mb-4">
        <div class="px-5">
            <h2 class="mb-4" style="font-size: 55px">Kalkulus Limit Fungsi — Latihan Soal dan Jawaban</h2>

            <div class="d-flex justify-content-center mb-4 border-bottom pb-2">
                <button id="btn-soal-1" class="btn btn-link active-tab mx-3">Soal 1</button>
                <button id="btn-soal-2" class="btn btn-link mx-3">Soal 2</button>
            </div>

            <div id="no1">
                <div class="section">
                    <h4 class="section-title">Latihan Soal 1</h4>
                    <p>Cari limit dari fungsi berikut:</p>
                    <div class="problem bg-light p-3 my-3 rounded">
                        <pre class="m-0"><code>lim<sub>x→1</sub> (x² - 1) / (x - 1)</code></pre>
                    </div>
                    <button class="btn btn-primary my-3" id="showSteps1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-1" aria-expanded="false" aria-controls="collapse-steps-1">
                        Tampilkan Langkah-langkah
                    </button>
                    <button class="btn btn-primary my-3 d-none" id="hideSteps1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-1" aria-expanded="false" aria-controls="collapse-steps-1">
                        Sembunyikan Langkah-langkah
                    </button>
                    <div class="collapse" id="collapse-steps-1">
                        <p class="mt-2">Pertama-tama, kita ubah <code>(x² - 1)</code> menjadi <code>(x² - 1²)</code> agar dapat difaktorisasi:</p>
                        <div class="solution bg-light p-3 my-3 rounded">
                            <pre class="m-0"><code>lim<sub>x→1</sub> (x² - 1²) / (x - 1)</code></pre>
                        </div>
                        <p class="mt-4">Lakukan faktorisasi berdasarkan sifat <code>(a² - b²) = (a - b)(a + b)</code>:</p>
                        <div class="solution bg-light p-3 my-3 rounded">
                            <pre class="m-0"><code>lim<sub>x→1</sub> (x - 1)(x + 1) / (x - 1)</code></pre>
                        </div>
                        <p class="mt-4">Karena pada pembilang dan penyebut ada yang sama yaitu <code>(x - 1)</code>, kita eliminasi keduanya:</p>
                        <div class="solution bg-light p-3 my-3 rounded">
                            <pre class="m-0"><code>lim<sub>x→1</sub> (x + 1)</code></pre>
                        </div>
                        <p class="mt-4">Selanjutnya, kita substitusikan <code>x</code> dengan <code>1</code> berdasarkan <code>x → 1</code>:</p>
                        <div class="solution bg-light p-3 my-3 rounded">
                            <pre class="m-0"><code>lim<sub>x→1</sub> (1 + 1) = 2</code></pre>
                        </div>
                        <p class="mt-4 mb-5">Jadi, limitnya adalah <code>2</code>.</p>
                    </div>
                </div>
    
                <div class="mt-4">
                    <h4 class="section-title mb-3">Langkah-langkah Pengerjaan 1</h4>
                    <p>Jika Anda masih kesulitan dalam memahami langkah-langkah di atas, Anda dapat menonton video berikut untuk melihat penjelasan langkah demi langkah dalam pengerjaannya:</p>
                    <div class="d-flex justify-content-center">
                        <div class="video ratio ratio-16x9 mb-5">
                            <iframe src="https://www.youtube.com/embed/TZ-PTzlmlVg" 
                                    title="Langkah-langkah Pengerjaan Limit Fungsi Nomor 1"
                                    allowfullscreen 
                                    class="rounded border"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div id="no2" class="d-none">
                <div class="section">
                    <h4 class="section-title">Latihan Soal 2</h4>
                    <p>Cari limit dari fungsi berikut:</p>
                    <div class="problem bg-light p-3 my-3 rounded">
                        <pre class="m-0"><code>lim<sub>x→2</sub> (x² - 7x + 10) / (x² - 4)</code></pre>
                    </div>
                    <button class="btn btn-primary my-3" id="showSteps2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-2" aria-expanded="false" aria-controls="collapse-steps-2">
                        Tampilkan Langkah-langkah
                    </button>
                    <button class="btn btn-primary my-3 d-none" id="hideSteps2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-2" aria-expanded="false" aria-controls="collapse-steps-2">
                        Sembunyikan Langkah-langkah
                    </button>
                    <div class="collapse" id="collapse-steps-2">
                        <p class="mt-2">Pertama-tama, kita faktorisasikan penyebut dan pembilangnya:</p>
                        <div class="solution bg-light p-3 my-3 rounded">
                            <pre class="m-0"><code>lim<sub>x→2</sub> (x - 2) (x - 5) / (x - 2) (x + 2)</code></pre>
                        </div>
                        <p class="mt-4">Karena pada pembilang dan penyebut ada yang sama yaitu <code>(x - 2)</code>, kita eliminasi keduanya:</p>
                        <div class="solution bg-light p-3 my-3 rounded">
                            <pre class="m-0"><code>lim<sub>x→2</sub> (x - 5) / (x + 2)</code></pre>
                        </div>
                        <p class="mt-4">Selanjutnya, kita substitusikan <code>x</code> dengan <code>2</code> berdasarkan <code>x → 2</code>:</p>
                        <div class="solution bg-light p-3 my-3 rounded">
                            <pre class="m-0"><code>lim<sub>x→2</sub> (2 - 5) / (2 + 2) = -3 / 4</code></pre>
                        </div>
                        <p class="mt-4 mb-5">Jadi, limitnya adalah <code>-3 / 4</code>.</p>
                    </div>
                </div>
    
                <div class="mt-4">
                    <h4 class="section-title mb-3">Langkah-langkah Pengerjaan 2</h4>
                    <p>Jika Anda masih kesulitan dalam memahami langkah-langkah di atas, Anda dapat menonton video berikut untuk melihat penjelasan langkah demi langkah dalam pengerjaannya:</p>
                    <div class="d-flex justify-content-center">
                        <div class="video ratio ratio-16x9 mb-5">
                            <iframe src="https://www.youtube.com/embed/46Nu-Z_gyao" 
                                    title="Langkah-langkah Pengerjaan Limit Fungsi Nomor 2"
                                    allowfullscreen 
                                    class="rounded border"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btn-soal-1').addEventListener('click', function() {
        document.getElementById('no1').classList.remove('d-none');
        document.getElementById('no2').classList.add('d-none');
        this.classList.add('active-tab');
        document.getElementById('btn-soal-2').classList.remove('active-tab');
    });

    document.getElementById('btn-soal-2').addEventListener('click', function() {
        document.getElementById('no2').classList.remove('d-none');
        document.getElementById('no1').classList.add('d-none');
        this.classList.add('active-tab');
        document.getElementById('btn-soal-1').classList.remove('active-tab');
    });

    document.getElementById('showSteps1').addEventListener('click', function() {
        document.getElementById('hideSteps1').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('hideSteps1').addEventListener('click', function() {
        document.getElementById('showSteps1').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('showSteps2').addEventListener('click', function() {
        document.getElementById('hideSteps2').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('hideSteps2').addEventListener('click', function() {
        document.getElementById('showSteps2').classList.remove('d-none');
        this.classList.add('d-none');
    });
</script>
@endsection