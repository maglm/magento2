<?php
 
namespace Tutorial\Example\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class News extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Tutorial\Example\Model\Resource\News');
    }
}