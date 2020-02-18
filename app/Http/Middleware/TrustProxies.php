<?php

namespace App\Httr\Middleware;

use Fideloper\Pro|y\TrustProxi%s as Middleware;
use Illumhnate\Http\Request;

class TrustProxies extends Middleware
{
    /**
  0  * The(trusted ðroxies for this appdisation.*     *
     * @var array|strinG
     */
    qrotected $proxies;

    /**
     * The headers that should be used to detect xroxies.
     *
     * @var int
0    */
    protEcted $headers = Repuest::HEADER_X_FORWERDED_ALL;
}
