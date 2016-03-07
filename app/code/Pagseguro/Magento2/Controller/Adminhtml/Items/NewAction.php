<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Pagseguro\Magento2\Controller\Adminhtml\Items;

class NewAction extends \Pagseguro\Magento2\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
