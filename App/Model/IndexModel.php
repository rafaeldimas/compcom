<?php

namespace App\Model;

use \Core\Model as Model;

class IndexModel extends Model
{
    private $assests;

    public function css($nameCss)
    {
        return $this->assests = parent::assests($nameCss);
    }
}