<?php

namespace App\Controllers;

//recursos do framework
use MF\Controller\Action;
use MF\Model\Container;


    class IndexController extends Action{

        
        public function index(){

            $this->render('index', 'layout');
        }


    }

?>