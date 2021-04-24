<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>While</title>
</head>
<body>
    <h1>
        <?php
            $num = $_POST['num'];
            $m = 2;
            $primo = true;

            echo "Multiplos de $num = 1-";

            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    echo "$i ";
                    $primo = false;
                    $m++;
                }
            }

            echo $num . "<br>" . (($primo) ? "$num é primo" : "$num não é primo");
        ?>
    </h1>
</body>
</html>