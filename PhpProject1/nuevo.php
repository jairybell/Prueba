<?php
$edad=18;
$genero= "F";
$equipo= "V";
if ($edad >= 18){
	echo "<br>Bienvenido a la fiesta</br>";
} else {
	echo "<br>No puede pasar</br>";
}
if($genero == "F"){
	echo"<br>Tiene Bebidas gratis</br>";
} else{
	echo"<br>Tiene que pagar</br>";
}
if($equipo == "V"){
	echo"<br>Venga esos 5 hermano</br>";
} else{
	echo"<br>Fuera de aqui jajaja</br>";
}
?>