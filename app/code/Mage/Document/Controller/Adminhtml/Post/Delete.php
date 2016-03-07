<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Mage\Document\Controller\Adminhtml\Post;

class Delete extends \Mage\Document\Controller\Adminhtml\Post
{

    public function execute()
    { 
        $id = $this->getRequest()->getParam('id');

        if ($id) {
            try {
                $model = $this->_objectManager->create('Mage\Document\Model\Document');
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('You deleted the item.'));
                $this->_redirect('mage_document/*/');
                return;
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addError(
                    __('We can\'t delete item right now. Please review the log and try again.')
                );
                $this->_objectManager->get('Psr\Log\LoggerInterface')->critical($e);
                $this->_redirect('mage_document/*/edit', ['id' => $this->getRequest()->getParam('id')]);
                return;
            }
        }
        $this->messageManager->addError(__('We can\'t find a item to delete.'));
        $this->_redirect('mage_document/*/');
    }
}
