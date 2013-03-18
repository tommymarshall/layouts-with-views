<?php

class LayoutsWithViews {

	// Configuration Settings
	private $config;

	private $layout;

	private $view;

	private $content;

	public function __construct( $config ) {
		$this->config = $config;
		$this->layout = $this->config['default_layout'];
	}

	public function getContent() {
		echo $this->content;
	}

	public function layout( $layout = false ) {
		$this->layout = $layout;
	}

	public function render( $view ) {
		include $this->config['view_path'] . $view . '.php';
	}

	public function display() {
		$this->view = ( $_GET['view'] ? $_GET['view'] : $this->config['default_view'] );

		if ( !file_exists($this->config['view_path'] . $this->view . '.php') )
			die( "Could not load view <b>{$this->view}</b>" );

		ob_start();
		require_once $this->config['view_path'] . $this->view . '.php';
		$this->content = ob_get_clean();

		if ( !file_exists($this->config['layout_path'] . $this->layout . '.php') )
			die( "Could not load layout <b>{$this->layout}</b>" );

		require_once $this->config['layout_path'] . $this->layout . '.php';
	}
}
