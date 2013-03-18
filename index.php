<?php
/**
 * Layouts with Views - A simple layout and view rendering engine built on PHP.
 *
 * @package  Layouts with Views
 * @version  0.2.0
 * @author   Tommy Marshall <tommy.marshall@viget.com>
 * @link     http://viget.com
 */

/*
|----------------------------------------------------------------
| Setup
|----------------------------------------------------------------
*/

require_once 'system/config.php';
require_once 'system/helpers.php';


/*
|----------------------------------------------------------------
| Render the View with the Layout
|----------------------------------------------------------------
*/

$page   = ($_GET['view'] ? $_GET['view'] : $config['default_view']);
$layout = ($layout ? $layout : $config['default_layout']);

if ( !file_exists($config['view_path'] . $page . '.php') )
	die( "Could not load view <b>{$page}</b>" );

ob_start();
require_once $config['view_path'] . $page . '.php';
$content = ob_get_clean();

if ( !file_exists($config['layout_path'] . $layout . '.php') )
	die( "Could not load layout <b>{$layout}</b>" );

require_once $config['layout_path'] . $layout . '.php';
