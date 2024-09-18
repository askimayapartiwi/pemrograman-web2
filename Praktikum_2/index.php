<?php
include "orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div class="di">
        <?php
            $nasabah = new BankCustomer();
            $nasabah->setcustomerName ('Aski Maya Partiwi');
            $nasabah->setAddress ('Kota Baru, Kota Jambi');
            $nasabah->setEmail ('askimayapartiwi@gmail.com');
            $nasabah->setCard ('Platinum');
            $nasabah->setAcc ('Wadiah');

            $nasabah->insertCard();
            $nasabah->enterPIN(123456);
        ?>
        </div>
</body>
</html>

<!-- localhost/index.php?nama=Aski -->
<!-- http://uinjambi.ac.id/berita?page=1 -->