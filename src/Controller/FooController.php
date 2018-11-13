<?php

namespace Controller;

use Annotation\ApiAction;

class FooController 
{
    /**
     * @ApiAction 
     */
    public function actionBar()
    {
        echo __METHOD__ . PHP_EOL;

        throw new \Exception("bar exception");
    }
}