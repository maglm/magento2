<?php
 
namespace Step\Practice\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
 
class Index extends \Magento\Framework\App\Action\Action
{
/**
* @param Context $context
* @param PageFactory $resultPageFactory
*/
	protected $_practiceFactory;
	public function __construct(Context $context, PageFactory $resultPageFactory, \Step\Practice\Model\PracticeFactory $practiceFactory)
	{
		parent::__construct($context);
		$this->_practiceFactory = $practiceFactory;
		$this->resultPageFactory = $resultPageFactory;
	} 
	public function execute()
	{
		$resultPageFactory = $this->resultPageFactory->create();
		/*----------------------Starting of Displaying data from the database---------------------*/
		$practiceModel = $this->_practiceFactory->create();
       	$urlId = $this->getRequest()->getParam('id');
        $del  =  $this->getRequest()->getParam('del');   
        if($urlId!='' && $del=='del')
        {
            $practiceModel->setId($urlId)->delete();
           $this->messageManager->addSuccess(__('The Name has been Deleted Successfully.'));
             return $this->resultRedirectFactory->create()->setUrl('../../../../../index');                   
                
        }
        
		/*----------------------Ending of Displaying Data from the Database------------------------*/

		return $resultPageFactory;
	}
	
}