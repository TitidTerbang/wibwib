let display = document.getElementById('display');

function angkaDisp(value) {
    display.value += value;
}


function operator(operator) {
    display.value += operator;
}


function hasil() {
    try {
        display.value = eval(display.value);
    } catch (error) {
        display.value = 'Error';
    }
}


function clearAll() {
    display.value = '';
}