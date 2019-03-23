<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\CodeController;
use App\Code;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'text' =>['required','string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' =>$data['first_name'],
            'middle_name' =>$data['middle_name'],
            'last_name' =>$data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
   public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());
        if($validator->fails()){
            return redirect('auth/register')->withErrors($validator,'login');
        }
        /*$user = $this->create($request->all());

        $code = CodeController::generateCode(8);

        Code::create([
            'user_id' => $user,
            'code' => $code,
        ]);*/

        /*$url = url('/').'/auth/activate?id='.$user.'&code='.$code;
        Mail::send('emails.register', array('url'=>$url), function($massage) use ($request)
        {
            $massage->to($request->email)->subject('Регистрация');
        });*/

        return print_r('Регистрация прошла успешно, на Ваш email отправлено письмо со ссылкой для активации аккаунта') ;
    }

}
