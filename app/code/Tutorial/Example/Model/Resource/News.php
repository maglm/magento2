<?php
 
namespace Tutorial\Example\Model\Resource;
 
use Magento\Framework\Model\Resource\Db\AbstractDb;
 
class News extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('tutorial_example', 'id');
    }
}