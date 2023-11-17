<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = hash('sha512', $request->ip());
        if (Visitor::where('date', today())->where('ip', $ip)->count() < 1) {
            Visitor::create([
                'date' => today(),
                'ip' => $ip,
            ]);
        }
        if (Session()->has("lang_code")) {
            App::setLocale(Session()->get("lang_code"));
        } else {
            session()->put("lang_code", 'fr');
        }
        return $next($request);
    }
}
