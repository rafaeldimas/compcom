<?php

namespace App\Controllers;

use App\Model\ValidaFormModel as ValidaForm;
use \Core\Helpers\Sanitize as Sanitize;


class ValidaFormController extends \Core\Controller
{
    private $post;

    public function index()
    {
        $this->setPost($_POST);

        $dadosform = new ValidaForm;
        $dadosform->validaForm($this->post);
    }

    private final function setPost($post)
    {
        foreach ($post as $key => $value)
        {
            $this->post[$key] = Sanitize::StripTags($value);
        }
    }

}