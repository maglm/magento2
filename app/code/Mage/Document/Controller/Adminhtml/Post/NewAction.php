<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Mage\Document\Controller\Adminhtml\Post;

class NewAction extends \Mage\Document\Controller\Adminhtml\Post
{

    public function execute()
    {
    	$this->_forward('edit');
    }
}
