<?php

class Base_Controller extends Controller
{

	public function __construct()
    {
        parent::__construct();

        //Filters
        $class = get_called_class();
        switch($class) {
            case 'Home_Controller':
                $this->filter('before', 'nonauth');
                break;
            
            case 'User_Controller':
                $this->filter('before', 'nonauth')->only(array('login'));
                $this->filter('before', 'auth')->only(array('logout', 'account'));
                break;
                
            //if donation or anywhere    
            default:
                $this->filter('before', 'auth');
                break;
        }
    }

    public function __call($method, $parameters)
    {
        return Response::error('404');
    }
}