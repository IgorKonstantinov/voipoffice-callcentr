<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {
    /**
     * @auth - Kohana Auth Class object
     */
    public $auth;

    public function before()
    {
        $this->auth = Auth::instance();
        /*
         * User Authorization
         */
        if (!$this->auth->logged_in()) {
            $this->request->redirect('auth/login');
        }
        return parent::before();
    }

} // End Welcome
