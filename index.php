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

                 'Mato_grosso' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso">',
                        'unidade_federativa' => 'Mato Grosso',
                        'abreviacao' => 'MT',
                        'sede_governo' => 'Cuiabá',
                        'area' => number_format(903357.9, 1, ',', '.'),
                        'populacao' => 3236578,
                        'densidade' => 3.10,
                        'pib' => 107418000,
                        'total' => 1.8,
                        'pib_per_capita' => 32894.96,
                        'idh' => 0.725,
                        'alfabetizacao' =>93.5,
                        'mortalidade_infantil' => 16.9,
                        'expectativa_vida' => 74.2 . 'anos'
                    ),

                    'Mato_grosso_do_sul' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul">',
                        'unidade_federativa' => 'Mato Grosso do Sul',
                        'abreviacao' => 'MS',
                        'sede_governo' => 'Campo Grande',
                        'area' => number_format(357125.0, 1, ',', '.'),
                        'populacao' => 2630098,
                        'densidade' => 6.34,
                        'pib' => 83082000,
                        'total' => 1.4,
                        'pib_per_capita' => 31337.22,
                        'idh' => 0.729,
                        'alfabetizacao' => 93.7,
                        'mortalidade_infantil' => 14.0,
                        'expectativa_vida' => 75.5. 'anos'
                    ),
                    'Minas_gerais' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais">',
                        'unidade_federativa' => 'Minas Gerais',
                        'abreviacao' => 'MG',
                        'sede_governo' => 'Belo Horizonte',
                        'area' => number_format(586528.3, 1, ',', '.'),
                        'populacao' => 20777672,
                        'densidade' => 32.79,
                        'pib' => 519326000,
                        'total' => 8.7,
                        'pib_per_capita' => 24884.94,
                        'idh' => 0.731,
                        'alfabetizacao' => 93.8,
                        'mortalidade_infantil' => 10.9,
                        'expectativa_vida' => 77.2 . 'anos'
                    ),
                    'Para' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg" alt="Bandeira do Pará">',
                        'unidade_federativa' => 'Pará',
                        'abreviacao' => 'PA',
                        'sede_governo' => 'Belém',
                        'area' => number_format(1247689.5, 1, ',', '.'),
                        'populacao' => 8101180,
                        'densidade' => 5.58,
                        'pib' => 130883000,
                        'total' => 2.2,
                        'pib_per_capita' => 16009.98,
                        'idh' => 0.646,
                        'alfabetizacao' => 90.7,
                        'mortalidade_infantil' => 16.6,
                        'expectativa_vida' => 72.1 . 'anos'
                    ),
                    'Paraiba' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg" alt="Bandeira da Paraíba">',
                        'unidade_federativa' => 'Paraíba',
                        'abreviacao' => 'PB',
                        'sede_governo' => 'João Pessoa',
                        'area' => number_format(56439.8, 1, ',', '.'),
                        'populacao' => 3950359,
                        'densidade' => 63.71,
                        'pib' => 56140000,
                        'total' => 0.9,
                        'pib_per_capita' => 14133.32,
                        'idh' => 0.658,
                        'alfabetizacao' => 83.7,
                        'mortalidade_infantil' => 16.1,
                        'expectativa_vida' => 73.2 . 'anos'
                    ),

                      'Parana' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg" alt="Bandeira do Paraná">',
                        'unidade_federativa' => 'Paraná',
                        'abreviacao' => 'PR',
                        'sede_governo' => 'Curitiba',
                        'area' => number_format(199314.9, 1, ',', '.'),
                        'populacao' => 11112062,
                        'densidade' => 51.48,
                        'pib' => 376960000,
                        'total' => 6.3,
                        'pib_per_capita' =>33768.62,
                        'idh' => 0.749,
                        'alfabetizacao' => 95.5,
                        'mortalidade_infantil' => 9.3,
                        'expectativa_vida' => 77.1. 'anos'
                    ),

                    'Pernambuco' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco">',
                        'unidade_federativa' => 'Pernambuco',
                        'abreviacao' => 'PE',
                        'sede_governo' => 'Recife',
                        'area' => number_format(98311.6, 1, ',', '.'),
                        'populacao' => number_format(9297861, 0, ' ', '.'),
                        'densidade' => number_format(85.58, 2, ','),
                        'pib' => number_format(156955000, 0, ' ', '.'),
                        'total' => number_format(2.6, 1, ','),
                        'pib_per_capita' => number_format(16795.34, 2, ',', '.'),
                        'idh' => number_format(0.673, 3, ','),
                        'alfabetizacao' => number_format(87.2, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(12.7, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(73.9, 1, ',') . 'anos'
                    ),

                    'Piaui' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg" alt="Bandeira do Piauí">',
                        'unidade_federativa' => 'Piauí',
                        'abreviacao' => 'PI',
                        'sede_governo' => 'Teserina',
                        'area' => number_format(251529.2, 1, ',', '.'),
                        'populacao' => number_format(3198185, 0, ' ', '.'),
                        'densidade' => number_format(11.95, 2, ','),
                        'pib' => number_format(39148000, 0, ' ', '.'),
                        'total' => number_format(0.7, 1, ','),
                        'pib_per_capita' => number_format(12218.51, 2, ',', '.'),
                        'idh' => number_format(0.646, 3, ','),
                        'alfabetizacao' => number_format(82.8, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(19.1, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(71.1, 1, ',') . 'anos'
                    ),

                    'Rio_de_janeiro' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro">',
                        'unidade_federativa' => 'Rio de Janeiro',
                        'abreviacao' => 'RJ',
                        'sede_governo' => 'Rio de Janeiro',
                        'area' => number_format(43696.1, 1, ',', '.'),
                        'populacao' => number_format(16497395, 0, ' ', '.'),
                        'densidade' => number_format(352.05, 2, ','),
                        'pib' => number_format(659137000, 0, ' ', '.'),
                        'total' => number_format(11, 1, ','),
                        'pib_per_capita' => number_format(39826.95, 2, ',', '.'),
                        'idh' => number_format(0.761, 3, ','),
                        'alfabetizacao' => number_format(97.3, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(11.5, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(76.2, 1, ',') . 'anos'
                    ),

                    'Rio_grande_do_norte' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira do Rio Grande do Norte">',
                        'unidade_federativa' => 'Rio Grande do Norte',
                        'abreviacao' => 'RN',
                        'sede_governo' => 'Natal',
                        'area' => number_format(52796.8, 1, ',', '.'),
                        'populacao' => number_format(3419550, 0, ' ', '.'),
                        'densidade' => number_format(56.88, 2, ','),
                        'pib' => number_format(57250000, 0, ' ', '.'),
                        'total' => number_format(1, 1, ','),
                        'pib_per_capita' => number_format(16631.86, 2, ',', '.'),
                        'idh' => number_format(0.684, 3, ','),
                        'alfabetizacao' => number_format(85.3, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(14.7, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(75.7, 1, ',') . 'anos'
                    ),

                    'Rio_grande_do_sul' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira do Rio Grande do Sul">',
                        'unidade_federativa' => 'Rio Grande do Sul',
                        'abreviacao' => 'RS',
                        'sede_governo' => 'Porto Alegre',
                        'area' => number_format(281748.5, 1, ',', '.'),
                        'populacao' => number_format(11228091, 0, ' ', '.'),
                        'densidade' => number_format(38.49, 2, ','),
                        'pib' => number_format(381985000, 0, ' ', '.'),
                        'total' => number_format(6.4, 1, ','),
                        'pib_per_capita' => number_format(33960.36, 2, ',', '.'),
                        'idh' => number_format(0.746, 3, ','),
                        'alfabetizacao' => number_format(96.8, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(9.6, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(77.8, 1, ',') . 'anos'
                    ),

                    'Rondonia' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg" alt="Bandeira de Rondônia">',
                        'unidade_federativa' => 'Rondônia',
                        'abreviacao' => 'RO',
                        'sede_governo' => 'Porto Velho',
                        'area' => number_format(237576.2, 1, ',', '.'),
                        'populacao' => number_format(1755015, 0, ' ', '.'),
                        'densidade' => number_format(6.46, 2, ','),
                        'pib' => number_format(36563000, 0, ' ', '.'),
                        'total' => number_format(0.6, 1, ','),
                        'pib_per_capita' => number_format(20677.95, 2, ',', '.'),
                        'idh' => number_format(0.690, 3, ','),
                        'alfabetizacao' => number_format(93.3, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(20.0, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(71.3, 1, ',') . 'anos'
                    ),

                    'Roraima' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima">',
                        'unidade_federativa' => 'Roraima',
                        'abreviacao' => 'RR',
                        'sede_governo' => 'Boa Vista',
                        'area' => number_format(224299.0, 1, ',', '.'),
                        'populacao' => number_format(500826, 0, ' ', '.'),
                        'densidade' => number_format(1.74, 2, ','),
                        'pib' => number_format(10354000, 0, ' ', '.'),
                        'total' => number_format(0.2, 1, ','),
                        'pib_per_capita' => number_format(20476.71, 2, ',', '.'),
                        'idh' => number_format(0.707, 3, ','),
                        'alfabetizacao' => number_format(93.4, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(17.2, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(71.5, 1, ',') . 'anos'
                    ),
                    'Santa_catarina' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="Bandeira de Santa Catarina">',
                        'unidade_federativa' => 'Santa Catarina',
                        'abreviacao' => 'SC',
                        'sede_governo' => 'Florianópolis',
                        'area' => number_format(95346.2, 1, ',', '.'),
                        'populacao' => number_format(6734568, 0, ' ', '.'),
                        'densidade' => number_format(61.53, 2, ','),
                        'pib' => number_format(249073000, 0, ' ', '.'),
                        'total' => number_format(4.2, 1, ','),
                        'pib_per_capita' => number_format(36525.28, 2, ',', '.'),
                        'idh' => number_format(0.774, 3, ','),
                        'alfabetizacao' => number_format(97.2, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(9.2, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(79.1, 1, ',') . 'anos'
                    ),
                    
                    'Sao_paulo' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg" alt="Bandeira de São Paulo">',
                        'unidade_federativa' => 'São Paulo',
                        'abreviacao' => 'SP',
                        'sede_governo' => 'São Paulo',
                        'area' => number_format(248209.4, 1, ',', '.'),
                        'populacao' => number_format(44169350, 0, ' ', '.'),
                        'densidade' => number_format(162.93, 2, ','),
                        'pib' => number_format(1939890000, 0, ' ', '.'),
                        'total' => number_format(32.4, 1, ','),
                        'pib_per_capita' => number_format(43694.68, 2, ',', '.'),
                        'idh' => number_format(0.783, 3, ','),
                        'alfabetizacao' => number_format(97.2, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(9.9, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(78.1, 1, ',') . 'anos'
                    ),

                    'Sergipe' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" alt="Bandeira de Sergipe">',
                        'unidade_federativa' => 'Sergipe',
                        'abreviacao' => 'SE',
                        'sede_governo' => 'Aracaju',
                        'area' => number_format(21910.3, 1, ',', '.'),
                        'populacao' => number_format(2227294, 0, ' ', '.'),
                        'densidade' => number_format(89.81, 2, ','),
                        'pib' => number_format(38554000, 0, ' ', '.'),
                        'total' => number_format(0.6, 1, ','),
                        'pib_per_capita' => number_format(17189.28, 2, ',', '.'),
                        'idh' => number_format(0.665, 3, ','),
                        'alfabetizacao' => number_format(85.3, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(16.2, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(72.7, 1, ',') . 'anos'
                    ),

                    'Tocantins' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg" alt="Bandeira do Tocantins">',
                        'unidade_federativa' => 'Tocantins',
                        'abreviacao' => 'TO',
                        'sede_governo' => 'Palmas',
                        'area' => number_format(277620.9, 1, ',', '.'),
                        'populacao' => number_format(1502759, 0, ' ', '.'),
                        'densidade' => number_format(4.70, 2, ','),
                        'pib' => number_format(28930000, 0, ' ', '.'),
                        'total' => number_format(0.5, 1, ','),
                        'pib_per_capita' => number_format(19094.16, 2, ',', '.'),
                        'idh' => number_format(0.699, 3, ','),
                        'alfabetizacao' => number_format(89.6, 1, ',') . '%',
                        'mortalidade_infantil' => number_format(15.8, 1, ',') . '&#8240;',
                        'expectativa_vida' => number_format(73.4, 1, ',') . 'anos'
                    )
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