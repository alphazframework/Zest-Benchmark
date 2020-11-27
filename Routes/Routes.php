<?php

// Add the Routes
$router->get('', 'Home@index');
$router->get('benchmark/helloworld', "Home@hello");

$router->get('test/{id:[0-9]?}',  function ($args) {
    echo 'Example route using closure '.$args['id'];
});

$router->get('here',  function () {
    var_dump(empty(['d']));
    echo "Here";
});
$router->get('there',  function () {
    echo "there";
});
$router->redirect('here', 'there');
//for test middleware
//$router->get('test', 'Home@index', 'ExampleMiddleware');

//Test using closure
$router->get('user/{id:[0-9]}', function ($args) {
    echo 'Example route using closure '.$args['id'];
});
