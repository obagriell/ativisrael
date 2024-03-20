<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numero = $_POST["numero"];
   
    if ($numero % 2 == 0) {
        echo "<p>O número $numero é par.</p>";
    } else {
        echo "<p>O número $numero é ímpar.</p>";
    }
}
?>