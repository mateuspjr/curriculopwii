<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Currículo</title>
</head>
    <body>
    <?php
        if ($_POST) {
            $nome = $_POST['nome'];
            $data_nascimento = $_POST['data_nascimento'];
            $genero = $_POST['genero'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $habilitacao = $_POST['habilitacao'];
            $habilidades = $_POST['habilidades'];
            $competencias = $_POST['competencias'];
            echo `
                <h1>Currículo</h1>
                <h2>Dados pessoais:</h2>
                <p><strong>Nome:</strong> $_POST['nome']</p>;
                <p><strong>Data de Nascimento:</strong> $_POST['data_nascimento']</p>
                <p><strong>Gênero:</strong> $_POST['genero']</p>
                <p><strong>Tel/Cel:</strong> $_POST['telefone']</p>
                <p><strong>Email:</strong> $_POST['email']</p>
                
                <h2>Endereço:</h2>
                <p><strong>Logradouro:</strong> $_POST['logradouro'] </p>
                <p><strong>Numero:</strong> $_POST['numero'] </p>
                <p><strong>Bairro:</strong> $_POST['bairro'] </p>
                <p><strong>Cidade:</strong> $_POST['cidade'] </p>
                <p><strong>UF:</strong> $_POST['UF'] </p>
        
                <h2>Habilitação:</h2>
                <p>$habilitacao</p>
                <p><strong>Logradouro:</strong> $_POST['logradouro'] </p>
                <p><strong>Numero:</strong> $_POST['numero'] </p>
                <p><strong>Bairro:</strong> $_POST['bairro'] </p>
                <p><strong>Cidade:</strong> $_POST['cidade'] </p>
                <p><strong>UF:</strong> $_POST['UF'] </p>
        
                <h2>Habilidades:</h2>
                <p>$habilidades</p>
                <p><strong>Logradouro:</strong> $_POST['logradouro'] </p>
                <p><strong>Numero:</strong> $_POST['numero'] </p>
                <p><strong>Bairro:</strong> $_POST['bairro'] </p>
                <p><strong>Cidade:</strong> $_POST['cidade'] </p>
                <p><strong>UF:</strong> $_POST['UF'] </p>
        
                <h2>Competências:</h2>
                <p>$competencias</p>
                <p><strong>Logradouro:</strong> $_POST['logradouro'] </p>
                <p><strong>Numero:</strong> $_POST['numero'] </p>
                <p><strong>Bairro:</strong> $_POST['bairro'] </p>
                <p><strong>Cidade:</strong> $_POST['cidade'] </p>
                <p><strong>UF:</strong> $_POST['UF'] </p>
        
                <h2>Experências:</h2>
                <p>$experiencias</p>
                <p><strong>Cargo:</strong> $_POST['cargo'] </p>
                <p><strong>Data de Início:</strong> $_POST['inicio'] </p>
                <p><strong>Data de Termino:</strong> $_POST['termino'] </p>
                <p><strong>Local de Trabalho:</strong> $_POST['local'] </p>
                <p><strong>Descrição de Atividade:</strong> $_POST['descricao_atv'] </p>
            `;
                    }
    ?>
    </body>
    </html>