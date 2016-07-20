<?php

namespace App\Controllers;

use App\Model\IndexModel as IndexModel;

class IndexController extends \Core\Controller
{
    private $css;

    public function index($value='')
    {
        $this->pullCss(ASSETS);
        $this->view = parent::view(
            \Core\Helpers\Requere::getController(),
            array(
                'namepage' => 'Pagina Inicial',
                'assests' => $this->css
                ));
    }
    public final function pullCss()
    {
        $this->css = new IndexModel;
        $this->css->css(ASSETS);
        return $this->css;

    }
}