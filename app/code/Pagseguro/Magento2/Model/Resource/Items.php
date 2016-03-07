<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Pagseguro\Magento2\Model\Resource;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('pagseguro_magento2_items', 'id');
    }
}
