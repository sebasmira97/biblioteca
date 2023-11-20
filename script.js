function focusNext(input) {
    var maxLength = input.maxLength;
    var currentLength = input.value.length;

    if (currentLength === maxLength) {
        var nextInput = input.nextElementSibling;

        if (nextInput) {
            nextInput.focus();
        }
    }
}

function submitCode() {
    var digit1 = document.getElementById('digit1').value;
    var digit2 = document.getElementById('digit2').value;
    var digit3 = document.getElementById('digit3').value;
    var digit4 = document.getElementById('digit4').value;
    var digit5 = document.getElementById('digit5').value;
    var digit6 = document.getElementById('digit6').value;

    var authenticationCode = digit1 + digit2 + digit3 + digit4 + digit5 + digit6;

    // Aquí puedes enviar el código de autenticación al servidor o realizar otras acciones
    console.log('Código de Autenticación:', authenticationCode);
    window.location.href = 'index.html';
}