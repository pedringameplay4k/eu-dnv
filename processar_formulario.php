<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $nome = htmlspecialchars($_GET["nome"]);
     $Endereço = htmlspecialchars($_GET["Endereço"]);
     $Cidade = htmlspecialchars($_GET["Cidade"]);
     $Estado = htmlspecialchars($_GET["Estado"]);

    echo "Nome: <br> $nome <br>";
    echo "Endereço: <br> $Endereço <br>";
    echo "Cidade: <br> $Cidade <br>";
    echo "Estado: <br> $Estado <br>";
    
    echo "<br>";
    echo "<a href='index.html'>Voltar à página </a>";
    echo "<br>";

 
}
?>
