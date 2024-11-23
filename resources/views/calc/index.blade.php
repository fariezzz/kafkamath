@extends('layouts.main')

@section('container')
<div class="container my-5">
    <h2 class="text-center">Kalkulator Limit</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group mb-3">
                <label for="functionExpression">Masukkan Ekspresi Fungsi \( f(x) \):</label>
                <input type="text" id="functionExpression" class="form-control" placeholder="Contoh: x^2 + 3*x + 2">
            </div>
            <div class="form-group mb-3">
                <label for="approachingValue">Masukkan Nilai \( x \) Mendekati:</label>
                <input type="number" id="approachingValue" class="form-control" placeholder="Contoh: 3">
            </div>

            <div id="display" class="border p-3 bg-light text-center mb-3" style="min-height: 50px;">
                <span>Masukkan ekspresi untuk memulai</span>
            </div>

            <div id="keyboard" class="d-flex flex-wrap justify-content-center align-items-center mb-3">
                <div class="keyboard-group">
                    <button class="btn btn-outline-dark m-1" onclick="addInput('0')">0</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('1')">1</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('2')">2</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('3')">3</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('4')">4</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('5')">5</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('6')">6</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('7')">7</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('8')">8</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('9')">9</button>
                </div>

                <div class="keyboard-group">
                    <button class="btn btn-outline-dark m-1" onclick="addInput('x')">\( x \)</button>
                </div>

                <div class="keyboard-group">
                    <button class="btn btn-outline-dark m-1" onclick="addInput('+')">+</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('-')">−</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('*')">\(\times\)</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('/')">\(\div\)</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('^')">^</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('sqrt(')">\( \sqrt{} \)</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput('(')">(</button>
                    <button class="btn btn-outline-dark m-1" onclick="addInput(')')">)</button>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-3 mb-3">
                <button class="btn btn-danger" onclick="clearAll()">Hapus Semua</button>
                <button class="btn btn-success" onclick="calculateLimit()">Hitung</button>
            </div>

            <div>
                <label for="result">Hasil:</label>
                <div id="result" class="border p-3 bg-light text-center" style="min-height: 50px;"></div>
            </div>
        </div>
    </div>
</div>

<script>
    let activeInput = null;

    document.addEventListener("DOMContentLoaded", () => {
        document.getElementById("functionExpression").addEventListener("input", renderFormula);
        document.getElementById("approachingValue").addEventListener("input", renderFormula);

        renderFormula();
    });

    document.getElementById("functionExpression").addEventListener("focus", () => {
        activeInput = document.getElementById("functionExpression");
    });
    document.getElementById("approachingValue").addEventListener("focus", () => {
        activeInput = document.getElementById("approachingValue");
    });

    function addInput(input) {
        if (activeInput) {
            activeInput.value += input;
            renderFormula();
            activeInput.focus();
        }
    }

    function clearAll() {
        document.getElementById("functionExpression").value = "";
        document.getElementById("approachingValue").value = "";
        document.getElementById("result").innerHTML = "";
        activeInput = null;
        renderFormula();
    }

    function renderFormula() {
        const func = document.getElementById("functionExpression").value;
        const point = document.getElementById("approachingValue").value;
        const display = document.getElementById("display");

        // Konversi notasi khusus ke format LaTeX
        let latexFunc = func
            .replace(/sqrt\(/g, "\\sqrt{") // Ubah "sqrt(" menjadi "\sqrt{"
            .replace(/\)/g, "}");         // Tutup kurung ")" menjadi "}"

        // Template default
        const template = latexFunc || point 
            ? `\\lim_{x \\to ${point || ''}} (${latexFunc || ''})` 
            : `\\lim_{x \\to c} f(x)`;

        // Render ke elemen `display` menggunakan KaTeX
        display.innerHTML = katex.renderToString(template, { throwOnError: false });
    }


    function calculateLimit() {
        const func = document.getElementById("functionExpression").value;
        const point = parseFloat(document.getElementById("approachingValue").value);

        try {
            if (!func || isNaN(point)) {
                throw new Error("Isi ekspresi fungsi dan nilai mendekati!");
            }

            const parsedFunction = math.parse(func);
            const compiledFunction = parsedFunction.compile();

            const numerator = compiledFunction.evaluate({ x: point + 1e-10 });
            const denominator = compiledFunction.evaluate({ x: point - 1e-10 });
            const result = (numerator + denominator) / 2;

            let resultFraction = math.fraction(result);
            const isFraction = resultFraction.n !== resultFraction.d && resultFraction.d !== 1;

            let resultLatex;
            if (isFraction) {
                const sign = result < 0 ? "-" : "";
                const absNumerator = Math.abs(resultFraction.n);
                const absDenominator = Math.abs(resultFraction.d);

                resultLatex = `${sign}\\frac{${absNumerator}}{${absDenominator}}`;
            } else {
                resultLatex = result.toString();
            }

            document.getElementById("result").innerHTML = katex.renderToString(`\\text{Hasil: } ${resultLatex}`, { throwOnError: false });
        } catch (error) {
            document.getElementById("result").innerText = `Error: ${error.message}`;
        }
    }
</script>
@endsection