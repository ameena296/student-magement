<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return view('login');
        }

    }

    public function postLogin(Request $request)
    {

        $requestData =$request->all();
        $messages = [
            'email.required' => 'Please enter email',
            'password.required'=>'Please enter password',
        ];
        $validator = Validator::make($requestData, [
            'email' => 'required',
            'password' => 'required'
        ], $messages);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $is_user_email = User::where('email', trim($requestData['email']))->where('status', 1)->first();

        if( isset($is_user_email) )
        {

            $credentials = array('email' => trim($requestData['email']), 'password' => $requestData['password']);
            if( Auth::attempt($credentials) )
            {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');

            }
            else
            {
                return redirect()->back()->withErrors(array('password' => 'Please enter correct password'))->withInput();
            }
        }
        else
        {
            return redirect()->back()->withErrors(array('email' => 'Email does not exists'))->withInput();

        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

}
