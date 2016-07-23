<?php

namespace Core\Helpers;

use \PDO;

class Conexao
{
    protected static $conexao;
    protected static $erro;

    private final static function setConexao()
    {
        if (is_null(self::$conexao))
        {
            try {
                self::$conexao = new \PDO(DRIVE.HOST.DBNAME, USER, PASS);
            } catch (PODExeption $e) {
                self::$erro = 'Erro ao conectar ao banco, contactar o administrador: '.$e->getMessage();
            }
        }

        return self::$conexao;
    }

    public final static function getConexao()
    {
        self::setConexao();

        if (is_null(self::$conexao)) {
            return self::$erro;
        }

        return self::$conexao;
    }
}