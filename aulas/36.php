<?php // funções recursivas

    $hierarquia = array(
        array(
            'nome_cargo'=>'CEO',
            'subordinados'=>array(
                
                // Inicio: Diretor Comercial
                array(
                    'nome_cargo'=>'Diretor Comercial',
                    'subordinados'=>array(

                        array(
                            'nome_cargo'=>'Gerente de Vendas',
                        ),

                    ),
                ),

                // Inicio: Diretor Financeiro
                array(
                    'nome_cargo'=>'Diretor Financeiro',
                    'subordinados'=>array(
                        
                        array(
                            'nome_cargo'=>'Gerente de Contas',
                            'subordinados'=>array(
                                array(
                                    'nome_cargo'=>'Supervisor de Pagamentos',
                                ),
                            ),
                        ),

                        array(
                            'nome_cargo'=>'Gerente de Compras',
                            'subordinados'=>array(
                                array(
                                    'nome_cargo'=>'Supervisor de Suprimentos',
                                ),
                            ),
                        ),

                    ),
                ),
            ),
        ),
    );

    function exibirCargos($cargos){
        $html = '<ul>';
        foreach($cargos as $cargo){
            // FORMA ANTIGA
            // $html .= '<li>' . $cargo['nome_cargo'] . '</li>'; // CEO
            // $html .= '<ul>';
            // foreach($cargo['subordinados'] as $ceo){
            //     $html .= '<li>' . $ceo['nome_cargo'] . '</li>';
            //     $html .= '<ul>';
            //     foreach($ceo['subordinados'] as $diretor){ // DIRETOR
            //         $html .= '<li>' . $diretor['nome_cargo'] . '</li>';
            //         $html .= '<ul>';
            //         foreach($diretor['subordinados'] as $gerente){ // GERENTE
            //             $html .= '<li>' . $gerente['nome_cargo'] . '</li>';
            //         }
            //         $html .= '</ul>';
            //     }
            //     $html .= '</ul>';
            // }
            // $html .= '</ul>';

            // NOVA RECURSIVA
            $html .= '<li>' . $cargo['nome_cargo'] . '</li>'; // Cargo
            if( isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ) $html .= exibirCargos($cargo['subordinados']);

        }
        $html .= '</ul>';

        return $html;
    }

    echo exibirCargos($hierarquia);