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

        if(isset($_POST) && $_POST != null){
            $c1 = new Caneta;
            $c1->cor = $_POST['cor'];
            $c1->ponta = $_POST['ponta'];
            $c1->modelo = $_POST['modelo'];          
           
        }
    ?>

<form action="" method="post">
        <label for="modelo">Modelo:</label>
        <select name="modelo">
            <option value="Bic" <?=(isset($c1->modelo) && $c1->modelo == 'Bic')?'selected':''?> >Bic</option>
            <option value="Generica" <?=(isset($c1->modelo) && $c1->modelo == 'Generica')?'selected':''?> >Generica</option>
        </select>

        <label for="cor">Cor:</label>
        <select name="cor">
            <option value="Azul" <?=(isset($c1->cor) && $c1->cor == 'Azul')?'selected':''?> >Azul</option>
            <option value="Verde" <?=(isset($c1->cor) && $c1->cor == 'Verde')?'selected':''?> >Verde</option>
            <option value="Vermelha" <?=(isset($c1->cor) && $c1->cor == 'Vermelha')?'selected':''?> >Vermelha</option>
        </select>

        <label for="ponta">Ponta:</label>
        <select name="ponta">
            <option value="Fina" <?=(isset($c1->ponta) && $c1->ponta == 'Fina')?'selected':''?> >Fina</option>
            <option value="Porosa" <?=(isset($c1->ponta) && $c1->ponta == 'Porosa')?'selected':''?> >Porosa</option>            
        </select>

        <input type="submit" name="Pegar" value="Pegar">
    </form>

    <?php        
      

        if(isset($_POST) && $_POST != null){           
                      
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
        }
    ?>

</body>
</html>