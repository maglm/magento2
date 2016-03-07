<?php
 
namespace Mage\Document\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Document extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Mage\Document\Model\ResourceModel\Document');
    }
}
?>