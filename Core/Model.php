<?php

namespace Core;

use \PDO;
use Core\Helpers\CRUD;


class Model
{
    public $assestsJson;
    protected $con;

    public function assests($assests)
    {
        $this->assestsJson = json_decode($assests, true);
        if ($this->assestsJson['css'] === true) {
            foreach ($this->assestsJson['css'] as $key => $value) {
                return '<link rel="stylesheet" href="./Public/css/'.$value.'">';
            }
        }
        if ($this->assestsJson['js'] === true) {
            foreach ($this->assestsJson['js'] as $key => $value) {
                return '<script type="text/javascript" src="./Public/js/'.$value.'"></script>';
            }
        }
    }
    public function acessaCRUD()
    {
        $this->con = new CRUD;
    }
}