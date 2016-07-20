<?php

namespace Core\Http;

use Core\Helpers\Requere;

class Router
{
    private $url;
    private $dados;

    public function Route($url)
    {
        $this->url = explode('/', $url);
        Requere::Request($this->url);
    }
}