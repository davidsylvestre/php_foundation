<?php
/**
 * url = expressão regular contendo a rota
 * callback = função de callback
 **/
$rotas = [];

$rotas[] = ['url' => '/',
            'callback' => function(){
               return include('../view/home.php');
            }
           ];

$rotas[] = ['url' => '/contato',
            'callback' => function(){
               return include('../view/contato.php');
            }
           ];

$rotas[] = ['url' => '/empresa',
            'callback' => function(){
               return include('../view/empresa.php');
            }
           ];

$rotas[] = ['url' => '/home',
            'callback' => function(){
               return include('../view/home.php');
            }
           ];

$rotas[] = ['url' => '/produto',
            'callback' => function(){
               return include('../view/produto.php');
            }
           ];

$rotas[] = ['url' => '/servico',
            'callback' => function(){
               return include('../view/servico.php');
            }
           ];