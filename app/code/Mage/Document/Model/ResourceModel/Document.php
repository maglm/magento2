<?php
namespace Mage\Document\Model\ResourceModel;
class Document extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('mage_document', 'id');
    }
}
?>