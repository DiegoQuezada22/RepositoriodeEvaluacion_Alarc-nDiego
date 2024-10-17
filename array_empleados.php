<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$empleados = [
    ["nombre" => "Juan", "sueldo" => 2500],
    ["nombre" => "Maria", "sueldo" => 3000],
    ["nombre" => "Pedro", "sueldo" => 2200],
    ["nombre" => "Ana", "sueldo" => 2800],
    ["nombre" => "Luis", "sueldo" => 2600]
];

usort($empleados, function($empleado1, $empleado2) {
    return $empleado1['sueldo'] <=> $empleado2['sueldo'];
});

array_push($empleados,
["nombre"=>"Carlos", "sueldo"=>2700],
["nombre"=>"Sofia", "sueldo"=>2900]
);

echo "Empleados : \n";
foreach ($empleados as $empleado) {
	echo "<br>Nombre:".$empleado['nombre']."<br>Sueldo:".$empleado['sueldo']."\n";
}
?>

</body>
</html>