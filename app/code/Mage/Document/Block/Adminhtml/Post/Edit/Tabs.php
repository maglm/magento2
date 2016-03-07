<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */
namespace Mage\Document\Block\Adminhtml\Post\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('mage_document_post_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Post'));
    }
}
