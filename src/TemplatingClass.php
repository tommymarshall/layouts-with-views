<?php namespace LayoutsWithViews;

/*
|--------------------------------------------------------------------
| Layouts with Views - Class
|--------------------------------------------------------------------
|
| This class powers the app. It takes care of assigning configuration
| settings, which view to load, layout to use, and content to grab.
|
*/

class TemplatingClass
{
    protected $config;

    protected $layout;

    protected $vars;

    protected $view;

    protected $content;

    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function asset( $asset )
    {
        return 'http://' . $_SERVER['SERVER_NAME'] . '/' . $this->config['base_path'] . $this->config['asset_path'] . $asset;
    }

    public function route( $to )
    {
        if ( $to === '/' )
        {
            $to = '';
        }

        return 'http://' . $_SERVER['SERVER_NAME'] . '/' . $this->config['base_path'] . $to;
    }

    public function matches( $route )
    {
        if ( $route === '/' )
        {
            $route = $this->config['default_view'];
        }

        return $this->view === $route;
    }

    public function layout( $layout, $vars = null )
    {
        foreach ($vars as $var => $val )
        {
            $this->vars[$var] = $val;
        }

        $this->layout = $layout;
    }

    public function render( $view, $vars = null )
    {
        foreach ($vars as $var => $val )
        {
            $$var = $val;
        }

        try
        {
            require $this->config['view_path'] . $view . '.php';
        } catch (\Exception $e) {
            echo "Message : " . $e->getMessage();
            echo "Code : " . $e->getCode();
        }
    }

    private function currentPath()
    {
        return substr($_SERVER['REQUEST_URI'], strlen($this->config['base_path']) + 1, strlen($_SERVER['REQUEST_URI']));
    }

    public function display()
    {
        $this->view = strlen($this->currentPath()) > 0 ? $this->currentPath() : $this->config['default_view'];
        $parts = explode('/', $this->view );

        // If this is a nested view (in a sub-folder)
        if ( $parts )
        {
            $this->view = '';

            foreach ($parts as $part)
            {
                if ( $part['0'] && is_dir($this->config['app_dir'] . $this->config['view_path'] . $this->view . $part) )
                {
                    $this->view .= $part . '/';
                }
                else if ($part !== $this->config['default_view'] )
                {
                    $this->view .= $part;
                }
                else
                {
                    $this->view .= $this->config['default_view'];
                }
            }
        }

        if ( is_dir($this->config['view_path'] . $this->view) )
        {
            $this->view = $this->view . $this->config['default_view'];
        }

        if ( !file_exists($this->config['view_path'] . $this->view . '.php') )
        {
            die( "Could not load view <b>{$this->view}</b>" );
        }

        // Grab contents of assigned view
        ob_start();
        require_once $this->config['view_path'] . $this->view . '.php';
        $this->content = ob_get_clean();

        // Get variables being sent to Layout
        foreach ($this->vars as $var => $val )
        {
            $$var = $val;
        }

        if ( $this->layout )
        {
            try {
                require $this->config['view_path'] . $this->layout . '.php';
            } catch (\Exception $e) {
                echo "Message : " . $e->getMessage();
                echo "Code : " . $e->getCode();
            }
        }
        else
        {
            echo $this->getContent();
        }
    }
}
