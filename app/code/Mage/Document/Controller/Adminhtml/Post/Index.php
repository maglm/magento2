<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Mage\Document\Controller\Adminhtml\Post;

class Index extends \Mage\Document\Controller\Adminhtml\Post
{
    /**
     * Post list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
       /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Mage_Document::document');
        $resultPage->getConfig()->getTitle()->prepend(__('Mage Post'));
        $resultPage->addBreadcrumb(__('Mage'), __('Mage'));
        $resultPage->addBreadcrumb(__('Post'), __('Post'));
        return $resultPage;
    }
}
