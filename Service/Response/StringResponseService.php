<?php

namespace Noxlogic\RateLimitBundle\Service\Response;

use Symfony\Component\HttpFoundation\Response;

class StringResponseService extends RateResponseService
{
    public function getResponse()
    {
        $message = $this->getParameter('rate_response_message');
        $code = $this->getParameter('rate_response_code');

        return new Response($message, $code);
    }
}
