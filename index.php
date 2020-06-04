<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 B</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->rabiscar();
        $c1->pegar();
        $c1->rabiscar();
        $c1->destampar();
        $c1->rabiscar();
        $c1->guardar(); 
        $c1->destampar();
        $c1->tampar();
        $c1->rabiscar();
        $c1->guardar();
        

        
    ?>
</body>
</html>