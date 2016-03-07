<?php
namespace Sample\Trial\Block;
use Magento\Framework\View\Element\Template;
//use Magento\Framework\App\Action\Context;
use Sample\Trial\Model\TrialFactory;
 
class Edit extends Template
{    
    protected $_modelTrialFactory;
     public function __construct(\Magento\Framework\View\Element\Template\Context $context, TrialFactory $modelTrialFactory) 
     {      
            
            parent::__construct($context);
            $urlId = $this->getRequest()->getParam('id'); 
            $id = $urlId;
            $this->_modelTrialFactory = $modelTrialFactory;              

            $collection = $this->_modelTrialFactory->create()->getCollection()->addFilter('author_id', $id);
            $this->setCollection($collection);     
     }
    protected function _prepareLayout()
    {        
        parent::_prepareLayout();        
    }
    
    
}