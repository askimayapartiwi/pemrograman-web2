<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum 3</title>
</head>
<body>
    <div class="">
        <?php
        include "Visibility.php";

        $visibillity = new Visibility();
        $visibillity ->tampilkanData ();

        echo "<br>";

        echo "Akses di luar kelas <br>";
        echo "Public: " . $visibillity->public . '<br>';
       // echo "Private: " . $visibillity->private . '<br>';
      // echo "Protected: " . $visibillity->protected . '<br>';

        echo "<br><br>";
        echo "<h2>Konsep Pewarisan </h2>";

        include "Mahasiswa.php";

        $mahasiswa = new Mahasiswa ("Aski Maya Partiwi");
        $mahasiswa->ucapSalam();

        $mahasiswaInggris = new MahasiswaAsing ("Ariel Yulian");
        $mahasiswaInggris->ucapSalam();
?>

</div>
</body>
</html>