// kodlab2.js
function validateForm() {
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var alamat = document.getElementById("alamat").value; // Mengambil nilai alamat

    var errorNama = document.getElementById("errorNama");
    var errorEmail = document.getElementById("errorEmail");
    var errorAlamat = document.getElementById("errorAlamat"); // Elemen untuk pesan error alamat

    errorNama.textContent = "";
    errorEmail.textContent = "";
    errorAlamat.textContent = "";

    if (nama == "") {
        alert("Nama harus diisi.");
        return false;
    }

    if (email == "") {
        alert("Email harus diisi.");
        return false;
    }

    if (alamat == "") {
        alert("Alamat lengkap harus diisi.");
        return false;
    }


    alert("Registrasi berhasil!");
    return true;

}