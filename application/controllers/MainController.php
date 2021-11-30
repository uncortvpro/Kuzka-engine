<?php

namespace application\controllers;

use application\core\Controller;
use application\libs\Db;
use application\models\Main;

class MainController extends Controller
{
    public function indexAction()
    {
        /*   $data=[
               'name'=>'Andrey',
               'age'=>21
               ];*/
       /* $db = new Db();
       /* $data=$db->column("SELECT `name` FROM `users` WHERE `id`=1");*/
/*
        $params=['id'=>2];

        $data=$db->column('SELECT `name` FROM `users` WHERE `id`=:id',$params);
        debug($data);*/
        $result = $this->model->getNews();
        $data=[
            'news'=>$result,
        ];

        $this->view->render('Главная страница',$data);
    }
}