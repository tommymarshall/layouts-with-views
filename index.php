<?php
/**
 * Layouts with Views - A simple layout and view rendering engine built on PHP.
 *
 * @package  Layouts with Views
 * @version  1.1.0
 * @author   Tommy Marshall <tommy.marshall@viget.com>
 * @link     http://viget.com
 */

require_once __DIR__ . '/vendor/autoload.php';

/*
|----------------------------------------------------------------
| Setup
|----------------------------------------------------------------
*/

$config = [
    'app_dir'      => __DIR__ . '/',
    'asset_path'   => 'assets/',
    'base_path'    => 'Personal/layouts-with-views/',
    'default_view' => 'index',
    'view_path'    => 'views/',
];

$app = (new LayoutsWithViews\TemplatingClass)->setConfig($config)->display();
