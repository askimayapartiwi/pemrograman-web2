<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class ="">
        <?php
            require_once "OrangBiasa.php";
            require_once "OrangInggris.php";
            require_once "Mahasiswa.php";

            $tiwi = new OrangBiasa();
            $tiwi->setNama('Aski Maya Partiwi');
            $tiwi->ucapSalam();

            echo "<br>";

            $baskara = new OrangInggris();
            $baskara->setNama("Adinzi Baskara");
            $baskara->ucapSalam();

            echo "<br>";

            $mahasiswa = new Mahasiswa();
            $mahasiswa->setNama('Aski Maya Partiwi');
            $mahasiswa->setNim("701230027");

            $nilaiMahasiswa = new Nilai();
            $nilaiMahasiswa->setTugas (90);
            $nilaiMahasiswa->setUts (90);
            $nilaiMahasiswa->setUas (90);

            $mahasiswa->setNilai($nilaiMahasiswa);
            $mahasiswa->ucapSalam();
            $mahasiswa->tampilkanData();
    ?>
</div>
</body>
</html>