<?php

$modversion['name'] = _HOM_MODULE_NAME;
$modversion['version'] = 2.00;
$modversion['description'] = _HOM_MODULE_DESC;
$modversion['credits'] = 'Peter Nagl<br>http://www.nagl.ch';
$modversion['author'] = 'Shine';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/hlogo.png';
$modversion['dirname'] = 'home';

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'home_index.html';
$modversion['templates'][1]['description'] = '';

//Config
$modversion['config'][1]['name'] = 'cfgHom';
$modversion['config'][1]['title'] = '_HOM_MESSAGE';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'textarea';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] = 'Home';
