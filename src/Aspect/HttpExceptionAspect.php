<?php

namespace Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\AfterThrowing;
use Throwable;
use Exception;

/**
 * HttpException aspect
 */
class HttpExceptionAspect implements Aspect
{
    /**
     * @param MethodInvocation $invocation Invocation
     * @param Throwable $e
     *
     * @AfterThrowing("@execution(Annotation\ApiAction)")
     */
    public function aroundApiAction(MethodInvocation $invocation, Throwable $e)
    {
        echo __METHOD__ . PHP_EOL;

        throw new Exception("HttpException: " . $e->getMessage());
    }
}
