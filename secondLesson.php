<?php

$age = 19;

//suurem võrdne ja väiksem võrdne kirjutatakse nii: >= <=
//kas võrduvad kirjutatakse nii: ==
//ei võrdu kirjutatakse nii: !=


if ($age < 18){
	echo "alaealine";
} else {
	echo "täisealine";
}



?>

<br>

<?php

//for(üks kord kõige alguses nt $i=0;enne igat 
//korda nt kontrollib kas $i<$age, pärast igat korda nt teeb i väärtuse alati suuremaks $i=$i+1)
//eesmärk vanusele vastavalt
//trükime välja 'palju'
// kui trükime $i. enne "palju", siis loendab
// kui muudan $i=1 siia alustab loendamist 1st, et tingimus püsiks ehk 19 siis kirjutas $i <=age
	
for ($i = 0; $i < $age; $i = $i + 1 ){
	
	echo $i."palju ";
	
	
	
}
echo "õnne!";

?>

<br>

<?php
// kirjutad d ja see annab tänase kuupäeva, m on kuu ja Y on aasta nt 1997, y on aasta kujul nt 97
echo date("d.m.Y H:i:s");



?>
