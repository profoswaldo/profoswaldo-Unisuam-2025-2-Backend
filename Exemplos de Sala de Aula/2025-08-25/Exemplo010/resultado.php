<?php
$idade = $_GET["idade"];
$status = $_GET["status"];

if ($status === "maior") {
    echo "Você tem $idade anos. <br>";
    echo "Situação: Maior de idade";
} else {
    echo "Você tem $idade anos. <br>";
    echo "Situação: Menor de idade";
}
?>
