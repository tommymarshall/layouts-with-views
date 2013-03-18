<?php

function render( $view ) {
	global $config;

	include $config['view_path'].$view.'.php';
}

function content() {
	global $content;

	echo $content;
}

function layout( $override ) {
	global $layout;

	$layout = $override;
}
