<?php
/**
 * Layouts with Views - A simple layout and view rendering engine
 *
 * @package  Layouts with Views
 * @version  0.1.0
 * @author   Tommy Marshall <tommy.marshall@viget.com>
 * @link     http://viget.com
 */

/*
|----------------------------------------------------------------
| Set Paths and Views
|----------------------------------------------------------------
*/

$views_path     = 'views/';
$layout_path    = $views_path . 'layouts/';
$layout_dafault = 'default';
$view_default   = 'index';

$page   = ($_GET['view'] ? $_GET['view'] : $view_default);
$layout = ($layout ? $layout : $layout_dafault);

/*
|----------------------------------------------------------------
| Render the View with the Layout
|----------------------------------------------------------------
*/

if ( !file_exists($views_path . $page . '.php') )
	die( "Could not load view <b>{$page}</b>");

ob_start();
require $views_path . $page . '.php';
$content = ob_get_clean();

if ( !file_exists($layout_path . $layout . '.php') )
	die( "Could not load layout <b>{$layout}</b>");

require $layout_path . $layout . '.php';
