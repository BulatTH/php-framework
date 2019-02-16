<?php
/**
 * Created by PhpStorm.
 * User: hairutdinovbr
 * Date: 2019-02-15
 * Time: 4:53 PM
 */

namespace app\controllers;


use ishop\base\Controller;

class MainController extends AppController
{


    public function indexAction()
    {
        debug($this->view);

//        echo __METHOD__;
    }
}