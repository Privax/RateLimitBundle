<?php

namespace Noxlogic\RateLimitBundle\LimitHandler;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

interface RateLimitHandler
{
    /**
     * @param FilterControllerEvent $event
     * @param $key
     * @param $code
     * @param $body
     */
    public function handle(FilterControllerEvent $event, $key, $code, $body);
}
