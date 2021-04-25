<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Atividade Aula 21 </title>
</head>
<?php
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $estado = $_POST['estado'];
        $data = $_POST['data'];
        $genero = $_POST['sexo'];
        $cinema = $_POST['cinema'] ?? "";
        $musica = $_POST['musica'] ?? ""; //operador de coalescência
        $tech = isset($_POST['tech']) ? $_POST['tech'] : ""; //operador ternario normal
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $confirmSenha = $_POST['senhaCheck'];
        $checkValues = true;
        $display = "inline";

        //Validação de CPF
        $cpfvalido = true;
        $cpfate9 = substr($cpf, 0, 9);
        $cpfD1 = substr($cpf, 9, -1);
        $cpfD2 = substr($cpf, 10);

        //Validação do primeiro digito 
        $aux = 0;
        $soma = 0;
        for ($i = 10; $i >= 2; $i--) {
            $soma += $cpfate9[$aux] * $i;
            $aux++;
        }
        if (($soma * 10) % 11 != $cpfD1) $cpfvalido = false;
        if (($soma * 10) % 11 == 10) $cpfvalido = true;

        //Validação do segundo digito
        $aux = 0;
        $soma = 0;
        for ($i = 11; $i >= 2; $i--) {
            if ($i == 2) $soma += $cpfD1 * $i;
            else {
                $soma += $cpfate9[$aux] * $i;
                $aux++;
            }
        }
        if (($soma * 10) % 11 != $cpfD2) $cpfvalido = false;
        if (($soma * 10) % 11 == 10) $cpfvalido = true;

        //Ultima validação
        $soma = 0;
        $aux = 0;
        for ($i = 0; $i < strlen($cpf); $i++) {
            $soma += $cpf[$i];
        }
        while ($cpf[$aux] == 0) {
            $aux++;
        }
        if ($cpf[$aux] * 11 == $soma) $cpfvalido = false;
        
        //Mostrar senha preenchida ou não (not assigned)
        if ($senha != $confirmSenha || $senha == "") $senha = "n/a"; 

        //Checar espaços brancos nas outras informações
        else if ($nome == "" || $endereco == "" || $estado == "" || $data == "" || $genero == "" || $login == "") $checkValues = false;
        else if ($cinema == "" && $musica == "" && $tech == "") $checkValues = false;

        if ($checkValues == false) $display = "none";

    ?>
<body>
    <h1>
        <table>
            <tr>
                <td> Nome: </td>
                <td> <?php echo $nome; ?> </td>
            </tr>
            <tr>
                <td> CPF: </td>
                <td> <?php echo $cpf . ($cpfvalido ? " (Válido)" : " (Não Válido)"); ?> </td>
            </tr>
            <tr>
                <td> Endereço</td>
                <td> <?php echo $endereco; ?> </td>
            </tr>
            <tr>
                <td> Estado: </td>
                <td> <?php echo $estado; ?> </td>
            </tr>
            <tr>
                <td> Data: </td>
                <td> <?php echo $data ?> </td>
            </tr>
            <tr>
                <td> Gênero: </td>
                <td> <?php echo $genero ?> </td>
            </tr>
            <tr>
                <td> Hobbies: </td>
                <td> <?php echo $cinema . "\n" . $musica . "\n" . $tech; ?></td>
            </tr>
            <tr>
                <td> Login: </td>
                <td> <?php echo $login ?> </td>
            </tr>
            <tr>
                <td> Senha: </td>
                <td> <?php echo $senha; ?> </td>
            </tr>
        </table>
    </h1>
</body>
<style>
    table {
        border: 2px solid black;
        border-collapse: collapse;
        display: <?php echo $display; ?>;
    }
    tr {
        border: 2px solid black;
    }
    td {
        border: 2px solid black;
    }
    </style>
</html>