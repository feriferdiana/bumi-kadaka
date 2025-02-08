function getLocation() {
    if (navigator.geolocation) {
        // Meminta izin pengguna untuk mengakses lokasi
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        document.getElementById("demo").innerHTML = "Geolocation tidak didukung oleh browser ini.";
    }
}

function showPosition(position) {
    // Menampilkan latitude dan longitude
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    document.getElementById("demo").innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;

    // Kirim data lokasi ke server (PHP) menggunakan AJAX
    sendLocationToServer(latitude, longitude);
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            document.getElementById("demo").innerHTML = "Pengguna menolak permintaan geolokasi.";
            break;
        case error.POSITION_UNAVAILABLE:
            document.getElementById("demo").innerHTML = "Informasi lokasi tidak tersedia.";
            break;
        case error.TIMEOUT:
            document.getElementById("demo").innerHTML = "Permintaan lokasi timeout.";
            break;
        case error.UNKNOWN_ERROR:
            document.getElementById("demo").innerHTML = "Terjadi kesalahan yang tidak diketahui.";
            break;
    }
}

function sendLocationToServer(latitude, longitude) {
    // Menggunakan AJAX untuk mengirim data ke server
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save_location.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // Respon dari server
        }
    };
    xhr.send("latitude=" + latitude + "&longitude=" + longitude);
}