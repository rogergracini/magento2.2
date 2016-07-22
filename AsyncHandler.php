<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TestModuleMessageQueueConfiguration;

/**
 * Class for testing asynchronous queue handlers.
 */
class AsyncHandler
{
    /**
     * @param string
     * @return void
     */
    public function methodWithStringParam($param)
    {
        return;
    }

    /**
     * @param bool
     * @return void
     */
    public function methodWithBoolParam($param)
    {
        return;
    }

    /**
     * @param mixed
     * @return void
     */
    public function methodWithMixedParam($param)
    {
        return;
    }
}
