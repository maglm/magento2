<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Pagseguro\Magento2\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Pagseguro\Magento2\Model\Resource\Items');
    }
}
