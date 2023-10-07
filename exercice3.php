<?php
$ch1="Au debit, ils rient de vous, ensuite ils vous combattent, et a la fin , vous gagner";

$ch1=ucwords($ch1);

$tab=explode(" ",$ch1);
$n=count($tab);
$tab[$n-1]=strtoupper($tab[$n-1]);
$ch1=implode(" ",$tab);
echo $ch1."<br>";
?>