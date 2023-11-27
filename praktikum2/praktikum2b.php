<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2 Dimensi</title>
</head>

<body>
    <h4>Array 2 Dimensi</h4>
    <?php
    $array = array(
        array("Apple", "Samsung", "Iphone"),
        array("Xiaomi", "Itel", "Axioo"),
        array("Huawei", "HP", "Lenovo")
    );

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "<br>"; 
    }
    ?>
</body>

</html>