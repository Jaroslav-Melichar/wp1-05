<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "Cena vodky: 119 " . $vodkaPrice;

echo "<br>Peníze bezdomovce před návštěvou večerky: 132 " . $homelessMoney . "<br>";

if($homelessMoney > 132 ) {
    echo "Vodka zakoupena!";
 } elseif($homelessMoney < 119) {
     echo "Nedostatek peněz";
 } elseif ($vodkaPrice < 100) {
    echo "Cena vodky spadla nyní si ji můžeš zakoupit";
}

echo "<br>Peníze bezdomovce po návštěvě večerky: 13 " . $homelessMoney . "<br>";

?>



</body>
</html>