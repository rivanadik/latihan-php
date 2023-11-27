<?php
if (isset($_POST['submit'])) {
    $text1 = $_POST['teman1'];
    $text2 = $_POST['teman2'];
    $text3 = $_POST['teman3'];
    echo "<h3>Teman<h3/>";
    echo "1. $text1 <br/>";
    echo "2. $text2 <br/>";
    echo "3. $text3 <br/>";
} else {
    echo "Formulir belum di-submit.";
}

?>