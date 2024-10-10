
function jumlahkan() {
    var angka1 = parseFloat(document.getElementById("angka1").value);
    var angka2 = parseFloat(document.getElementById("angka2").value);

    if (isNaN(angka1) || isNaN(angka2)) {
        document.getElementById("hasil").textContent = "Masukkan angka yang valid!";
    } else {
        var hasil = angka1 + angka2;
        document.getElementById("hasil").textContent = "Hasil: " + hasil;
    }
}