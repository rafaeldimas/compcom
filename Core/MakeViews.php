<?php

namespace Core;

use Core\Model;


class MakeViews
{
    public final function make($viewname, $assests)
    {
        require_once BASE_DIR.'Core'.DS.'Views'.DS.'Header.phtml';
        require_once BASE_DIR.'App'.DS.'Views'.DS.$viewname.'.phtml';
        require_once BASE_DIR.'Core'.DS.'Views'.DS.'Footer.phtml';
    }
}