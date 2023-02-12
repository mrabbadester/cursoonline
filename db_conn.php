<?php

$sname= "localhost";
$unmae= "microabb_cursos";
$password = ",xt)9s[P6?VA";

$db_name = "microabb_cursobasic";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}