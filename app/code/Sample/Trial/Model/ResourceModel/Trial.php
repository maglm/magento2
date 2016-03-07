<?php
namespace Sample\Trial\Model\ResourceModel;
class Trial extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('sample_news_author', 'author_id');
    }
}