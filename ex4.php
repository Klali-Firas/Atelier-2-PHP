<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="inp" id="inp"><br>
        <input type="number" name="deb"placeholder="position du debit"><br>
        <input type="number" name="length"placeholder="longeur"><br>
        <input type="submit" name="sub" id="sub">
    </form>
    <?php
        if(isset($_POST['sub'])){
            $inp=$_POST['inp'];
            echo $inp."<br>";
            echo  "length : ".strlen($inp)."<br>";
            $deb=$_POST["deb"];
            $len=$_POST['length'];
            echo "substr : ".substr($inp,$deb,$len)."<br>";
            echo "reversed String : ".strrev($inp);
        }
    ?>

</body>
</html>