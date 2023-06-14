<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética Ufs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Lista Sintética das UFs</h1><hr><br><br>

   <table>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade Federativa</th>
                <th>Abreviação</th>
                <th>Sede de Governo</th>
                <th>Área (km<sup>2</sup>)</th>
                <th>População (2014)</th>
                <th>Densidade (2005)</th>
                <th>PIB (2015)</th>
                <th>(&#37; Total) (2015)</th>
                <th>PIB per capita (R&#36;) (2015)</th>
                <th>IDH (2010)</th>
                <th>Alfabetização (2016)</th>
                <th>Mortalidade infantil (2016)</th>
                <th>Expectativa de vida (2016)</th>
            </tr>
        </thead>
        <tbody>
       
            <?php
                $Estados_linhas = array(
                    'Acre' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre">',
                    'unidade_federativa' => 'Acre',
                    'abreviacao' => 'AC',
                    'sede_governo' => 'Rio Branco',
                    'area' => number_format(164122.2, 1, ',', '.'),
                    'populacao' => 795145 . '%',
                    'densidade' => 4.30,
                    'pib' => 13622000,
                    'total' => 0.2,
                    'pib_per_capita' =>16953.46,
                    'idh' => 0.663,
                    'alfabetizacao' => 86.9,
                    'mortalidade_infantil' => 98,
                    'expectativa_vida' => 73.9 . 'anos' 

                ),
                'Alagoas' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira do Alagoas">',
                    'unidade_federativa' => 'Alagoas',
                    'abreviacao' => 'AL',
                    'sede_governo' => 'Maceió',
                    'area' => number_format(27767.7, 1, ',', '.'),
                    'populacao' => 3327551	 . '%',
                    'densidade' => 108.61,
                    'pib' => 46364000,
                    'total' => 0.8,
                    'pib_per_capita' =>13877.53,
                    'idh' => 0.631,
                    'alfabetizacao' => 80.6,
                    'mortalidade_infantil' => 19.5,
                    'expectativa_vida' => 71.6 . 'anos' 
                ),

                'Amapa' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Amapá">',
                    'unidade_federativa' => 'Amapá',
                    'abreviacao' => 'AP',
                    'sede_governo' => 'Macapá',
                    'area' => number_format(142814.6, 1, ',', '.'),
                    'populacao' => 756500	 . '%',
                    'densidade' => 4.16,
                    'pib' => 13861000,
                    'total' => 0.2,
                    'pib_per_capita' => 18079.54,
                    'idh' => 0.708,
                    'alfabetizacao' => 95,
                    'mortalidade_infantil' => 23.2,
                    'expectativa_vida' => 73.9 . 'anos' 
                ),

                'Amazonas' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas">',
                    'unidade_federativa' => 'Amazonas',
                    'abreviacao' => 'AM',
                    'sede_governo' => 'Manaus',
                    'area' => number_format(1570745.7, 1, ',', '.'),
                    'populacao' => 3893763	 . '%',
                    'densidade' => 2.05,
                    'pib' => 86560000,
                    'total' => 1.4,
                    'pib_per_capita' => 21978.95,
                    'idh' => 0.674,
                    'alfabetizacao' => 93.1,
                    'mortalidade_infantil' => 18.2,
                    'expectativa_vida' => 71.9 . 'anos' 
                ),

                'Bahia' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia">',
                    'unidade_federativa' => 'Bahia',
                    'abreviacao' => 'BA',
                    'sede_governo' => 'Salvador',
                    'area' => number_format(564692.7, 1, ',', '.'),
                    'populacao' => 15150143	 . '%',
                    'densidade' => 24.46,
                    'pib' => 245025000,
                    'total' => 4.1,
                    'pib_per_capita' => 16115.89,
                    'idh' => 0.660,
                    'alfabetizacao' => 87,
                    'mortalidade_infantil' => 17.3,
                    'expectativa_vida' => 73.5 . 'anos' 
                ),

                 'Ceara' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg" alt="Bandeira do Ceara">',
                    'unidade_federativa' => 'Ceará',
                    'abreviacao' => 'CE',
                    'sede_governo' => 'Fortaleza',
                    'area' => number_format(148825.6, 1, ',', '.'),
                    'populacao' => 8867448	 . '%',
                    'densidade' => 54.40,
                    'pib' => 130621000,
                    'total' => 2.2,
                    'pib_per_capita' => 14669.14,
                    'idh' => 0.682,
                    'alfabetizacao' => 84.8,
                    'mortalidade_infantil' => 14.4,
                    'expectativa_vida' => 73.8 . 'anos' 
                ),

                'Distrito_federal' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Distrito Federal">',            
                    'unidade_federativa' => 'Ceará',
                    'unidade_federativa' => 'Distrito Federal',
                    'abreviacao' => 'DF',
                    'sede_governo' => 'Brasília',
                    'area' => number_format(5822.1, 1, ',', '.'),
                    'populacao' => 2867869	 . '%',
                    'densidade' => 400.73,
                    'pib' => 215613000,
                    'total' => 3.6,
                    'pib_per_capita' => 73971.05,
                    'idh' => 0.824,
                    'alfabetizacao' => 97.4,
                    'mortalidade_infantil' => 10.5,
                    'expectativa_vida' => 78.1 . 'anos' 
                ),

                'Espirito_santo' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Espírito Santos">',              
                    'unidade_federativa' => 'Espírito Santo',
                    'abreviacao' => 'ES',
                    'sede_governo' => 'Vitória',
                    'area' => number_format(46077.5, 1, ',', '.'),
                    'populacao' => 3894899	 . '%',
                    'densidade' => 73.97,
                    'pib' => 120363000,
                    'total' => 2,
                    'pib_per_capita' => 30627.45,
                    'idh' => 0.740,
                    'alfabetizacao' => 93.8,
                    'mortalidade_infantil' => 8.8,
                    'expectativa_vida' => 78.2 . 'anos' 
                ),

                'Goias' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg" alt="Bandeira de Goiás">',              
                    'unidade_federativa' => 'Goiás',
                    'abreviacao' => 'GO',
                    'sede_governo' => 'Goiânia',
                    'area' => number_format(340086.7, 1, ',', '.'),
                    'populacao' => 6551322	 . '%',
                    'densidade' => 16.52,
                    'pib' => 173632000,
                    'total' => 2.9,
                    'pib_per_capita' => 26265.32,
                    'idh' => 0.735,
                    'alfabetizacao' => 93.5,
                    'mortalidade_infantil' => 14.9,
                    'expectativa_vida' => 74.2 . 'anos' 
                ),

                'Maranhao' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg" alt="Bandeira do Maranhão">',              
                    'unidade_federativa' => 'Maranhão',
                    'abreviacao' => 'MA',
                    'sede_governo' => 'São Luís',
                    'area' => number_format(331983.3, 1, ',', '.'),
                    'populacao' => 6861924	 . '%',
                    'densidade' => 18.38,
                    'pib' => 78475000,
                    'total' => 1.3,
                    'pib_per_capita' => 11366.23,
                    'idh' => 0.639,
                    'alfabetizacao' => 83.3,
                    'mortalidade_infantil' => 21.3,
                    'expectativa_vida' => 70.6 . 'anos' 
                ),
                

                



            );

            foreach ($Estados_linhas as $dados => $valor)
            {
                echo "<tr><td>{$Estados_linhas[$dados]['bandeira']}</td>";
                echo "<td>{$Estados_linhas[$dados]['unidade_federativa']}</td>";
                echo "<td>{$Estados_linhas[$dados]['abreviacao']}</td>";
                echo "<td>{$Estados_linhas[$dados]['sede_governo']}</td>";
                echo "<td>{$Estados_linhas[$dados]['area']}</td>";
                echo "<td>{$Estados_linhas[$dados]['populacao']}</td>";
                echo "<td>{$Estados_linhas[$dados]['densidade']}</td>";
                echo "<td>{$Estados_linhas[$dados]['pib']}</td>";
                echo "<td>{$Estados_linhas[$dados]['total']}</td>";
                echo "<td>{$Estados_linhas[$dados]['pib_per_capita']}</td>";
                echo "<td>{$Estados_linhas[$dados]['idh']}</td>";
                echo "<td>{$Estados_linhas[$dados]['alfabetizacao']}</td>";
                echo "<td>{$Estados_linhas[$dados]['mortalidade_infantil']}</td>";
                echo "<td>{$Estados_linhas[$dados]['expectativa_vida']}</td></tr>";
            }

        ?>
        </tbody>
    </table>
</body>

</html>