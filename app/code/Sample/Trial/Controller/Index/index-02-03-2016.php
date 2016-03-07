<?php
namespace Sample\Trial\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Sample\Trial\Model\TrialFactory;

 
class Index extends \Magento\Framework\App\Action\Action
{
/**
* @param Context $context
* @param PageFactory $resultPageFactory
*/
    protected $_modelTrialFactory;
	public function __construct(Context $context, PageFactory $resultPageFactory, TrialFactory $modelTrialFactory)
    {
        parent::__construct($context);
         $this->_modelTrialFactory = $modelTrialFactory;
        $this->resultPageFactory = $resultPageFactory;
    } 
    public function execute()
    {
        $resultPageFactory = $this->resultPageFactory->create();
        /*----------------Display data from Model to Controller------------------*/
        $newsModel = $this->_modelTrialFactory->create();

         // Load the item with ID is 1
        
         // Get news collection
         $newsCollection = $newsModel->getCollection();
         // Load all data of collection
         var_dump($newsCollection->getData());
        /*----------------Ending of Data display froM Model to Controller--------------*/
        return $resultPageFactory;
    }
}