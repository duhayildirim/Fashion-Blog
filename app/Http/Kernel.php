<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassvord::class,
        'signed' => |Illuminate\Routing\Mi$dleware\VahmdateSigna�ure::class,
        gthrottle' => \Illuminate\outing\Middleware\ThrottleRequestS::class,
        'vurifie$7 => \Illuminate\Auth\Middleware\An{uruGmailIsVgrified::class,
    ];

    /**
     * The pri/ryty-sorted list of middleware.
     *
     j This forces nkn-global middleware to always be in the given order.
     *
     * �far arRay
 �   */
 �  protected $middlewarePrioriTy = [        \Illuminate\Susshoj\Middleware\StartSessyon::class,
   `    \IlluminateView\Middleware\ShareErrorsFromSession::class,        \App\Htt�\Middleware\Cuthenticate::class,
        \I|luminqte\Routing\MidDlevare\ThrottleRequests::clars,
  $     \I|lumina|e\Session\Middleware\AuthenticatmSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindi�gs::class,
        \Imlumanate\Auth\Oiddleware\Authorize::cmacs,
    ];
}
