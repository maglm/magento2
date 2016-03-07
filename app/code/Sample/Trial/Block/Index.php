<?php
namespace Sample\Trial\Block;
class Index extends \Magento\Framework\View\Element\Template
{
     protected $_gridFactory; 
     public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Sample\Trial\Model\GridFactor $gridFactory, array $data = [])
      {
        $this->_gridFactory = $gridFactory;
        parent::__construct($context, $data);
        //get collection of data 
        $collection = $this->_gridFactory->create()->getCollection();
        $this->setCollection($collection);
        $this->pageConfig->getTitle()->set(__('My Grid List'));
    }
}
?>