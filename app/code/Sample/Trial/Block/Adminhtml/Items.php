<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */
namespace Sample\Trial\Block\Adminhtml;

class Items extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'items';
        $this->_headerText = __('Items');
        $this->_addButtonLabel = __('Add New Item');
        parent::_construct();
    }
}
