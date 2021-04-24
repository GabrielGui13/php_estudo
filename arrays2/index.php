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

                $n = [8, 5, 3, 7]; //4 itens
                echo "O vetor tem " . count($n) . " elementos";
                q();

                $letras = ["A", "B", "C", "D"];
                $letras[] = "E"; //adiciona um elemento no final da array
                array_push($letras, "F"); //adiciona um elemento no final da array
                array_pop($letras); //retira um elemento no final da array
                array_unshift($letras, "Z"); //adiciona um elemento no inicio da array, alterando os indices em 1 pra frente
                array_shift($letras); //retira o primeiro elemento da array, alterando os indices em 1 pra tras
                print_r($letras);
                q();


                sort($n); //ordena os valores de forma crescente sem alterar o indice
                print_r($n);

                rsort($n); //ordena os valores de forma decrescente sem alterar o indice
                print_r($n);



                $a = [7, 3, 8, 1, 2];
                asort($a); //ordena os valores de forma crescente mantendo o indice 
                print_r($a);

                arsort($a); //ordena os valores de forma decrescente mantendo o indice
                print_r($a);

                ksort($a); //ordena os indices da array de forma crescente mantendo os valores
                print_r($a);

                ksort($a); //ordena os indices da array de forma decrescente mantendo os valores
                print_r($a);
                q();


                //como a interface IComparable do C#
                //Tambem funciona com strings
                
                $n1 = 5; //B 
                $n2 = 7; //C
                $n3 = 3; //A
                $n4 = 5; //B

                echo ($n1 <=> $n2); //$n1 menor => retorna -1 
                q();
                echo ($n1 <=> $n3); //$n1 maior => retorna 1 
                q();
                echo ($n1 <=> $n4); //$n1 igual => retorna 0 
                q();
                q();

                echo "Ola \u{9999}"; //Compatibilidade com hex unicode

            ?>
        </h2>
    </pre>
</body>
</html>