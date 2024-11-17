<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KafkaMath | Kalkulator Limit</title>
        <link href="{{ asset('/bootstrap/vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/bootstrap-icons/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.11.0/math.min.js"></script>

        <link rel="stylesheet" href="{{ asset('css/calc.css') }}">
    </head>

    <body>
        <div>
            <main>
                @include('partials.navbar')
                <div class="calculator-container">
                    <input type="text" class="display" id="display" placeholder="Masukkan fungsi di sini..." readonly>
                    <div class="keyboard">
                        <!-- Elemen keyboard untuk limit -->
                        <button class="button special" onclick="appendToDisplay('lim(')">lim</button>
                        <button class="button" onclick="appendToDisplay('x')">x</button>
                        <button class="button" onclick="appendToDisplay('→')">→</button>
                        <button class="button" onclick="appendToDisplay('∞')">∞</button>
            
                        <!-- Tombol angka -->
                        <button class="button" onclick="appendToDisplay('7')">7</button>
                        <button class="button" onclick="appendToDisplay('8')">8</button>
                        <button class="button" onclick="appendToDisplay('9')">9</button>
                        <button class="button" onclick="appendToDisplay('/')">÷</button>
            
                        <button class="button" onclick="appendToDisplay('4')">4</button>
                        <button class="button" onclick="appendToDisplay('5')">5</button>
                        <button class="button" onclick="appendToDisplay('6')">6</button>
                        <button class="button" onclick="appendToDisplay('*')">×</button>
            
                        <button class="button" onclick="appendToDisplay('1')">1</button>
                        <button class="button" onclick="appendToDisplay('2')">2</button>
                        <button class="button" onclick="appendToDisplay('3')">3</button>
                        <button class="button" onclick="appendToDisplay('-')">-</button>
            
                        <button class="button" onclick="appendToDisplay('0')">0</button>
                        <button class="button" onclick="appendToDisplay('^')">x<sup>n</sup></button>
                        <button class="button" onclick="appendToDisplay('sqrt(')">√</button>
                        <button class="button" onclick="appendToDisplay('+')">+</button>
            
                        <button class="button" onclick="appendToDisplay('(')">(</button>
                        <button class="button" onclick="appendToDisplay(')')">)</button>
                        <button class="button special" onclick="clearDisplay()">C</button>
                        <button class="button special" onclick="calculate()">=</button>
                    </div>
                </div>
            </main> 
        </div>

        <script>
            // Menambahkan input ke layar kalkulator
            function appendToDisplay(value) {
                const display = document.getElementById('display');
                display.value += value;
            }
    
            // Menghapus input di layar
            function clearDisplay() {
                const display = document.getElementById('display');
                display.value = '';
            }
    
            // Menghitung limit menggunakan Math.js
            function calculate() {
                const display = document.getElementById('display');
                try {
                    // Ekstrak bagian limit dari input
                    const input = display.value;
                    if (input.startsWith('lim')) {
                        const parts = input.split('→');
                        const variable = parts[0].replace('lim(', '').trim();
                        const value = parts[1].split(')')[0].trim();
                        const expression = parts[1].split(')')[1].trim();
    
                        // Menghitung limit dengan Math.js
                        const result = math.limit(expression, variable, value);
                        display.value = result;
                    } else {
                        display.value = "Format limit salah!";
                    }
                } catch (e) {
                    display.value = "Error!";
                }
            }
        </script>

    </body>
</html>