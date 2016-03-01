<?php
 
namespace Sample\Trial\Model\Resource;
 
use Magento\Framework\Model\Resource\Db\AbstractDb;
 
class Trial extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('trial', 'id');
       
    }
}