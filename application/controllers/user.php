<?php

class User_Controller extends Base_Controller
{

	public function action_login()
    {
        $input = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        $rules = array(
            'email' => 'required|email|exists:users',
            'password' => 'required'
        );
        
        $validation = Validator::make($input, $rules);
        
        if( $validation->fails() ) 
        {
            return Redirect::to('home')->with_errors($validation);
        }
        
        $credentials = array(
            'username' => Input::get('email'),
            'password' => Input::get('password')
        );

        if( Auth::attempt($credentials)) 
        {
            return Redirect::to('donation');
        } 
        else 
        {
            Session::flash('status_error', 'Your email or password is invalid - please try again.');
            return Redirect::to('home');
        }        
    }

    public function action_register()
    {

        $input = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        $rules = array(
            'email' => 'required|email|unique:users',
            'password' => 'required'
        );
        
        $validation = Validator::make($input, $rules);
        
        if( $validation->fails() ) 
        {
            return Redirect::to('home')->with_errors($validation);
        }

        try 
        {
            $user = new User();
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            Auth::login($user);
        
            return Redirect::to('donation/index');
        }  
        catch( Exception $e ) 
        {
            Session::flash('status_error', 'An error occurred while creating a new account - please try again.');
            return Redirect::to('home');
        }
        
    }

	public function action_logout()
    {
        Auth::logout();
        Redirect::to('home/index');
    }

    public function action_account()
    {
        return View::make('user.account');
    }

}