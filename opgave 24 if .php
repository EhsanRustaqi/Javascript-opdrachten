    <?php
$gewerkteuren =40;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
if ($gewerkteuren <=40) {
    echo "uw basissalris is: € ".$bruto;
    echo "<br> uw belasting is: € ". 0.40*$bruto;
}

?>