<?php
namespace Mage\Document\Model\ResourceModel\Document;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Mage\Document\Model\Document', 'Mage\Document\Model\ResourceModel\Document');
    }
}