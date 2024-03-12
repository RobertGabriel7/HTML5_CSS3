
<?php

#Para verificar sem os dados foram enviados do formulario para as variaveis



// Verifica se o formulário foi enviado antes de acessar os dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "email" foi enviado
    if (isset($_POST["email1"])) {
        $email = $_POST["email1"];
    } else {
        $email = "Campo de email não preenchido";
    }

    // Verifica se o campo "senha" foi enviado
    if (isset($_POST["senha1"])) {
        $senha = $_POST["senha1"];
    } else {
        $senha = "Campo de senha não preenchido";
    }

    // Exibe os valores de $email e $senha
    echo "E-mail: $email <br> Senha: $senha ";
} else {
    echo "Formulário não enviado";
}





?>