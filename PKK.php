<!DOCTYPE html>
<html>
<head>
    <title>Hitung Automatis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .Hai {
            display: flex;
            justify-content: center;
        }
        #hehe {
            margin-right: 1rem;
        }
    </style>

</head>
<body>
<div class="container">
    <h2 style="margin-top: 3rem; margin-bottom: 3rem;">Mari Berhitung Dengan Mas Depin</h2>
    <form method="post">
        <div class="form-group">
            <label for="subjek">Subjeknya ?:</label>
            <input type="text" class="form-control" id="subjek" name="subjek" required>
        </div>
        <div class="form-group">
            <label for="predikat">Predikatnya ?:</label>
            <input type="text" class="form-control" id="predikat" name="predikat" required>
        </div>
        <div class="form-group">
            <label for="angka_awal">Angka Yang akan Dikurang:</label>
            <input type="number" class="form-control" id="angka_awal" name="angka_awal" required>
        </div>
        <div class="form-group">
            <label for="angka_pengurang">Angka Pengurang:</label>
            <input type="number" class="form-control" id="angka_pengurang" name="angka_pengurang" required>
        </div>
        <div class="Hai">
        <button id="hehe" type="submit" class="btn btn-primary">Hitung</button>
        <button id="hehe" onClick="window.location.reload();" class="btn btn-danger">Refresh Page</button>
        </div>
    </form>
    <?php

    //Penghubung antar html dan PHP
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $subjek = $_POST["subjek"];
        $predikat = $_POST["predikat"];
        $angka_awal = $_POST["angka_awal"];
        $angka_pengurang = $_POST["angka_pengurang"];
                                                         

    //Jika angka yang akan dikurang lebih kecil daripada angka pengurangnya
    if ($angka_awal < $angka_pengurang)
    echo "Angka tidak valid";


    //Yang digunakan untuk printing teksnya
        while ($angka_awal >= $angka_pengurang) {
            echo "ada {$angka_awal} {$subjek} sedang {$predikat}, ";
            if ($angka_awal <= 1) {
                echo "sepilah sudah.<br>";
                break;
            } else {
                echo "berhenti dan pergi {$angka_pengurang} {$subjek}, tinggal ";
                $angka_awal -= $angka_pengurang;
                echo "{$angka_awal} {$subjek}<br>";
            }
        }
    }
    

    ?>
</div>
</body>
</html>
