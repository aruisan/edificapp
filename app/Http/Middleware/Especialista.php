<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Especialista
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
        if($this->auth->user()->rol != "especialista")
        {
            return redirect()->to('/dashboard');
        }
        return $next($request);
    }
}
