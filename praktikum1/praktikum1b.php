<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>

<body>
    <h4>Switch Case</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Masukkan angka (1-3): <input type="number" name="angka" id="angka">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $angka = $_POST['angka'];
      
      switch ($angka) {
        case "1":
          echo "Anda memasukkan angka 1";
          break;
        case "2":
          echo "Anda memasukkan angka 2";
          break;
        case "3":
          echo "Anda memasukkan angka 3";
          break;
        default:
          echo "Angka yang Anda masukkan tidak valid";
        }
      }
    ?>
</body>

</html>