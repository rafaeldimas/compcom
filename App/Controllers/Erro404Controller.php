<?php

namespace App\Controllers;

class Erro404Controller extends \Core\Controller
{
    public function index($value='')
    {
        $this->view = parent::view(\Core\Helpers\Requere::getController(), array('namepage' => 'Pagina não encontrada'));
    }
}