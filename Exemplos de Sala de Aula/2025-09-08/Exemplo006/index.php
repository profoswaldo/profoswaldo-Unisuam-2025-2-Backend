<?php
// Função para mostrar livros disponíveis
function exibirLivrosDisponiveis() {
    echo "<h3>Livros Disponíveis:</h3>";
    echo "- O Senhor dos Anéis<br>";
    echo "- Dom Casmurro<br>";
    echo "- O Pequeno Príncipe<br>";
    echo "- 1984<br><br>";
}

// Função para mostrar regras da biblioteca
function exibirRegrasBiblioteca() {
    echo "<h3>Regras da Biblioteca:</h3>";
    echo "1. Cada aluno pode pegar até 3 livros por vez.<br>";
    echo "2. O prazo de devolução é de 7 dias.<br>";
    echo "3. Em caso de atraso, será cobrada multa.<br>";
    echo "4. Cuide bem dos livros!<br>";
}

// Simulação do sistema
echo "<h2>Bem-vindo à Biblioteca Virtual</h2>";
exibirLivrosDisponiveis();
exibirRegrasBiblioteca();
?>
