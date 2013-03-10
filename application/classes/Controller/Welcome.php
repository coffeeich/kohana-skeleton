<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template_Twig {

    public function action_index() {
        $this->assign('host', $_SERVER['SERVER_NAME']);
    }

}