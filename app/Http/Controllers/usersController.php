<?php
namespace App\Http\Controllers;


use App\User;

class usersController extends Controller
{

    public function getLogin()
    {
        return view('front.login')
            ->with('title','Login Now');
    }


    public function postLogin()
    {
        $rules = array(
            'username' => 'required|min:3|max:20',
            'password' => 'required|min:3|max:20',
        );

        $validation = \Validator::make(\Input::all(),$rules);

        if($validation->passes())
        {
            $username = \Input::get('username');
            $password = \Input::get('password');
            if(\Auth::attempt(['username'=>$username,'password'=>$password]))
                return redirect('admin');
            else
                return redirect()
                    ->back()
                    ->with('title','Login Now')
                    ->with('errors',['Invalid username & password']);
        }
        else
        {
            $errors = $validation->errors()->all();
            return redirect()
                ->back()
                ->with('title','Login Now')
                ->with('errors',$errors);
        }
    }


    public function getLogout()
    {
        \Auth::logout();

        return redirect('/');
    }

} 