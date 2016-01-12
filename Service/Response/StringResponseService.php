<?php

namespace Noxlogic\RateLimitBundle\Service\Response;

class StringResponseService extends LimitResponseService
{
    public function getResponse()
    {
        $message = $this->getParameter('rate_response_message');
        $code = $this->getParameter('rate_response_code');

        return new Response($message, $code);
    }
}
