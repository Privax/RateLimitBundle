<?php

namespace Noxlogic\RateLimitBundle\Service\Response;

abstract class RateResponseService
{
    protected $parameters;

    public function setParameter($name, $value)
    {
        $this->parameters[$name] = $value;
    }

    public function getParameter($paramName)
    {
        return $this->parameters[$paramName];
    }

    abstract public function getResponse();
}
