<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
</head>

<body>
    <h4>Nested Loop</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Masukkan angka: <input type="number" name="num">
        <input type="submit">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    for($i = 0; $i < $num; $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
?>
</body>

</html>