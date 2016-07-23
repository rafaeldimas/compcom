<?php

namespace App\Model;

use \Core\Model as Model;

class ValidaFormModel extends Model
{
    private $nome;
    private $email;
    private $assunto;
    private $mensagem;
    private $gravado;

    public function validaForm(Array $dadosform)
    {
        $this->nome = $dadosform['nome'];
        $this->email = $dadosform['email'];
        $this->assunto = $dadosform['assunto'];
        $this->mensagem = $dadosform['mensagem'];
        $this->gravarBanco();
    }

    private final function gravarBanco()
    {
        $this->gravado = parent::acessaCRUD();
        return $this->gravado;
    }

    private final function enviarEmail()
    {

    }
}