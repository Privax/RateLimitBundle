<?php

namespace Noxlogic\RateLimitBundle\Generators;

use Noxlogic\RateLimitBundle\Events\GenerateKeyEvent;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;

class IpGenerator
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * IpGenerator constructor.
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack->getCurrentRequest();
    }

    /**
     * @param GenerateKeyEvent $event
     */
    public function augmentKey(GenerateKeyEvent $event)
    {
        $event->addToKey($this->request->getClientIp());
    }
}
