<?php

$age = 19;

//suurem v�rdne ja v�iksem v�rdne kirjutatakse nii: >= <=
//kas v�rduvad kirjutatakse nii: ==
//ei v�rdu kirjutatakse nii: !=


if ($age < 18){
	echo "alaealine";
} else {
	echo "t�isealine";
}



?>

<br>

<?php

//for(�ks kord k�ige alguses nt $i=0;enne igat 
//korda nt kontrollib kas $i<$age, p�rast igat korda nt teeb i v��rtuse alati suuremaks $i=$i+1)
//eesm�rk vanusele vastavalt
//tr�kime v�lja 'palju'
// kui tr�kime $i. enne "palju", siis loendab
// kui muudan $i=1 siia alustab loendamist 1st, et tingimus p�siks ehk 19 siis kirjutas $i <=age
	
for ($i = 0; $i < $age; $i = $i + 1 ){
	
	echo $i."palju ";
	
	
	
}
echo "�nne!";

?>

<br>

<?php
// kirjutad d ja see annab t�nase kuup�eva, m on kuu ja Y on aasta nt 1997, y on aasta kujul nt 97
echo date("d.m.Y H:i:s");



?>
