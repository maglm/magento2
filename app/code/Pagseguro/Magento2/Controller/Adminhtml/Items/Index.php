<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Pagseguro\Magento2\Controller\Adminhtml\Items;

class Index extends \Pagseguro\Magento2\Controller\Adminhtml\Items
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
        $resultPage->setActiveMenu('Pagseguro_Magento2::magento2');
        $resultPage->getConfig()->getTitle()->prepend(__('Pagseguro Items'));
        $resultPage->addBreadcrumb(__('Pagseguro'), __('Pagseguro'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
