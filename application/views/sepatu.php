<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <?php
    echo validation_errors();
    ?>
    <form action="<?= base_url('welcome/pesan') ?>" method="post">
        Nama: <br>
        <input required type="text" name="nama" autocomplete="off" autofocus> <br>
        Nomor HP: <br>
        <input required type="number" name="nomor_hp" autocomplete="off"> <br>
        Sepatu: <br>
        <select name="sepatu" id="" required>
            <option hidden value="">Pilih Merk Sepatu</option>
            <?php
            foreach ($sepatu as $sepatu) {
                ?>
                <option value="<?= $sepatu['merk'] ?>-<?=$sepatu['harga'] ?>"><?= $sepatu['merk'] ?> - Rp <?= number_format($sepatu['harga'], 0, '.', '.') ?></option>
            <?php
            }
            ?>
        </select> <br>
        Ukuran: <br>
        <select name="ukuran" id="">
            <option hidden value="">Pilih Ukuran Sepatu</option>
            <?php
            foreach (range(32,44) as $ukuran) {
                ?>
                <option value="<?= $ukuran ?>"><?= $ukuran ?></option>
                <?php
            }
            ?>
        </select><br>
        Jumlah Beli: <br>
        <input type="number" required name="jumlah_beli" id=""> <br> <br>
        <input type="submit" value="Pesan Sepatu">
    </form>
</center>
</body>

</html>