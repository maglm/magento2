<?php
namespace Step\Practice\Model\ResourceModel;
class Practice extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('trial', 'id');
    }
}