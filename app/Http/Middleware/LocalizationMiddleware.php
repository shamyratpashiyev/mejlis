<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware extends Controller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->query('lang')){
            return redirect(route('main_page',['lang'=>'tm']));
        }
        App::setLocale($request->query('lang'));
        // dd(route('main_page',['lang' =>'121']));
        $this->lang = 'tm';
        // dd(app()->getLocale());
        return $next($request);
    }
}
