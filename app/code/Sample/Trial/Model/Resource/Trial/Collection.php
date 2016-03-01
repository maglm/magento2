<?php
 
namespace Sample\Trial\Model\Resource\Trial;
 
use Magento\Framework\Model\Resource\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    /*protected function _construct()
    {
        $this->_init(
            'Sample\Trial\Model\Trial',
            'Sample\Trial\Model\Resource\Trial'
        );
    }*/

    protected function _construct()
    {
        $this->_init('Sample\Trial\Model\Trial', 'Sample\Trial\Model\Resource\Trial');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }
     /**
     * Prepare page's statuses.
     * Available event cms_page_get_available_statuses to customize statuses.
     *
     * @return array
     */
    public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }
}