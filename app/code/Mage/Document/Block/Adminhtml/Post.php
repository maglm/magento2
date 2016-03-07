<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */
namespace Mage\Document\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'Post';
        $this->_headerText = __('Post');
        $this->_addButtonLabel = __('Add New Post');
        parent::_construct();
    }
}
