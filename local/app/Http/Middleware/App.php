<?php namespace App\Http\Middleware;

use Closure, Session, Auth;

class App {

    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['es','en'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //GET LENGUAGE OF BROWSER AND SET TO APP SETTINGS LENGUAGE
        app()->setLocale($request->getPreferredLanguage($this->languages));


        return $next($request);
    }

}