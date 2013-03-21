<?php

/*
|----------------------------------------------------------------
| Layouts with Views - Class
|----------------------------------------------------------------
|
| This class powers the app. It takes care of assigning
| configuration settings, which view to load, layout to use, and
| content to grab. I wouldn't mess with it unless you know know
| what you're doing ;)
|
*/

class LayoutsWithViews {

	private $config;

	private $layout;

	private $vars;

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
		if ( $to === '/' ) $to = '';
		echo 'http://' . $_SERVER["SERVER_NAME"] . '/' . $this->config['base_dir'] . $to;
	}

	public function matches( $route ) {
		if ( $route === '/' ) {
			$route = $this->config['default_view'];
		}

		return $this->view === $route;
	}

	public function layout( $layout, $vars = null ) {
		foreach ($vars as $var => $val ) {
			$this->vars[$var] = $val;
		}

		if ( $layout ) $this->layout = $layout;
	}

	public function render( $view, $vars = null ) {
		foreach ($vars as $var => $val ) {
			$$var = $val;
		}

		include $this->config['view_path'] . $view . '.php';
	}

	public function display() {
		$this->view = ( $_GET['view'] ? $_GET['view'] : $this->config['default_view'] );
		$parts = explode('/', $this->view );

		// If this is a nested view (in a sub-folder)
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

		// Grab contents of assigned view
		ob_start();
		require_once $this->config['view_path'] . $this->view . '.php';
		$this->content = ob_get_clean();

		// Get variables being sent to Layout
		foreach ($this->vars as $var => $val ) {
			$$var = $val;
		}

		if ( !file_exists($this->config['layout_path'] . $this->layout . '.php') )
			die( "Could not load layout <b>{$this->layout}</b>" );

		// Output out layout, with the page content and any extra variables
		require_once $this->config['layout_path'] . $this->layout . '.php';
	}
}
