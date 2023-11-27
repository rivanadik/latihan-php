<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF - ELSEIF</title>
</head>

<body>
    <h4>IF - ELSEIF</h4>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Masukkan angka: <input type="number" name="num" id="num">
        <input type="submit">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];

    if ($num < 10) {
        echo "Selamat Pagi!";
    } elseif ($num < 18) {
        echo "Selamat Sore!";
    } else {
        echo "Selamat Malam!";
    }
}
?>
</body>

</html>