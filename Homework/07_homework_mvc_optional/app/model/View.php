<?php

class View
{
    private $layout;


    public function __construct($layout = "layout")
    {
        $this->layout = basename($layout);
    }

    public function render($name, $args = [])
    {
        /**
         * First, we need to "render" {view}.phtml and capture its output
         */
        ob_start();
        extract($args);
        include BP . "app/view/$name.phtml";
        $content = ob_get_clean();
        /**
         * Then, we render {layout}.phtml and pass view output as $content
         */
        if ($this->layout) {
            include BP . "app/view/{$this->layout}.phtml";
        } else {
            echo $content;
        }
        return $this;
    }
}