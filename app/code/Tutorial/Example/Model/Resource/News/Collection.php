<?php
 
namespace Tutorial\Example\Model\Resource\News;
 
use Magento\Framework\Model\Resource\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Tutorial\Example\Model\News',
            'Tutorial\Example\Model\Resource\News'
        );
    }
}