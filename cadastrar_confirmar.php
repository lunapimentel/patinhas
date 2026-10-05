<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal - Patinhas Felizes</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🐾 Patinhas Felizes</h1>
        <p>Cadastro de Novo Animal para Adoção</p>
    </header>

    <nav>
        <a href="index.php">Início</a>
        <a href="cadastrar.php">Cadastrar Animal</a>
        <a href="listar.php">Animais para Adoção</a>
    </nav>

    <div class="container">
        <div class="card">
            <h2>Formulário de Cadastro</h2>
            
             <!-- AQUI ESCREVER O CÓDIGO EM PHP QUE CAPTURA OS DADOS DOS ANIMAIS E INSERE NO BANCO DE DADOS -->
           <?php
           //dados do animal
                include "db.php";
                $nome = $_POST["nome"];
                $espécie = $_POST["espécie"];
                $idade = $_POST["idade"];
                $porte = $_POST["porte"];
                $descrição = $_POST["descrição"];
           ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Patinhas Felizes - Programação Web 2 | Curso Técnico em Informática | IFBA Campus Ilhéus</p>
    </footer>

</body>
</html>