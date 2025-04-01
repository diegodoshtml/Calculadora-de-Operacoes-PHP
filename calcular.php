<?php
include "funcao.php";

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['op'];


switch ($operacao) {
    case '+':
        $resultado = soma($numero1, $numero2);

        break;

        default:
        $resultado = "";
        break;
    
    case '-':
        $resultado = subtracao($numero1, $numero2);
    
        break;
    
        $resultado = "";
        break;

    case '/':
        $resultado = divisao($numero1, $numero2);
        
        break;
        
        $resultado = "";
        break;

    case '*':
        $resultado = multiplicacao($numero1, $numero2);
        
        break;
        
        $resultado = "O resultado é";
        break;
}

include "cabecalho.php";
?>

<div class="row text-center">
    <div class="col bg-sucess">total: <?php echo $resultado; ?></div>
</div>
<?php 
include "rodape.php";
?>