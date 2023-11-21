<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Pemesanan tiket</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card">
        <h1>FORM Pemesanan Tiket <br> Konser</h1>
        <form action="./input_data.php" method="post">
            <label for="username">username:</label>
            <input type="username" name="username" id="username" maxlength="20" class="form-input" required><br>

            <label for="password">Password :</label>
            <input type="password" name="password" id="password" maxlength="20" class="form-input" required><br>

            <label for="tanggal_pesan">Tanggal pesan tiket :</label>
            <input type="date" name="tanggal_pesan" id="tanggal_pesan" maxlength="20" class="form-input" required><br>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" maxlength="20" class="form-input" required><br>

            <textarea name="alamat" id="alamat" placeholder="Alamat" cols="30" class="form-input" required rows="5"></textarea><br>


            <label for="tiketpesan">Tiket yang dipesan :</label>
            <input type="number" name="tiketpesan" id="lapakpesan" maxlength="20" class="form-input" required><br>

            <button type="submit" id="btn-kirim">Kirim</button>
        </form>
    </div>

</body>

</html>