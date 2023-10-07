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
        <input type="submit" name="sub" id="sub">
    </form>
    <?php
        if(isset($_POST['sub'])){
            $inp=$_POST['inp'];
            $tab= explode(" ",$inp);
            foreach($tab as $t){
                echo strtoupper($t[0]);
            }
        }
    ?>
</body>
</html>