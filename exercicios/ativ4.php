<?php
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$numero3 = $_POST["n3"];

if ($numero1 == $numero2 && $numero2 == $numero3) {
    echo "Este é um triângulo equilátero";
    echo '<img src="equilatero.png" alt="Triângulo Equilátero" width="200" height="200">';
        
} elseif ($numero1 == $numero2 || $numero1 == $numero3 || $numero2 == $numero3) {
    echo "Este é um triângulo isósceles";
    echo '<img src="isosceles.png" alt="Triângulo Isósceles" width="200" height="200">';

} else {
    echo "Este é um triângulo escaleno";
    echo '<img src="escaleno.png" alt="Triângulo Escaleno" width="200" height="200">';
}
?>