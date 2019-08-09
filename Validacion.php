<?php

require ("Formulario.php");
$Formulario = new Postulantes();
$Formulario->nombres= $_POST["Nombre"];
$Formulario->apellidos= $_POST["Apellido"];
$Formulario->edad= $_POST["Edad"];
$Formulario->direccion= $_POST["Direccion"];
$Formulario->telefono= $_POST["Telefono"];
$Formulario->email= $_POST["Email"];
$Formulario->fecha= $_POST["fecha"];
$Formulario->nacionalidad= $_POST["Nacionalidad"];
$Formulario->primaria= $_POST["Primaria"];
$Formulario->basico= $_POST["Basico"];
$Formulario->diversificado= $_POST["Diversificado"];
$Formulario->universidad= $_POST["Universidad"];
$Formulario->otro= $_POST["Otro"];

echo "Nombre: ",$Formulario->nombres, " ",$Formulario->apellidos;
echo "<br>Edad: ",$Formulario->edad;
echo "<br>Direccion: ",$Formulario->direccion;
echo "<br>Telefono: ",$Formulario->telefono;
echo "<br>Email: ",$Formulario->email;
echo "<br>Fecha: ",$Formulario->fecha;
echo "<br>Nacionalidad: ",$Formulario->edad;
echo "<br>Primaria: ",$Formulario->primaria;
echo "<br>Basico: ",$Formulario->basico;
echo "<br>Diversificado: ",$Formulario->diversificado;
echo "<br>Universidad: ",$Formulario->universidad;
echo "<br>Otro: ",$Formulario->otro;

?>

