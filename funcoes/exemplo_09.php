<?php

$hierarquia = array (
    // Início: CEO
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            // Início: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    // Início: Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas',
                        'subordinados'=>array(
                            // Início: Vendedor
                            array(
                                'nome_cargo'=>'Vendedor'
                            )
                            // Término: Vendedor
                        )
                    )
                    // Término: Gerente de Vendas
                )
            ),
            // Término: Diretor Comercial

            // Início: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    // Início: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=> array(
                            // Início: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            // Término: Supervisor de Pagamentos
                        )
                    )
                    // Término: Gerente de Contas a Pagar
                )
            )
        )
    )
    // Término: CEO
);