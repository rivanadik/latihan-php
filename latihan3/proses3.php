<?php
if(isset($_POST["band"])) {
    if(is_array($_POST["band"])) {
        $band = $_POST['band'];
        echo "<h3> Band yang saya sukai : <h3/>";
        foreach($band as $b){
            echo $b . "<br>";
        }
    } else {
        echo "Back";
    }
}
?>