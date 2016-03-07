<?php
 
namespace Sample\Trial\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Trial extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Sample\Trial\Model\ResourceModel\Trial');
    }
}
