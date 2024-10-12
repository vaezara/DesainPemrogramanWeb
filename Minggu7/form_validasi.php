<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi Password dan AJAX</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <span id="email-error" style="color: red;"></span><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span id="password-error" style="color: red;"></span><br>

            <input type="submit" value="Submit">
        </form>

        <div id="result"></div> 
        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    event.preventDefault(); 

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    // Reset pesan error
                    $("#nama-error").text("");
                    $("#email-error").text("");
                    $("#password-error").text("");

                    // Validasi input nama
                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    }

                    // Validasi input email
                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    }

                    // Validasi input password
                    if (password.length < 8) {
                        $("#password-error").text("Password harus minimal 8 karakter.");
                        valid = false;
                    }

                    if (valid) {
                        // Jika validasi berhasil, kirim data menggunakan AJAX
                        $.ajax({
                            url: "proses_validasi.php", 
                            type: "POST",               
                            data: {                     
                                nama: nama,
                                email: email,
                                password: password
                            },
                            success: function(response) {
                                $("#result").html(response);
                            },
                            error: function(xhr, status, error) {
                                $("#result").html("Terjadi kesalahan: " + error);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
