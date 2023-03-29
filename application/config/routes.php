<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route = array(
    'default_controller'    => 'login',
    'contact/label=(:any)'    => 'contact/label/$1',
    '404_override'          => '',
    'translate_uri_dashes'  => FALSE
);