<?php
namespace Mage\Document\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Framework\App\Action\Action
{
	protected $_modelDocumentFactory;
	public function __construct(Context $context, PageFactory $resultPageFactory, \Mage\Document\Model\DocumentFactory $documentFactory)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
		 $this->_documentFactory = $documentFactory;  
	} 
	public function execute()
	{
		$resultPageFactory = $this->resultPageFactory->create();
		/*----------------------Starting of data deliting---------------------*/
		$model = $this->_documentFactory->create();
			$urlId = $this->getRequest()->getParam('id');
        $del  =  $this->getRequest()->getParam('del');   
        if($urlId!='' && $del=='del')
        {
            $model->setId($urlId)->delete();
           $this->messageManager->addSuccess(__('The Name has been Deleted Successfully.'));
             return $this->resultRedirectFactory->create()->setUrl('../../../../../index');                   
                
        }
        /*----------------------------Ending of data deleting-------------------------------*/
		return $resultPageFactory;
	}
}
