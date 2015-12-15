<?php

namespace Noxlogic\RateLimitBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationAnnotation;

/**
 * @Annotation
 * @Target({"METHOD", "CLASS"})
 */
class RateLimit extends ConfigurationAnnotation
{
    /**
     * @var array HTTP Methods protected by this annotation. Defaults to all method
     */
    protected $methods = array();

    /**
     * @var int Number of calls per period
     */
    protected $limit = -1;

    /**
     * @var int Number of seconds of the time period in which the calls can be made
     */
    protected $period = 3600;

    /**
     * @var array Key generators applied to the key when checking the limit.
     */
    protected $generators = array();

    /**
     * Returns the alias name for an annotated configuration.
     *
     * @return string
     */
    public function getAliasName()
    {
        return "x-rate-limit";
    }

    /**
     * Returns whether multiple annotations of this type are allowed
     *
     * @return Boolean
     */
    public function allowArray()
    {
        return true;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return array
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @param array $methods
     */
    public function setMethods($methods)
    {
        $this->methods = $methods;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param int $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * @return array
     */
    public function getGenerators()
    {
        return $this->generators;
    }

    /**
     * @param $generators
     */
    public function setGenerators($generators)
    {
        $this->generators = $generators;
    }
}
