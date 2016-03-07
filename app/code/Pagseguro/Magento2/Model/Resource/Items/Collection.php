<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Pagseguro\Magento2\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Pagseguro\Magento2\Model\Items', 'Pagseguro\Magento2\Model\Resource\Items');
    }
}
