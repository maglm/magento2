<?php
namespace Sample\Trial\Controller\Index\Edit;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

 
class Edit extends \Magento\Framework\App\Action\Action
{
/**
* @param Context $context
* @param PageFactory $resultPageFactory
*/
	public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    } 
    public function execute()
    {
        $resultPageFactory = $this->resultPageFactory->create();
        return $resultPageFactory;
    }
   
}