<?php
/**
 * Created by PhpStorm.
 * User: hairutdinovbr
 * Date: 2019-02-15
 * Time: 4:53 PM
 */

namespace app\controllers;


use ishop\App;
use ishop\base\Controller;

class MainController extends AppController
{


    public function indexAction()
    {
        // App::$app->getProperty('shop_name')
        $this->setMeta( 'Главная страница', "Описание", "Ключи");

//        $name = "Kristy";
//        $age = 19;
//        $this->set(compact('name', 'age'));
    }
}