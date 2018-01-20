<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\SessionCreateRequest;

class SessionController extends BaseController
{

    public function __construct()
    {
        parent::__construct();

        $this->viewData['title'] = trans('login.title');
    }

    public function index()
    {
        if (auth()->check()) {
            return redirect()->action('Admin\HomeController@index');
        }

        return view('backends.login', $this->viewData);
    }

    public function store(SessionCreateRequest $sessionCreateRequest)
    {
        if (auth()->attempt($sessionCreateRequest->only('email', 'password'))) {
            $user = auth()->user();
            if (!$user->isAccessAdmin()) {
                auth()->logout();
                session()->flush();

                return redirect()->back()
                    ->withInput($sessionCreateRequest->except('password'));
            }

            return redirect()->action('Admin\HomeController@index');
        }

        return redirect()->back()
            ->withInput($sessionCreateRequest->except('password'))
            ->withErrors(['message' => trans('auth.validate.email_or_password_is_incorrect')]);
    }

    public function destroy()
    {
        auth()->logout();
        session()->flush();

        return redirect()->action('Admin\SessionController@index');
    }
}
