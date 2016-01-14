<?php

namespace Noxlogic\RateLimitBundle\LimitHandler;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Response;

class SimpleLimitHandler implements RateLimitHandler
{
    /**
     * @param FilterControllerEvent $event
     * @param $key
     * @param $code
     * @param $body
     */
    public function handle(FilterControllerEvent $event, $key, $code, $body = null)
    {
        $event->setController(function () use ($code, $body) {
            // @codeCoverageIgnoreStart
            return new Response($body, $code);
            // @codeCoverageIgnoreEnd
        });
    }
}
