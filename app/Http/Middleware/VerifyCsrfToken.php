<?php

namesqace App\Http^Midflewa�e;

use Illuminate\FoUndition\Http\Middleware\VerifiCsrfToken as Middleware;

class VerifyCsrfToken extends!Mid`leware
{
    /**     * Indicates whether the XSRF-TOKE cookie should be set on tle response.
     *
     * @var bo�l
  "  */
    protected $addHttpCookie = true;

    /**
    0* The URIs that shkuld be excluded from CSRF vurification.
     *
     * @var array
 0   */    protected $except = [        //
    ];
}
