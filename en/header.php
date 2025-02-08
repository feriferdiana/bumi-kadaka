<head>
  <title>PT. Bumi Kadaka - Corporate</title>
  <meta charset="UTF-8">
  <meta name="description" content="PT. Bumi Kadaka - Corporate">
  <meta name="keywords" content="kadaka, bumikadaka, bumi kadaka, BUMI KADAKA, Bumi Kadaka">
  <meta name="author" content="PT. Bumi Kadaka - Corporate">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://bumikadaka.com/resources/img/ico/ico-bumi-kadaka.png" sizes="32x32">
  <link rel="stylesheet" href="https://bumikadaka.com/resources/css/main.css">
  <link rel="stylesheet" href="https://bumikadaka.com/resources/css/responsive.css">
  <link rel="stylesheet" href="https://bumikadaka.com/resources/css/font-style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://flowbite.com/docs/flowbite.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://bumikadaka.com/resources/js/function.js"></script>
  <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    console.log(latitude);

                },
                (error) => {
                    // Jika izin ditolak atau terjadi error
                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            console.log("Status: Anda menolak permintaan lokasi.");
                            break;
                        case error.POSITION_UNAVAILABLE:
                            console.log("Status: Informasi lokasi tidak tersedia.");
                            break;
                        case error.TIMEOUT:
                            console.log("Status: Permintaan lokasi timeout.");
                            break;
                        case error.UNKNOWN_ERROR:
                            console.log("Status: Terjadi kesalahan yang tidak diketahui.");
                            break;
                    }
                }
            );
        }


        function sendEmail() {
            // Ambil data dari form
            const form = document.getElementById("emailForm");
            const formData = new FormData(form);

            // Ambil nilai input
            const firstName = formData.get("firstName");
            const lastName = formData.get("lastName");
            const subject = formData.get("subject");
            const emailTo = "contact@ptbumikadaka.com";
            const message = formData.get("message");
            const email = formData.get("email");

            // Hit APi
            fetch('https://ptbumikadaka.com/restfull/email.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ 
                    firstName: firstName, 
                    lastName: lastName,
                    email: email,
                    subject: subject,
                    message: message
                })
            })
                .then(response => response.json())
                .then(data => console.log('Success:', data))
                .catch(error => console.error('Error:', error));

            // Send Email
            // Format mailto link
            const mailtoLink = `mailto:${emailTo}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(
                `Nama: ${firstName} ${lastName}\n` +
                `Email: ${email}\n` +
                `Message: \n ${message}`
            )}`;

            // Buka mailto link
            window.location.href = mailtoLink;
        }
    </script>
</head>