<?php
namespace Sample\Trial\Model\ResourceModel\Trial;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Sample\Trial\Model\Trial', 'Sample\Trial\Model\ResourceModel\Trial');
    }
}