<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Sample\Trial\Controller\Adminhtml\Items;

class Index extends \Sample\Trial\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Sample_Trial::trial');
        $resultPage->getConfig()->getTitle()->prepend(__('Sample Items'));
        $resultPage->addBreadcrumb(__('Sample'), __('Sample'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
