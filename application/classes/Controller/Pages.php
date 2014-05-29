<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pages extends Controller_Main {
    /*
     * @model current controller will operate this model
     */
    public $model;

    public function before()
    {
        return parent::before();
    }
    //=========================================
    // INFO page controller action
    //=========================================
    public function action_home()
    {
        $this->template->content = View::factory('home');
    }
    //=========================================
    //              Page 404
    //=========================================
    public function action_error404() {

        $this->template->content = View::factory('404');

    }

} // End Welcome
