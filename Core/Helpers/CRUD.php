<?php

namespace Core\Helpers;

use Core\Helpers\Conexao as Conexao;

class CRUD extends Conexao
{
    function __construct()
    {
        $teste = Conexao::getConexao();
        var_dump($teste);
    }
}