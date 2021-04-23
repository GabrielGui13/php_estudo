<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>While</title>
</head>
<body>
    <h1>
        <?php
            $numin = $_POST['min'];
            $numax = $_POST['max'];
            $numinc = $_POST['inc'];
            
            if ($numin <= $numax) {
                $i = $numin;
                while ($i < $numax) {
                    echo $i . "<br>";
                    $i += $numinc;
                }
            }
            else {
                $i = $numin;
                while ($i >= $numax) {
                    echo $i . "<br>";
                    $i -= $numinc;
                }
            }
        ?>
    </h1>
</body>
</html>