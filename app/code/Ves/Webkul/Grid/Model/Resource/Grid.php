<?php
namespace Webkul\Grid\Model\Resource;
 
class Grid extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        //wk_grid_record is table and grid_record_id is primary key of this table
        $this->_init('wk_grid_records', 'grid_record_id');
    }
}
?>
