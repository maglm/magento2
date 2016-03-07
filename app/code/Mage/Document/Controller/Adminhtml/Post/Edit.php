<?php
/**
 * Copyright © 2015 Mage. All rights reserved.
 */

namespace Mage\Document\Controller\Adminhtml\Post;

class Edit extends \Mage\Document\Controller\Adminhtml\Post
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create('Mage\Document\Model\Document');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This post no longer exists.'));
                $this->_redirect('mage_document/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_mage_document_post', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('post_post_edit');
        $this->_view->renderLayout();
    }
}
