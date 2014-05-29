<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {
    /**
     * @auth - Kohana Auth Class object
     */
    public $auth;

    public function before()
    {
        $this->auth = $this->auth = Auth::instance();
        $this->template = $this->template . '/auth_template';
        return parent::before();
    }
//===================================================
//                    Login
//===================================================
    public function action_login()
	{
        if ($this->request->post() ) {
            $username = htmlspecialchars($this->request->post('username'));
            $password = htmlspecialchars($this->request->post('password'));
            $user = $this->auth->login($username, $password);

            if (!$user) {
                $this->request->redirect('auth/login');
            } else {
               $this->request->redirect('admin');
            }
        } else {
            $this->template->content = View::factory('auth/login');
        }
	}
//====================================================
//                    Logout
//====================================================
    public function action_logout()
	{
        $this->auth->logout();
        $this->request->redirect('/');
	}

} // End Welcome
