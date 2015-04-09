<?php namespace LayoutsWithViews;

/**
 * Layouts with Views - A simple layout and view rendering engine built on PHP
 *
 * @package  Layouts with Views
 * @version  2.0.0
 * @author   Tommy Marshall <tommy.marshall@viget.com>
 * @link     http://viget.com
 */

require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'app_dir'      => __DIR__ . '/',
    'asset_path'   => 'assets/',
    'base_path'    => 'Personal/layouts-with-views/',
    'default_view' => 'index',
    'view_path'    => 'views/',
];

$app = (new TemplatingClass)->setConfig($config)->display();
