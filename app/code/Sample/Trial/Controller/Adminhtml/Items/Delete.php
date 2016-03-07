<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

namespace Sample\Trial\Controller\Adminhtml\Items;

class Delete extends \Sample\Trial\Controller\Adminhtml\Items
{

    public function execute()
    { 
        $id = $this->getRequest()->getParam('id');

        if ($id) {
            try {
                $model = $this->_objectManager->create('Sample\Trial\Model\Trial');
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('You deleted the item.'));
                $this->_redirect('sample_trial/*/');
                return;
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addError(
                    __('We can\'t delete item right now. Please review the log and try again.')
                );
                $this->_objectManager->get('Psr\Log\LoggerInterface')->critical($e);
                $this->_redirect('sample_trial/*/edit', ['id' => $this->getRequest()->getParam('id')]);
                return;
            }
        }
        $this->messageManager->addError(__('We can\'t find a item to delete.'));
        $this->_redirect('sample_trial/*/');
    }
}
