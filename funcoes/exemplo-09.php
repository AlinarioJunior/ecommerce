<?php

$hierarquia = array(
        array(
                'nome_cargo'=>'CEO',
                'subordinados' => array(
                        //início: Diretor Comercial
                        array(
                                'nome_cargo'=>'Diretor Comercial',
                                'subordinados'=>array(
                                        //Fim: Diretor Comercial
                                        array(
                                                'nome_cargo'=>'Gerente de Vendas',
                                        )
                                        //Inicio: Gerente de vendas.
                                )
                        ),
                        //Fim: Gerente de vendas.
                        //Inicio: Diretor Financeiro.
                        array(
                                'nome_cargo'=>'Diretor Financeiro',
                                'subordinados' => array(
                                        //Inicio: Contas a pagar
                                        array(
                                                'nome_cargo'=>'Gerete de Contas a Pagar',
                                                'subordinados'=>array(
                                                     //Inicio Supervisor
                                                     array(

                                                        'nome_cargo'=> 'Supervisor de Pagamentos',

                                                     )
                                                       //Termino: Supervisor de pagaentos
                                                )
                                                     ),
                                        //Termino: Gerente de Contas a Pagar
                                        //Inicio: Gerente de Compras
                                        array(
                                                'nome_cargo'=>'Gerente de Compras',
                                                'subordinados'=>array(
                                                        //Inicio: Supervisor de Suprimentos        
                                                        array(
                                                              'nome_cargo'=>'Supervisor de Suprimentos'  
                                                        )

                                                )
                                        )
                                )

                        )
                        //Fim: Dietor Financeito.
                ) 
        )

);

function exibe($cargos){

        $html = '<ul>';
        
        foreach($cargos as $cargo){

             $html .= "<li>";   
             $html .= $cargo['nome_cargo'];

             if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0){
                     $html .= exibe($cargo['subordinados']);
             }

             $html .= "</li>";

        }

        $html .= "</ul>";

        return $html;
}

echo exibe($hierarquia);

?>