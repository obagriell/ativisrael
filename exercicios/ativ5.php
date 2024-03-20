    <?php
   
    $nome = $_POST['nome'];
    $escolhaUsuario = $_POST['escolha'];

   
    $opcoes = array('pedra', 'papel', 'tesoura');
    $escolhaComputador = $opcoes[array_rand($opcoes)];

    echo "<p>$nome escolheu: $escolhaUsuario</p>";
    echo "<p>O computador escolheu: $escolhaComputador</p>";

   
    if ($escolhaUsuario == $escolhaComputador) {
        echo "<p>Empate!</p>";
    } elseif (($escolhaUsuario == 'pedra' && $escolhaComputador == 'tesoura') ||
              ($escolhaUsuario == 'papel' && $escolhaComputador == 'pedra') ||
              ($escolhaUsuario == 'tesoura' && $escolhaComputador == 'papel')) {
        echo "<p>$nome Você venceu!</p>";
    } else {
        echo "<p>Você perdeu!</p>";
    }

    echo "<img src='$escolhaUsuario.png' alt='$escolhaUsuario'>";
    echo "<img src='$escolhaComputador.png' alt='$escolhaComputador'>";
    ?>
