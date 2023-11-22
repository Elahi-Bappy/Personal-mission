<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpFoundation\Response;
class ActionMiddlewareCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->id != $request->get('id')){
            return redirect( route('users'));
        }
        return $next($request);
    }

}
