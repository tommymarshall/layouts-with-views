<?php

/*
|----------------------------------------------------------------
| Default Paths and Views
|----------------------------------------------------------------
*/

$views_path     = 'views/';
$layout_path    = $views_path . 'layouts/';
$layout_dafault = 'default';
$view_default   = 'index';

$page   = ($_GET['view'] ? $_GET['view'] : $view_default);
$layout = ($layout ? $layout : $layout_dafault);

?>
