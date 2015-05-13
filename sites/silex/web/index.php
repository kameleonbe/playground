<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
	
$app['debug'] = true;


// ... definitions

$blogPosts = array(
    1 => array(
        'date'      => '2011-03-29',
        'author'    => 'igorw',
        'title'     => 'Using Silex',
        'body'      => 'This is a cool little engine'
    ),
);

$app->get('/blog', function () use ($blogPosts) {
    $output = '';
    foreach ($blogPosts as $post) {
        $output .= '<h2>' . $post['title'] . '</h2>';
        $output .= '<p>' . $post['body'] . '</p>';
        $output .= '<hr>';
    }

    return $output;
});


$app->get('/', function () use ($app) {
    return $app->redirect('/blog');
});

$app->run();