<?php

use Go\Core\AspectKernel;
use Go\Core\AspectContainer;

/**
 * Application Aspect Kernel
 */
class AppAspectKernel extends AspectKernel
{

    /**
     * Configure an AspectContainer with advisors, aspects and pointcuts
     *
     * @param AspectContainer $container
     *
     * @return void
     */
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new Aspect\HttpExceptionAspect());
    }
}
