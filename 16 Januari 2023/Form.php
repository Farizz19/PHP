<html>
    <head>
        <title>FORM PHP</title>

        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet">

    </head>
    <body>

    <h1>BUKU TAMU</h1>
    <hr>

    <form action="Proses.php" method="POST">

        <label>Nama</label>
        <label>:</label>
        <input type="text" name="nama">
        <br>

        <label>Email</label>
        <label>:</label>
        <input type="email" name="email">
        <br>

        <label>Pesan</label>
        <label>:</label>
        <textarea name="pesan"></textarea>
        <br><br>
        
        <input type="submit" value="simpan">
    </form>

   

    </body>
</html>