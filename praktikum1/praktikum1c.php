<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>

<body>
    <h4>FOR</h4>

    <form id="myForm">
        Masukkan angka: <input type="number" name="num" id="num">
        <input type="button" value="Submit" onclick="myFunction()">
    </form>

    <p id="demo"></p>

    <script>
    function myFunction() {
        var num = document.getElementById("num").value;
        var text = "";
        var i;
        for (i = 0; i < num; i++) {
            text += "Nomor: " + i + "<br>";
        }
        document.getElementById("demo").innerHTML = text;
    }
    </script>
</body>

</html>