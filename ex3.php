<html>
<body>
    <form method="Post" action="">
<select name="sel">
   
<?php
$tmots = array(
    "john_doe" => "secret123",
    "jane_smith" => "password456",
    "alice_jackson" => "mysecurepwd",
    "bob_davis" => "p@ssw0rd",
    "emily_wilson" => "12345pass",
    "michael_brown" => "secure_pass",
    "susan_jones" => "qwerty123",
    "david_anderson" => "pa##w0rd",
    "linda_martin" => "letmein",
    "william_clark" => "changeme"
);
foreach($tmots as $k=>$v){
    echo " <option value='$v'>$k</option>";
}
?>

</select>
<p name="para"></p>
<input type="submit" name="button" value="select">
</form>
<?php

if(isset($_POST["button"])){

    $selected=$_POST["sel"];

    echo $selected;
}
?>



<form method="Post" action="">
<select name="sel">
   
<?php
$tmots = array(
    "john_doe" => "secret123",
    "jane_smith" => "password456",
    "alice_jackson" => "mysecurepwd",
    "bob_davis" => "p@ssw0rd",
    "emily_wilson" => "12345pass",
    "michael_brown" => "secure_pass",
    "susan_jones" => "qwerty123",
    "david_anderson" => "pa##w0rd",
    "linda_martin" => "letmein",
    "william_clark" => "changeme"
);
foreach($tmots as $k=>$v){
    echo " <option value='$k'>$v</option>";
}
?>

</select>
<p name="para"></p>
<input type="submit" name="button2" value="select">
</form>
<?php

if(isset($_POST["button2"])){

    $selected2=$_POST["sel"];

    echo $selected2;
}
?>
</body>
</html>