<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class API
{



    public function handle($request, Closure $next)
    
    {
       $token = User::where('api_token', $request->header('Authorization'))->first();
       if($token){
        return $next($request);
      }
      return response()->json([
        'message' => 'KEY Sudah Berubah Silahkan Login',
      ]);

    }
}
