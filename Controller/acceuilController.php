<?php

include "Model/acceuilModel.php";

include "View/acceuil.php";

$last = lastProduit();

echo $last['nom']."<br>"; 
$photo = $last['photo'];
echo "<img src='$photo' width='20%' height='auto'></img><br>";
echo $last['prix']." €<br>";

?>

<button>Découvrir</button>
