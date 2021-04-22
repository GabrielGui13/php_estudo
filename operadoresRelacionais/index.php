<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Relacionais</title>
</head>
<body>
    <h1>
        <?php
            $a = 3;
            $b = "3";
            $r1 = ($a == $b) ? "SIM":"NAO"; //igual (3 == "3")
            $r2 = ($a === $b) ? "SIM":"NAO"; //identico (3 == "3" mas int != string)

            echo $r1 . "<br>" . $r2 . "<br>";

            $n1 = 5;
            $n2 = 3;

            $maior = ($n1 > $n2) ? $n1 : $n2;
            echo $maior . "<br>";

            $nota1 = $_GET['n1'];
            $nota2 = $_GET['n2'];
            $m = ($nota1 + $nota2) / 2;

            echo "A media entre $nota1 e $nota2 eh de $m" . "<br>";
            echo "O aluno esta " . (($m > 6 || $m < 10) ? "APROVADO":"REPROVADO");
        ?>
    </h1>
</body>
</html>