@extends('layouts.main')

@section('container')
<div class="container my-2">
    <div class="content-wrapper bg-white p-2 shadow rounded">
        <img src="{{ asset('images/banner_limit.png') }}" alt="Kalkulus Limit" class="w-100 mb-4">
        <div class="px-5">
    
            <h2 class="mb-4" style="font-size: 55px">Kalkulus Limit - Pengertian, Rumus,<br>Contoh Soal, dan Jawaban</h2>
    
            <div class="section mb-5">
                <h3 class="section-title">Apa itu Limit?</h3>
                <p>Limit memiliki arti kata yaitu batas, membatasi, mempersempit, atau mendekatkan. Dalam kehidupan sehari-hari, orang sering dihadapkan pada masalah-masalah pendekatan suatu nilai/besaran.</p>
                
                <p>Limit dari suatu fungsi menggambarkan nilai yang didekati oleh fungsi tersebut saat variabelnya mendekati nilai tertentu. Dalam notasi matematika, limit dari fungsi <em>f(x)</em> saat <em>x</em> mendekati <em>a</em> dapat dituliskan sebagai:</p>
                <div class="notation bg-light p-3 my-3 rounded">
                    <code>lim<sub>x→a</sub> f(x) = L</code>
                </div>
                <p>Artinya, ketika x mendekati a, maka nilai fungsi f(x) akan mendekati nilai L, jika L adalah nilai limitnya.</p>

                <p>Limit tidak mempermasalahkan nilai fungsi f(x) tepat di x = c, melainkan hanya memperhatikan perilaku f(x) saat x berada sangat dekat dengan c.</p>

                <b>Contoh:</b>
                <div><em>Diberikan f(x) = x + 1</em></div>
                <p class="mx-4">Berapa nilai f(x) saat x, “sangat dekat” dengan 0?</p>

                <p>Nilai eksak yang menjadi jawaban pertanyaan di atas sulit ditentukan, bahkan tidak mungkin. Mengapa demikian? Karena kita tidak dapat memberikan kepastian nilai x yang dimaksud. Meskipun demikian, nilai pendekatan untuk yang dimaksud bisa ditentukan.</p>

                <p>Perhatikan tabel berikut:</p>
                <table class="table table-bordered border-dark w-100 text-center">
                    <thead class="table-secondary">
                        <tr>
                            <th style="width: 25%;">x</th>
                            <th style="width: 25%;">f(x)</th>
                            <th style="width: 25%;">x</th>
                            <th style="width: 25%;">f(x)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>-1</td>
                            <td>0</td>
                            <td>1,24</td>
                            <td>2,24</td>
                        </tr>
                        <tr>
                            <td>-0,55</td>
                            <td>0,45</td>
                            <td>0,997</td>
                            <td>1,997</td>
                        </tr>
                        <tr>
                            <td>-0,125</td>
                            <td>0,875</td>
                            <td>0,00195</td>
                            <td>1,00195</td>
                        </tr>
                        <tr>
                            <td>-0,001</td>
                            <td>0,999</td>
                            <td>0,0000015</td>
                            <td>1,0000015</td>
                        </tr>
                        <tr>
                            <td>-0,000001</td>
                            <td>0,999999</td>
                            <td>0,000000001</td>
                            <td>1,000000001</td>
                        </tr>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                    </tbody>
                </table>
                
                <p>Dari tabel di atas dapat dilihat, apabila nilai x semakin “dekat” dengan 0, maka f(x) akan semakin “dekat” dengan 1. Dengan catatan bahwa f(0) = 1 adalah sebuah kebetulan. Dengan grafik, dapat digambarkan sebagai berikut.</p>

                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/graphic.png') }}" alt="Grafik" class="img-fluid">
                </div>
                
                <p>Dari grafik dapat dilihat, apabila x sangat “dekat” dengan 0, baik untuk x < 0 maupun untuk x > 0, maka f(x) sangat “dekat” dengan 1.</p>
            </div>

            <div class="section mb-5">
                <h4 class="section-title">Sifat-Sifat Dasar Limit Fungsi</h4>
                <p>Berikut adalah beberapa sifat dasar limit fungsi yang sering digunakan dalam kalkulus:</p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong>Sifat Penjumlahan:</strong> <br>
                        <code>lim<sub>x→a</sub> [f(x) + g(x)] = lim<sub>x→a</sub> f(x) + lim<sub>x→a</sub> g(x)</code>
                    </li>
                    <li class="mb-3">
                        <strong>Sifat Pengurangan:</strong> <br>
                        <code>lim<sub>x→a</sub> [f(x) - g(x)] = lim<sub>x→a</sub> f(x) - lim<sub>x→a</sub> g(x)</code>
                    </li>
                    <li class="mb-3">
                        <strong>Sifat Perkalian:</strong> <br>
                        <code>lim<sub>x→a</sub> [f(x) * g(x)] = lim<sub>x→a</sub> f(x) * lim<sub>x→a</sub> g(x)</code>
                    </li>
                    <li class="mb-3">
                        <strong>Sifat Pembagian:</strong> (dengan <em>lim<sub>x→a</sub> g(x) ≠ 0</em>) <br>
                        <code>lim<sub>x→a</sub> [f(x) / g(x)] = lim<sub>x→a</sub> f(x) / lim<sub>x→a</sub> g(x)</code>
                    </li>
                    <li class="mb-3">
                        <strong>Sifat Perkalian dengan Konstanta:</strong> <br>
                        <code>lim<sub>x→a</sub> [c * f(x)] = c * lim<sub>x→a</sub> f(x)</code> (untuk konstanta <em>c</em>)
                    </li>
                    <li class="mb-3">
                        <strong>Sifat Pangkat:</strong> <br>
                        <code>lim<sub>x→a</sub> [f(x)]<sup>n</sup> = [lim<sub>x→a</sub> f(x)]<sup>n</sup></code> (untuk bilangan bulat positif <em>n</em>)
                    </li>
                </ul>
                <p>Dengan memahami sifat-sifat dasar ini, Anda dapat lebih mudah dalam menyelesaikan perhitungan limit pada berbagai jenis fungsi.</p>
            </div>
    
            <!-- Contoh Soal -->
            <div class="section mb-5">
                <h4 class="section-title">Contoh Soal</h4>
                <p>Cari limit dari fungsi berikut:</p>
                <div class="problem bg-light p-3 my-3 rounded">
                    <code>lim<sub>x→3</sub> (2x + 5)</code>
                </div>
                <p>Untuk menyelesaikan ini, cukup substitusi <em>x = 3</em> ke dalam fungsi:</p>
                <div class="solution bg-light p-3 my-3 rounded">
                    <code>lim<sub>x→3</sub> (2x + 5) = 2(3) + 5 = 11</code>
                </div>
                <p>Jadi, limitnya adalah <em>11</em>.</p>
            </div>

            <div class="section mb-5">
                <a href="/calc" class="btn btn-primary">Kalkulator</a>
            </div>
        </div>
    </div>
</div>
@endsection
