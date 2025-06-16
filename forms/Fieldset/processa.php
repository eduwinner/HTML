<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Dados recebidos:</h2>";

    foreach ($_POST as $campo => $valor) {
        echo "<strong>" . ucfirst($campo) . ":</strong> " . htmlspecialchars($valor) . "<br>";
    }
} else {
    echo "Acesso inválido.";
}
?>
