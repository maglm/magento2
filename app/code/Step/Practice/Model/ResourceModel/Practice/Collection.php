<?php
namespace Step\Practice\Model\ResourceModel\Practice;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Step\Practice\Model\Practice', 'Step\Practice\Model\ResourceModel\Practice');
    }
}