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
use RedBeanPHP\R as R;

class MainController extends AppController
{


    public function indexAction()
    {
        // App::$app->getProperty('shop_name')
        $this->setMeta( 'Главная страница', "Описание", "Ключи");

        $posts = R::findAll('test');
        $postById = R::findOne('test', "id=?", [2]);

        $this->set(compact('posts'));
    }
}