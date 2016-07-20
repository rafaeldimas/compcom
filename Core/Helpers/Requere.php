<?php

namespace Core\Helpers;

use Core\Helpers\Sanitize;


class Requere
{
    private static $response;
    private static $controller;
    private static $action;
    private static $param;

    public static function Request(Array $url)
    {

        self::$controller = !is_null($url[0]) ? ucfirst($url[0]) : 'Index';
        self::$action = !is_null($url[1])  ? $url[1] : 'index';
        self::$param = !is_null($url[2]) ? $url[2] : null;

        return self::Response(self::$controller, self::$action, self::$param);
    }

    private final function Response($controller, $action, $param)
    {
        self::$response = APP.$controller.SUFIXO;

        if (!class_exists(self::$response))
        {
            self::$controller = 'Erro404';
            self::$action = 'index';
            self::$param = null;
            $action = 'index';

            self::$response = CONTROLLER404;
            self::$response = new self::$response;
            self::$response->$action(self::$param);
        }

        self::$response = new self::$response;
        self::$response->$action(self::$param);

        return self::$response;
    }

    public function getController()
    {
        return self::$controller;
    }
}