<?php 
namespace Step\Practice\Model; 
use Magento\Framework\Model\AbstractModel; 
class Practice extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Step\Practice\Model\ResourceModel\Practice');
    }
}
