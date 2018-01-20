<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;

class BaseController extends Controller
{
    protected $viewData = [];
    protected $currentUser;

    public function __construct()
    {
        $this->viewData = [];

        $this->middleware(function ($request, $next) {
            $this->currentUser = $request->user();
            view()->share('currentUser', $this->currentUser);

            return $next($request);
        });
    }
}
