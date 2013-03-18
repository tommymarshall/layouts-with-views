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

$config = require_once 'system/config.php';
require_once 'system/LayoutsWithViews.php';

$app = new LayoutsWithViews( $config );

/*
|----------------------------------------------------------------
| Render the View inside the Layout
|----------------------------------------------------------------
*/

$app->display();
