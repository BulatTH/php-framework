<?php
/**
 * Created by PhpStorm.
 * User: hairutdinovbr
 * Date: 2019-02-16
 * Time: 6:53 AM
 */

namespace ishop;


use ishop\traits\TSingleton;

class Db
{
    use TSingleton;

    protected function __construct()
    {
        $db = require_once CONF . "/config_db.php";
        
    }
}