<?php

$config = [];
$config['pathView'] = '../view';

/**
 * url = expressão regular contendo a rota
 * callback = função de callback
 **/
$rotas = [];

$rotas[] = ['url' => '/',
            'callback' => function() use($getOrNotFound, $config){
              $getOrNotFound($config['pathView'], 'home.php', '404.php');
            }
           ];

$rotas[] = ['url' => '/contato',
            'callback' => function() use($getOrNotFound, $config){
              $getOrNotFound($config['pathView'], 'contato.php', '404.php');
            }
           ];

$rotas[] = ['url' => '/empresa',
            'callback' => function() use($getOrNotFound, $config){
              $getOrNotFound($config['pathView'], 'empresa.php', '404.php');
            }
           ];

$rotas[] = ['url' => '/home',
            'callback' => function() use($getOrNotFound, $config){
              $getOrNotFound($config['pathView'], 'home.php', '404.php');
            }
           ];

$rotas[] = ['url' => '/produto',
            'callback' => function() use($getOrNotFound, $config){
              $getOrNotFound($config['pathView'], 'produto.php', '404.php');
            }
           ];

$rotas[] = ['url' => '/servico',
            'callback' => function() use($getOrNotFound, $config){
              $getOrNotFound($config['pathView'], 'servico.php', '404.php');
            }
           ];