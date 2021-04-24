<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções</title>
</head>
<body>
    <h1>
        <?php
            function soma1 ($n1, $n2) {
                echo $n1 + $n2 . "<br>";
            }
            function soma2 ($n1, $n2) {
                return $n1 + $n2 . "<br>";
            }
            function soma3() {
                $p = func_get_args(); //cria uma array com todos os parametros
                $total = func_num_args(); //conta os parametros passados
                $soma = 0;

                for ($i = 0; $i < $total; $i++) {
                    $soma += $p[$i];
                }
                return $soma;
            }
            
            echo "F1 = ";
            soma1(3, 4); 
            echo "<br>" . "F2 = " . soma2(3, 4) . "<br>";
            echo "F3 = " . soma3(1, 2, 3, 4) . "<br>";
            echo "F3 = " . soma3(1, 2, 3, 4, 5) . "<br>";

            $nomes = [
                "Gabriel" => "Gostoso",
                "Neto" => "Gordo",
                "Mariana" => "Rapariga"
            ];

            echo $nomes["Gabriel"];

        ?>
    </h1>
</body>
</html>