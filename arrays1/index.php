<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Vetores </title>
</head>
<body>
    <pre>
        <h2>
            <?php
                function q() {
                    echo "<br>";
                }

                $n = array(3, 5, 8, 2);
                $n[] = 7; //adiciona um valor na última posição que é adicionada
                print_r($n);

                
                $r = range(5, 20, 2); //inicio, fim, incremento
                print_r($r);
                foreach ($r as $valor) {
                    echo "$valor ";
                }


                $e = array(
                    3 => "A",
                    1 => "B",
                    0 => "C",
                    2 => "D"
                );
                $e[] = "E"; //cria um indice a partir do maior indice
                unset($e[3]); //retira o primeiro valor
                print_r($e); //ultimo indice continua 4 pois foi adicionado antes do maior ser removido


                $pessoa = [
                    "nome" => "Gabriel",
                    "idade" => 18,
                    "peso" => 63,
                    "fuma" => false
                ];
                print_r($pessoa);


                //Matrizes

                $matriz = [
                    [1, 2],
                    [3, 4],
                    [5, 6]
                ];
                print_r($matriz);
                echo $matriz[0][0]; //imprime 1
                q();
                $matriz[0][0] = $matriz[1][0]; //troca o valor pra 3
                echo $matriz[0][0];
            ?>
        </h2>
    </pre>
</body>
</html>