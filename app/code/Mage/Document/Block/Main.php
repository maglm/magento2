<?php
namespace Mage\Document\Block;
use Magento\Framework\View\Element\Template;

 
class Main extends Template
{    
    protected $_modelDocumentFactory;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Mage\Document\Model\DocumentFactory $documentFactory) 
     {      
            parent::__construct($context);
            $this->_documentFactory = $documentFactory;  
            $collection = $this->_documentFactory->create()->getCollection();
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
