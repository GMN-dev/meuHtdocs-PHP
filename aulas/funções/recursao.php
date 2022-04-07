<?php

// $hierarquia = [
//     [
//     'nome_cargo' => 'CEO',
//     'subordinados' => 
//         [
        
//         [ 'nome_cargo' => 'Diretor comercial',
//           'subordinados'  => [ 
//                             'nome_cargo' => 'Gerente de vendas'
//                             ]
//         ]
//         ,
//         ['nome_cargo' => 'Diretor financeiro',
//         'subordinados' => [
//                             "nome_cargo" => 'Gerente de contas',
//                             "subordinados" => [
//                                             'nome_cargo' => "Supervisor de pagamentos"
//                                             ],
//                             "nome_cargo" => "gerente de Compras",
//                             "subordinados" => [
//                                             "nome_cargo" => 'Supervisor de sumprimentos'
//                                             ]
//                           ]
        
//         ]
        
//         ]
//     ]

// ];


$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                )
            ),

            array(
                'nome_cargo' => 'Diretor de TI',
                'subordinados' => array(
                    array(  
                        'nome_cargo' => 'Gerete de Infra Estrututa',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Suervisor de Infra Estrututa'
                            ) 
                        ) 
                    ), 
                    array(
                        'nome_cargo' => 'Gerente de Desenvolvimento',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Supervisor Dev'
                            )
                        )	
                    ) 
                ) 
            )
        )
    )
);
function exibeCargos($cargos){
    $html = '<ul>';
    foreach($cargos as $cargo){
        $html .=  "<li>";
        
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html = exibeCargos($cargo['subordinados']);
        }

        $html .= "</li>";
    }
    $html .= '<ul/>';

    return $html;
};

echo exibeCargos($hierarquia);


?>