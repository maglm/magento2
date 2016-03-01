<?php
 
namespace Tutorial\SimpleNews\Block;
 
use Magento\Framework\View\Element\Template;
use Tutorial\SimpleNews\Model\NewsFactory;
 
class NewsList extends Template
{
   /**
    * @var \Tutorial\SimpleNews\Model\NewsFactory
    */
   protected $_newsFactory;
 
   /**
    * @param Template\Context $context
    * @param NewsFactory $newsFactory
    * @param array $data
    */
   public function __construct(
      Template\Context $context,
      NewsFactory $newsFactory,
      array $data = []
   ) {
        $this->_newsFactory = $newsFactory;
        parent::__construct($context, $data);
   }
 
   /**
     * Set news collection
     */
    protected  function _construct()
    {
        parent::_construct();
        $collection = $this->_newsFactory->create()->getCollection()
            ->setOrder('id', 'DESC');
        $this->setCollection($collection);
    }
 
   /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        /** @var \Magento\Theme\Block\Html\Pager */
        $pager = $this->getLayout()->createBlock(
           'Magento\Theme\Block\Html\Pager',
           'simplenews.news.list.pager'
        );
        $pager->setLimit(5)
            ->setShowAmounts(false)
            ->setCollection($this->getCollection());
        $this->setChild('pager', $pager);
        $this->getCollection()->load();
 
        return $this;
    }
 
   /**
     * @return string
     */
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}
