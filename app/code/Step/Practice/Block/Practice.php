<?php
namespace Step\Practice\Block;
use Magento\Framework\View\Element\Template;

 
class Practice extends Template
{    
    protected $_modelPracticeFactory;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Step\Practice\Model\PracticeFactory $practiceFactory) 
     {      
            parent::__construct($context);
            $this->_practiceFactory = $practiceFactory;  
            $collection = $this->_practiceFactory->create()->getCollection();
            $this->setCollection($collection);        
     }
    protected function _prepareLayout()
    {
        
        parent::_prepareLayout();
        
    }
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }   
} 
