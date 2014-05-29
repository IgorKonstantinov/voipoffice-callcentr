<?php
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

/*
 * Rule to access to auth controller and it's actions
 *
 */
Route::set('auth', 'auth(/<action>(/<id>))')
    ->defaults(array(
    'controller' => 'auth'
));
/*
 * Comments
 *
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
    ->defaults(array(
    'controller' => 'pages',
    'action' => 'home'
));

