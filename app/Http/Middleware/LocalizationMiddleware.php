<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $active_langs = Lang::where('is_active',true)->get()->pluck('code')->toArray();
        if(!$request->query('lang') || !in_array($request->query('lang'), $active_langs)){
            return redirect(route('main_page',['lang'=>'tm']));
        }
        App::setLocale($request->query('lang'));
        return $next($request);
    }
}
