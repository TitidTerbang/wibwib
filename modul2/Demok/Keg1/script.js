let display = document.getElementById('display');

function angkaDisp(value) {
    display.value += value;
}

function operator(operator) {
    display.value += operator;
}

function hasil() {
    try {
        let expression = display.value;
        if (expression.includes('%')) {
            // (\d+(\.\d+)?)% => mencari angka yang diikuti dengan %, angka bisa desimal
            // g => global, mencari semua angka yang ada
            expression = expression.replace(/(\d+(\.\d+)?)%/g, function(match, angka) {
                return `(${angka}/100)`;
            });
        }

        display.value = eval(expression);
    } catch (error) {
        display.value = 'Error';
    }
}

function clearAll() {
    display.value = '';
}