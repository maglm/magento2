<?php
namespace Webkul\Grid\Model;
 
class Grid extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Webkul\Grid\Model\Resource\Grid');
    }
}
 
?>