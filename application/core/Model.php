<?php

namespace application\core;

use application\libs\Db;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db();
    }


}