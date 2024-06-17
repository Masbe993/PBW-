<?php
    if(isset($_GET["submit"])) {//untuk if ini syarat nya biar bisa masuk ke array ini harus submit dlu yang dimana di dalam submit itu sendri terdapat inputan
        $var1 = $_GET["input_1"];//ini nih bisa di sebut array guys ($var1)
        echo $var1;
    }
?>

<html>
    <header>
        <title></title>
    </header>
    <body>
        <form action="" method="GET">
            <input type="text" name="input_1" value="">
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </body>
</html>