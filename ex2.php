
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
    $tabpays1 = array(
        "United States",
        "Canada",
        "United Kingdom",
        "Australia",
        "France",
        "Germany",
        "Japan",
        "Brazil",
        "India",
        "China"
    );
    echo "<h1>ordre alphabitque croissant </h1>";
    sort($tabpays1);
    foreach($tabpays1 as $t){
        echo "$t<br/>";
    }
    echo "<h1>ordre alphabitque decroissant </h1>";
    rsort($tabpays1);
    foreach($tabpays1 as $t){
        echo "$t<br/>";
    }

    $tabpays2 = array(
        "United States" => "Washington, D.C.",
        "Canada" => "Ottawa",
        "United Kingdom" => "London",
        "Australia" => "Canberra",
        "France" => "Paris",
        "Germany" => "Berlin",
        "Japan" => "Tokyo",
        "Brazil" => "Brasília",
        "India" => "New Delhi",
        "China" => "Beijing"
    );

    echo "<h1>ordre alphabitque croissant </h1>";
    ksort($tabpays2);
    foreach($tabpays2 as $k=>$v){
        echo "$k => $v<br/>";
    }
    echo "<h1>ordre alphabitque decroissant </h1>";
    krsort($tabpays2);
    foreach($tabpays2 as $k=>$v){
        echo "$k => $v<br/>";
    }
?>
<h1>Table of countries</h1>
    <table class="table table-striped">
        <tr><th scope="col">Country</th></tr>
        <?php
        foreach($tabpays1 as $t){
            echo "<tr><td scope ='row'>$t</td></tr>";
        }
        ?>
    </table>
    <hr>
<h1>Table of countries and thier Capitals</h1>
    <table class="table table-striped">
        <tr><th scope="col">Country</th><th scope="col">Capital</th></tr>
        <?php
        foreach($tabpays2 as $k=>$v){
            echo "<tr><td scope ='row'>$k</td><td scope ='row'>$v</td></tr>";
        }
        ?>
    </table>
</body>
</html>
