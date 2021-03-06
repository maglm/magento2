<?php
namespace Sample\Trial\Block;
use Magento\Framework\View\Element\Template;
//use Magento\Framework\App\Action\Context;
use Sample\Trial\Model\TrialFactory;
 
class Main extends Template
{    
	protected $_modelTrialFactory;
	 public function __construct(\Magento\Framework\View\Element\Template\Context $context, TrialFactory $modelTrialFactory) 
	 {
	        parent::__construct($context);
	        $this->_modelTrialFactory = $modelTrialFactory;	 
	        $collection = $this->_modelTrialFactory->create()->getCollection();
        	$this->setCollection($collection);        
	 }
	protected function _prepareLayout()
	{
	    parent::_prepareLayout();
        /*if ($this->getCollection())
         {
         	 // create pager block for collection 
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'sample.trial.record.pager'
            )->setCollection(
                $this->getCollection() // assign collection to pager
            );
            $this->setChild('pager', $pager);// set pager block in layout
        }
        return $this;     */
	}
	public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }   
    
}