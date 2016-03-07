<?php
namespace Mage\Document\Block;
use Magento\Framework\View\Element\Template;
//use Magento\Framework\App\Action\Context;

 
class Edit extends Template
{    
    protected $_modelDocumentFactory;
     public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Mage\Document\Model\DocumentFactory $documentFactory) 
     {      
            
            parent::__construct($context);
            $urlId = $this->getRequest()->getParam('id'); 
            $id = $urlId;
             $this->_documentFactory = $documentFactory;      

            $collection = $this->_documentFactory->create()->getCollection()->addFilter('id', $id);
            $this->setCollection($collection);     
     }
    protected function _prepareLayout()
    {        
        parent::_prepareLayout();        
    }
    
    
}