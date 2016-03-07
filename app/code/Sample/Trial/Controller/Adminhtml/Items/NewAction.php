<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Sample\Trial\Controller\Adminhtml\Items;

class NewAction extends \Sample\Trial\Controller\Adminhtml\Items
{

    public function execute()
    {
    	$this->_forward('edit');
    }
}
