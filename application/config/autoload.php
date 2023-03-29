<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database','session','user_agent','upload');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','form','file','html','string','date','text','app');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('m_auth','m_data');
