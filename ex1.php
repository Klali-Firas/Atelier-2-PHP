<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $notes=array("Rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.50,"Asma"=>10.00,"ahmed"=>09.5,"Yassine"=>15.5,"Islem"=>12.00);
    $max;
    foreach($notes as $key=>$value){
        if($value==max($notes))$max=$key;
        if($value>=10) echo $key."<br>";
    }

    echo "<br>\nle nombre d'etudients egale a ". count($notes);

    echo "<br>\nl'etudients qui a une bonne note est ". $max;

    echo "<br><table class='table table-striped'><tr><th scope='col'>NOM</th><th scope='col'>Note en PHP</tr><tr>";
    foreach($notes as $key=>$value){

        echo "<tr><td scope ='row'>$key</td><td scope='row'>".number_format($value,2)."</td></tr>";
    }
    echo "</table><br>";

    asort($notes);
    echo "<br><table border><tr><th>NOM</th><th>Note en PHP</tr><tr>";
    foreach($notes as $key=>$value){

        echo "<tr><td>$key</td><td>".number_format($value,2)."</td></tr>";
    }
    echo "</table><br>";
    arsort($notes);
    echo "<br><table border><tr><th>NOM</th><th>Note en PHP</tr><tr>";
    foreach($notes as $key=>$value){

        echo "<tr><td>$key</td><td>".number_format($value,2)."</td></tr>";
    }
    echo "</table><br>";

    echo "<br>\nle moyenne de la classe est ". round(array_sum($notes)/count($notes),2);

?>
</body>
</html>


