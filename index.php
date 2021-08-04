<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>FOLHA SALÁRIAL</h1>
        <?php

$header_tab = [
       "Colaborador",
      "Salário Fixo",
       "Venda semana 1",
       "Venda semana 2",
       "Venda semana 3",
      "Venda semana 4",
       "Total de vendas",
      "Comissão",
      "Salário final"
  ];

  $fnc = array
          (
            array(
                "Nome"=>"Andre",
                'salario'=> 2000.30,
                'semana1'=> 1500.10,
                'semana2'=> 2250.00,
                'semana3'=> 2800.00,
                'semana4'=> 1900.00,
            ),
            array(
                "Nome"=>"Geraldo",
                'salario'=> 2500.00,
                'semana1'=> 1500.00,
                'semana2'=> 4150.20,
                'semana3'=> 3500.00,
                'semana4'=> 2100.00,
            ),
            array(
                "Nome"=>"Janaina",
                'salario'=> 1800.00,
                'semana1'=> 1500.00,
                'semana2'=> 6950.20,
                'semana3'=> 4800.40,
                'semana4'=> 2250.00,
            ),
            array(
                "Nome"=>"João Antônio",
                'salario'=> 2200.00,
                'semana1'=> 1500.00,
                'semana2'=> 4250.00,
                'semana3'=> 3200.00,
                'semana4'=> 1980.00,
            ),

          );

?>
     <table class="border">
        <tr>
            <?php foreach($header_tab as $key => $valor): ?>
                <th class="escuro"><?php echo $valor; ?></th>
                <?php endforeach; ?>
        </tr>
    <?php   
    $total = 0;
    $comissao = 0;
    $sal_final = 0;
    foreach ($fnc  as $key => $value) {
        echo "<tr>";
        $cont = 0;
     foreach ($fnc[$key] as $cedula){
         if($cont > 0){
             echo "<td>"."R$ ".$cedula."</td>";
         }else{
            echo "<td>".$cedula."</td>";
         }
         $cont++;
         $total = $fnc[$key]['semana1'] + $fnc[$key]['semana2']+$fnc[$key]['semana3'] + $fnc[$key]['semana4'];
        }
        echo "<td class='escuro '>".$total."</td>";
        $comissao = $total * 0.05;
        $sal_final = $fnc[$key]['salario'] + $comissao;
        echo "<td class='escuro '>".$comissao."</td>";
        echo "<td class='escuro blue'>".$sal_final."</td>";
        echo "</tr>";
    }
    ?>
    </table>     
 
</body>
</html>