let display = document.getElementById('display');

function appendToDisplay(value) {
    display.value += value;
}


function operate(operator) {
    display.value += operator;
}


function calculate() {
    try {
        display.value = eval(display.value);
    } catch (error) {
        display.value = 'Error';
    }
}


function clearAll() {
    display.value = '';
}