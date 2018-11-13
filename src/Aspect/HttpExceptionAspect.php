<?php

namespace Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Around;
use Throwable;
use Exception;

/**
 * Cache aspect
 */
class HttpExceptionAspect implements Aspect
{
    /**
     * @param MethodInvocation $invocation Invocation
     *
     * @Around("@execution(Annotation\ApiAction)")
     */
    public function aroundApiAction(MethodInvocation $invocation)
    {
        echo __METHOD__ . PHP_EOL;

        try {
            $invocation->proceed();
        } catch (Throwable $e) {
            throw new Exception("http exception"); 
        }
    }
}
