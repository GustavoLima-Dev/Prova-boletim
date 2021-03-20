<?php
header("Content-type:text/html; charset=utf8");
//receber os dados do html
$numero = $_POST["numero"];
$i = 1;
$aluno = "Aluno_";


/*while($i <= 10){
    echo $numero." X ".$i." = ".($numero * $i)."<br>";
    $i++;
}
echo "FOR<br>";
for($i = 1; $i <= 10; $i++){
//    $resultado = pow($numero,2); elevando numero ao quadrado
    $resultado = $numero * $i;
    echo "{$numero} X {$i} = {$resultado}<br>";
    }*/

/*echo "<h3>Utilizando estruturada de repetição para imprimir HTML</h3>";
for($i = 1; $i <= 5; $i++){
    echo "<label>Nota {$i} </label>";
    echo "<input type='number' name='nota{$i}'><br>";

}*/
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boletim 2C1</title>
<!--    css interno-->
    <style>
        table, th, td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<!--imprindo variavel php dentro do html-->
<h3>Imprimindo as Notas dos <?php echo $numero; ?> dentro do HTML</h3>
<table >
    <thead>
        <tr>
            <th>Matrícula</th>
            <th> Nome</th>
            <th>Nota projeto</th>
            <th>Nota PI</th>
            <th> Nota PT</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
<!--    utilizar estrutura de repeticao do PHP dentro do HTML-->
     <?php for($i = 1; $numero >= $i ; $i++ ) { ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $aluno.$i?> </td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo ($numero * $i); ?></td>
            <td> <?php echo ($numero * $i + $i ); ?></td>
        </tr>
     <?php } ?>
    </tbody>
</table>
</body>
</html>
