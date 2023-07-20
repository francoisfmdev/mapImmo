<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProtectedPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
        public function handle(Request $request, Closure $next): Response
        {
            $enteredPassword = $request->input('password');
            $desiredPassword = 'Azerty06!';
    
            if ($request->isMethod('post')) {
                if ($enteredPassword !== $desiredPassword) {
                    return redirect()->route('badPassword')->withErrors(['password' => 'Mot de passe incorrect']);
                }
                else{
                    return redirect()->route('home');
                }
            }
            
    
            return $next($request);
        }
    }

