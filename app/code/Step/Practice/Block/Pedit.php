<?php
namespace Step\Practice\Block;
use Magento\Framework\View\Element\Template;
//use Magento\Framework\App\Action\Context;

 
class Pedit extends Template
{    
    protected $_modelPracticeFactory;
     public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Step\Practice\Model\PracticeFactory $practiceFactory) 
     {      
            
            parent::__construct($context);
            $urlId = $this->getRequest()->getParam('id'); 
            $id = $urlId;
             $this->_practiceFactory = $practiceFactory;      

            $collection = $this->_practiceFactory->create()->getCollection()->addFilter('id', $id);
            $this->setCollection($collection);     
     }
    protected function _prepareLayout()
    {        
        parent::_prepareLayout();        
    }
    
    
}