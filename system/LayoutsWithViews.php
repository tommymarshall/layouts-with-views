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

	public function asset( $asset ) {
		echo 'http://' . $_SERVER["SERVER_NAME"] . '/' . $this->config['base_dir'] . $this->config['asset_path'] . $asset;
	}

	public function route( $to ) {
		if ( $to === '/') $to = '';
		echo 'http://' . $_SERVER["SERVER_NAME"] . '/' . $this->config['base_dir'] . $to;
	}

	public function matches( $route ) {
		if ( $route === '/') {
			$route = $this->config['default_view'];
		}

		return $this->view === $route;
	}

	public function layout( $layout = false ) {
		$this->layout = $layout;
	}

	public function render( $view ) {
		include $this->config['view_path'] . $view . '.php';
	}

	public function display() {
		$this->view = ( $_GET['view'] ? $_GET['view'] : $this->config['default_view'] );
		$parts = explode('/', $this->view );

		if ( $parts ) {
			$this->view = '';

			foreach ($parts as $part) {
				if ( $part['0'] && is_dir($this->config['app_dir'] . $this->config['view_path'] . $this->view . $part) ) {
					$this->view .= $part . '/';
				} else if ($part !== $this->config['default_view'] ){
					$this->view .= $part;
				} else {
					$this->view .= $this->config['default_view'];
				}
			}
		}

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
